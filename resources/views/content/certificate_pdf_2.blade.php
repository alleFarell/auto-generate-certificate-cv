<style>
    #full {
        width: 1123px;
        height: 793px;
    }

    img {
        width: 1123px;
        height: 793px;
    }

    #nomor {
        width: 100%; 
        padding-top: 140px;
        padding-bottom: 60px;
        font-family:times;
    }

    #nama{
        width: 100%; 
        padding-top: 30px; 
        font-size:30pt; 
        font-weight: bold;
        font-family:GillSansMT-Bold;
        color: #9e0b0f;
    }

    #tipe_event{
        width: 100%; 
        padding-top: 70px;
        font-family:GillSansMT-Bold;
        font-weight: bold;
    }

    #ttd{
        width: 100%; 
        padding-top: 24px; 
        font-size:15pt; 
        font-weight: bold;
        font-family:GillSansMT-Bold;
    }

    #kiri, #kanan {
        text-align: center;
        width:10%;
    }

    #tengah {
        text-align: center;
        width:80%;
        padding: 0px;
    }

    #txt_tipe {
        font-size:23pt; 
        color:#f26c4f
    }

    #txt_event_shrt {
        font-size:22pt; 
        color: #9e0b0f
    }
    #txt_event_long {
        font-size:18pt; 
        color: #9e0b0f

    }
    #qrcode {
        width: 27mm; 
        height: 27mm; 
        margin-left:230px; 
        margin-top: 17px;
    }

</style>
@foreach ($data as $d)
<page id="full" backimg="{{ asset('storage/templates/'.$d->design_certificate->filename) }}">
    <table id="nomor">
        <tr>
            <td id="kiri">
            </td>
            <td id="tengah">
                <p>No: {{$d->nomor}}</p>
            </td>
            <td id="kanan">
            </td>
        </tr>
    </table>
    <table id="nama">
        <tr>
            <td id="kiri">
            </td>
            <td id="tengah">
                @php
                    $str = $d->nama;
                    $word = explode(" ",$str);
                    if (count($word) > 5){
                        $last_word = str_word_count($str) - 1;
                        $huruf = $word[$last_word][0] . ".";
                        $str = str_replace($word[$last_word], $huruf, $str);
                    }
                @endphp
                <span>{{$str}}</span>
            </td>
            <td id="kanan">
            </td>
        </tr>
    </table>
	<table id="tipe_event" >
        <tr>
            <td id="kiri">
            </td>
            <td id="tengah">
                <span id="txt_tipe">{{strtoupper($d->tipe)}}</span><br><br>
				@if (strlen($d->event) <= 55)
				    <span id="txt_event_shrt">{{ucwords($d->event)}}</span>
                @else
                <span id="txt_event_long">{{ucwords($d->event)}}</span>
                @endif
            </td>
            <td id="kanan">
            </td>
        </tr>
    </table>
    <table id="ttd" >
        <tr>
            <td id="kiri">
            </td>
            <td id="tengah">
                <span>Bandung, {{($tgl_indo)}}</span>
            </td>
            <td id="kanan">
            </td>
        </tr>
    </table>
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(700)->backgroundColor(0, 0, 0, 0)->generate(Request::url())) !!} " id="qrcode">
</page>
@endforeach