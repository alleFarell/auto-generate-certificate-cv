<style>
    page {
        font-family:poppinslight;
    }

    .header {
        text-align: left;
    }

    .nama {
        margin: 0;
        padding: 0;
        font-size: 26pt;
        font-family:poppinssemibold;
    }

    .dom_wa {
        margin: 7px 0px 0px 2px;
        padding: 0;
        font-size: 11pt;
    }

    .email_linkedin {
        margin: 2px 0px 0px 2px;
        padding: 0;
        font-size: 11pt;
    }

    .tbl {
        width: 595pt;
        margin-left: 30px;
        margin-right: 30px;
    }

    .contain {
        margin: 0px 30px 3px 37px;
    }


    .kiri, .kanan {
        width: 260pt;
        padding: 7px;

    }
    
    h3 {
        /* color: #F9D563; */
        color: #000000;
        padding: 0px;
        margin: 5px 0px 5px 0px;
        font-size: 14pt;
        text-transform: uppercase;
        font-family:poppinsmedium;
        text-align: center;
        
    }

    .container_h3 {
        background-color: #D5EEBB;
    }

    .datadiri {
        background-color: #D5EEBB;
        margin: 0px 0px 20px 0px;
        padding: 10px;
    }

    .heading {
        font-weight: bold;
        font-size: 11pt;
        margin-bottom: 2px;
        margin-top: 5px;
        font-family:poppinsmedium;
    }

    .sub-head {
        font-weight: bold;
        font-size: 10.5pt;
        margin: 3px 0px 3px 0px;
        /* color: #4e5456; */
        color: #AAAAAA;
        font-family:poppinsmedium;
    }

    .heading-role {
        color: #F98404;
        /* color: #E43397; */
    }
    .sub {
        margin: 3px 0px 5px 0px;
        font-size: 10pt;
        line-height: 1.5;
        text-align: justify;
    }

    .italic {
        font-style: italic;
    }

    .item {
        font-size: 10pt;
    } 

    #table {
        width: 100%; 
        /* padding-top: 140px;
        padding-bottom: 60px; */
    }

    #kiri {
        /* text-align: center; */
        width:60%;
    }

    #kanan {
        /* text-align: center; */
        width:40%;
    }

    .image{
        text-align: center;
    }

    img{
        width: 70pt;
        height: 70pt;
    }

</style>

@php
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    $str_skills = $data_biodata[0]->skills;
    $arr_skills = explode('-', $str_skills)
@endphp

