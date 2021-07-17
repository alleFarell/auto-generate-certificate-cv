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
        width:5%;
    }

    #tengah {
        text-align: center;
        width:90%;
        padding: 0px;
    }

    #txt_tipe {
        font-size:23pt; 
        color:#f26c4f
    }

    #txt_event {
        font-size:22pt; 
        color: #9e0b0f
    }
</style>

@foreach ($data as $d)
<page id="full" backimg="{{ url('template/certificate_2.jpg') }}">
    <table id="nomor">
        <tr>
            <td id="kiri">
            </td>
            <td id="tengah">
                <p>{{$d->nomor}}</p>
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
                <span>{{$d->nama}}</span>
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
				<span id="txt_event">{{ucwords($d->event)}}</span>
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
</page>
@endforeach