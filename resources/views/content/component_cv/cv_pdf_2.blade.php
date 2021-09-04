<style>
    page {
        font-family:poppinslight;
        color: #D1D0D0;
    }
    .header{
        background-color: #334257;
    }

    .nama {
        margin: 0px 0px 0px 0px ;
        padding: 0;
        font-size: 26pt;
        font-family:poppinssemibold;
        text-align: center;
    }

    .dom_wa {
        margin: 7px 0px 0px 0px;
        padding: 0;
        font-size: 11pt;
        text-align: center;
    }

    .email_linkedin {
        margin: 2px 0px 30px 0px;
        padding: 0;
        font-size: 11pt;
        text-align: center;
    }

    .pendidikan{
        background-color: #476072;
        padding-top: 10px;
    }

    .seminar{
        background-color: #5D6E86;
        padding-top: 10px;
    }
    
    .proyek{
        background-color: #334257;
        padding-top: 10px;
    }

    .organisasi{
        background-color: #476072;
        padding-top: 10px;
    }

    .pendidikans{
        background-color: #476072;
        padding-bottom: 10px;
    }

    .seminars{
        background-color: #5D6E86;
        padding-bottom: 10px;
    }
    
    .proyeks{
        background-color: #334257;
        padding-bottom: 10px;
    }

    .organisasis{
        background-color: #476072;
        padding-bottom: 10px;
    }
    
    .skill{
        background-color: #7F88A2;
        padding-top: 10px;  
    }

    .skills{
        background-color: #7F88A2;
        text-align: center; 
        /* padding-bottom: 20px; */
        padding: 0px 50px 20px 50px;  
        padding-bottom: 10px;
    }

    .h3 {
        padding: 0px;
        margin: 0px 0px 10px 0px;
        font-size: 15pt;
        text-transform: uppercase;
        font-family:poppinssemibold;
        text-align: center;
    }

    .heading {
        font-family:poppinsmedium;
        font-size: 12pt;
        margin: 3px 0px 3px 30px;
    }

    .sub-head {
        font-family:poppinsmedium;
        font-size: 10.5pt;
        margin: 3px 0px 3px 30px;
        color: #7F88A2;
        /* color: #D9D9D9; */
    }

    .sub {
        margin: 3px 0px 3px 30px;
        text-align: justify;
        font-size: 11pt;
    }
    
    .sub-end{
        margin: 3px 0px 0px 30px;
        text-align: justify;
        font-size: 11pt;
        width: 540pt;
    }

    .heading-role {
        color: #5271FF;
        /* color: #E43397; */
    }

    .item {
        font-size: 12pt;
        width: 100%;
        margin: 0px 0px 0px 0px;
    }

    .image{
        text-align: center;
        margin-bottom: 10px;
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

<page footer="page" backcolor="#334257">
    <div class="header">
        <div class="image">
            <img src="{{url('img/contoh_foto.png')}}"><br>
        </div>
        <div class="nama">{{ucwords($data_biodata[0]->fullname)}}</div>
        <div class="dom_wa">{{ucwords($data_biodata[0]->city)}}, {{ucwords($data_biodata[0]->country)}} | {{$data_biodata[0]->phone}}</div>
        @if (($data_biodata[0]->linkedIn)=='-')
            <div class="email_linkedin">{{$data_biodata[0]->email}}</div>
        @else
            <div class="email_linkedin">{{$data_biodata[0]->email}} | {{substr($data_biodata[0]->linkedIn,12)}}</div>   
        @endif
    </div>

    @if(count($data_education) == 0)
        <span></span>
    @else
        <div class="pendidikan">
            <div class="h3">p e n d i d i k a n</div>
        </div>
        @foreach($data_education as $key=>$value)
            <div class="pendidikans">
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
                <div class="sub-end">IPK : {{$value->gpa}}/4.00</div>
            </div>
        @endforeach
    @endif  
    
    @if(count($data_seminar) == 0)
        <span></span>
    @else
        <div class="seminar">
            <div class="h3">S e m i n a r & T r a i n i n g</div>
        </div>
        @foreach($data_seminar as $key=>$value)
            <div class="seminars">
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
                <div class="sub-end">{{ucwords($value->organizer)}}</div>
            </div>
        @endforeach
    @endif

    @if(count($data_project) == 0)
        <span></span>
    @else
        <div class="proyek">
            <div class="h3">P r o y e k</div>
        </div>
        @foreach($data_project as $key=>$value)
            <div class="proyeks">
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
                <div class="sub-end">{{ucfirst($value->description)}}</div>
            </div>
        @endforeach
    @endif

    @if(count($data_organization) == 0)
        <span></span>
    @else
        <div class="organisasi">
            <div class="h3">P e n g a l a m a n  O r g a n i s a s i</div>
        </div>
        @foreach($data_organization as $key=>$value)
            <div class="organisasis">
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
                <div class="sub-end">{{ucwords($value->role)}}</div>
            </div>
        @endforeach
    @endif

    @if(empty($data_biodata[0]->skills))
        <span></span>
    @else
    <div class="skill">
        <div class="h3">S k i l l</div>
    </div>
    <div class="skills">
        @for ($i=0; $i < count($arr_skills); $i++)
            @if ($i==count($arr_skills)-1)
                <span class="item">{{ ucwords($arr_skills[$i]) }}</span> 
            @else
                <span class="item">{{ ucwords($arr_skills[$i]) }} | </span> 
            @endif
        @endfor
    </div>
    @endif
</page>