<page footer="page" backimg="{{ url('template_cv/desain-cv-2.png') }}">
    <div class="header datadiri">
        <table id="table">
            <tr>
                <td id="kiri">
                    <div class="nama">{{ucwords($data_biodata[0]->fullname)}}</div>
                    <div class="dom_wa">{{ucwords($data_biodata[0]->city)}}, {{ucwords($data_biodata[0]->country)}} | {{$data_biodata[0]->phone}}</div>
                    @if (($data_biodata[0]->linkedIn)=='-')
                        <div class="email_linkedin">{{$data_biodata[0]->email}}</div>
                    @else
                        <div class="email_linkedin">{{$data_biodata[0]->email}} | {{substr($data_biodata[0]->linkedIn, 12)}}</div>
                    @endif
                </td>
                <td id="kanan">
                    <div class="image">
                        <img src="{{url('img/contoh_foto_1.png')}}"><br>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <table class="tbl" CELLSPACING='0' cellpadding='5'>
        <tr valign="top">
            <td class="kiri">   
                @if(count($data_education) == 0)
                    <span></span>
                @else
                    <div class="container_h3">
                        <h3>pendidikan</h3>
                    </div>
                    @foreach($data_education as $key=>$value)
                        <div class="heading">{{ucwords($value->university)}} ({{ucwords($value->degree)}})</div>
                        <div class="sub-head">
                            @php
                                $start = explode("-", $value->start_date);
                                $end = explode("-", $value->end_date);
                                $start_date = $bulan[(int) $start[1]].' '.$start[0];
                                if ($value->end_date > now()){
                                    $end_date = "Present";
                                } else{
                                    $end_date = $bulan[(int) $end[1]].' '.$end[0];
                                }
                                echo $start_date.' s/d '.$end_date;
                            @endphp
                        </div>
                        <div class="sub">{{$value->major}}</div>
                        <div class="sub">IPK : {{$value->gpa}}/4.00</div>
                    @endforeach
                @endif
                <br>
                @if(count($data_project) == 0)
                    <span></span>
                @else
                    <div class="container_h3">
                        <h3 >Proyek</h3>
                    </div>
                    @foreach($data_project as $key=>$value)
                        <div class="heading">{{ucwords($value->project_name)}} 
                            @if ($value->role == '-')
                                <span></span></div>
                            @else
                                - <span class="heading-role">{{ucwords($value->role)}}</span></div>
                            @endif
                        <div class="sub-head">
                            @php
                                $start = explode("-", $value->start_date);
                                $end = explode("-", $value->end_date);
                                $start_date = $bulan[(int) $start[1]].' '.$start[0];
                                if ($value->end_date > now()){
                                    $end_date = "Present";
                                } else{
                                    $end_date = $bulan[(int) $end[1]].' '.$end[0];
                                }
                                echo $start_date.' s/d '.$end_date;
                            @endphp
                        </div>
                        <div class="sub">{{ucfirst($value->description)}}</div>
                    @endforeach
                @endif
            </td>
            <td class="kanan">
                @if(count($data_organization) == 0)
                    <span></span>
                @else
                    <div class="container_h3">
                        <h3>Pengalaman Organisasi</h3>
                    </div>
                    @foreach($data_organization as $key=>$value)
                        <div class="heading">{{ucwords($value->organization_name)}}</div>
                        <div class="sub-head">
                            @php
                                $start = explode("-", $value->start_date);
                                $end = explode("-", $value->end_date);
                                $start_date = $bulan[(int) $start[1]].' '.$start[0];
                                if ($value->end_date > now()){
                                    $end_date = "Present";
                                } else{
                                    $end_date = $bulan[(int) $end[1]].' '.$end[0];
                                }
                                echo $start_date.' s/d '.$end_date;
                            @endphp
                        </div>
                        <div class="sub">{{ucwords($value->role)}}</div>
                    @endforeach
                @endif
                <br>
                @if(count($data_seminar) == 0)
                    <span></span>
                @else
                    <div class="container_h3">
                        <h3>Seminar & Training</h3>
                    </div>
                    @foreach($data_seminar as $key=>$value)
                        <div class="heading">{{ucwords($value->event_name)}}</div>
                        <div class="sub-head">
                            @php
                                $start = explode("-", $value->start_date);
                                $end = explode("-", $value->end_date);
                                $start_date = $start[2].' '.$bulan[(int) $start[1]].' '.$start[0];
                                if ($value->end_date > now()){
                                    $end_date = "Present";
                                } else{
                                    $end_date = $end[2].' '.$bulan[(int) $end[1]].' '.$end[0];
                                }

                                #Code below is checking if the seminar event was held in one date only

                                if ($value->start_date != $value->end_date){
                                    echo $start_date.' s/d '.$end_date;
                                } else{
                                    echo $end_date;
                                }
                            @endphp
                        </div>
                        <div class="sub">{{ucwords($value->organizer)}}</div>
                    @endforeach
                @endif
                <br>
                @if(empty($data_biodata[0]->skills))
                    <span></span>
                @else
                <div class="container_h3">
                    <h3>Skill</h3>
                </div>
                <br>
                @for ($i=0; $i < count($arr_skills); $i++)
                        @if ($i==count($arr_skills)-1)
                            <span class="item">{{ ucwords($arr_skills[$i]) }}</span> 
                        @else
                            <span class="item">{{ ucwords($arr_skills[$i]) }} | </span> 
                        @endif
                @endfor
                @endif
                <br>
            </td>
        </tr>
    </table>

    
    
</page>
