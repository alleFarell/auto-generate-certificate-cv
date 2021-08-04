<style>
    page {
        font-family: times;
    }

    .header {
        text-align: center;
        margin-bottom: 10px;
    }

    .nama {
        margin: 0;
        padding: 0;
        font-size: 24pt;
    }

    .dom_wa {
        margin: 7px 0px 0px 0px;
        padding: 0;
        font-size: 12pt;
    }

    .email_linkedin {
        margin: 2px 0px 0px 0px;
        padding: 0;
        font-size: 12pt;
    }

    .batas {
        border-bottom: 0.5px solid black;
        padding: 0px;
        margin: 10px 0px 10px 0px;
    }
    
    h3 {
        /* color: #2541B1; */
        color: #055052;
        padding: 0px;
        margin: 0px 0px 5px 0px;
        font-size: 13pt;
        text-transform: uppercase;
    }

    .contain {
        margin: 0px 20px 3px 20px;
    }

    .heading {
        font-weight: bold;
        font-size: 12pt;
        margin-bottom: 2px;
    }

    .sub-head {
        font-weight: bold;
        font-size: 10.5pt;
        margin: 3px 0px 3px 0px;
        /* color: #5F6769; */
        color: #4e5456;
        /* color: #444a4b; */
    }

    .heading-role {
        /* color: #2a4acb; */
        color: #077074;
    }
    .sub {
        margin: 3px 0px 3px 0px;
        text-align: justify;
        font-size: 11pt;
    }

    .italic {
        font-style: italic;
    }

    .item {
        font-size: 12pt;
        width: 100%;
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

<page footer="page">
    <div class="header">
        <h1 class="nama">{{ucwords($data_biodata[0]->fullname)}}</h1>
        <p class="dom_wa">{{ucwords($data_biodata[0]->city)}}, {{ucwords($data_biodata[0]->country)}} | {{$data_biodata[0]->phone}}</p>
        <p class="email_linkedin">{{$data_biodata[0]->email}} | {{substr($data_biodata[0]->linkedIn,12)}}</p>
    </div>

    @if(count($data_seminar) == 0)
        <span></span>
    @else
        <div class="contain">
            <div class="batas"></div>
            <h3>pendidikan</h3>
        </div>
        @foreach($data_education as $key=>$value)
            <div class="contain">
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
            </div>
        @endforeach
    @endif       
    @if(count($data_seminar) == 0)
        <span></span>
    @else
        <div class="contain">
            <div class="batas"></div>
            <h3>Seminar & Training</h3>
        </div>
        @foreach($data_seminar as $key=>$value)
            <div class="contain">
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
            </div>
        @endforeach
    @endif

    @if(count($data_project) == 0)
        <span></span>
    @else
        <div class="contain">
            <div class="batas "></div>
            <h3 >Proyek</h3>
        </div>
        @foreach($data_project as $key=>$value)
            <div class="contain">
                <div class="heading">{{ucwords($value->project_name)}} - <span class="heading-role">{{ucwords($value->role)}}</span></div>
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
            </div>
        @endforeach
    @endif

    @if(count($data_organization) == 0)
        <span></span>
    @else
        <div class="contain">
            <div class="batas"></div>
            <h3>Pengalaman Organisasi</h3>
        </div>
        @foreach($data_organization as $key=>$value)
            <div class="contain">
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
            </div>
        @endforeach
    @endif

    <div class="contain">
        <div class="batas"></div>
        <h3>Skill</h3>
    </div>
    @for ($i=0; $i < count($arr_skills); $i++)
        <div class="contain">
            <div class="item">- {{ ucwords($arr_skills[$i]) }}</div>
        </div>
    @endfor

</page>
