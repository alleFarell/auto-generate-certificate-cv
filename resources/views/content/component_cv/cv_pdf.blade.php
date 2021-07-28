<style>
    .container {
        margin: 0px 20px 0px 20px;
        font-family: times;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    h3 {
        color: #5f9ea0;
        padding: 0px;
        margin: 0px 0px 10px 0px;
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
    }

    .kiri {
        width: 40%;
        font-weight: bold;
        font-size: 11pt;
    }

    .kanan {
        width: 60%;
        padding-left: 30px;
    }

    .title {
        font-weight: bold;
        font-size: 11pt;
    }

    .subs {
        font-size: 11pt;
        padding-top: 2px;
        margin: 0px;
        width: 80%;

    }

    .subs-proyek {
        font-size: 11pt;
        padding-top: 2px;
        padding-bottom: 20px;
        margin: 0px;
        width: 70%;
        text-align: justify;
    }

    .italic {
        font-style: italic;
    }

    .item {
        font-size: 12pt;
        width: 100%;
    }

</style>
<page backcolor=#ffffff footer="page">
    <div class="container">
        <div class="header">
            <h1 class="nama">{{$data_biodata[0]->fullname}}</h1>
            <p class="dom_wa">{{$data_biodata[0]->city}}, {{$data_biodata[0]->country}} | {{$data_biodata[0]->phone}}</p>
            <p class="email_linkedin">{{$data_biodata[0]->email}} | {{$data_biodata[0]->linkedIn}}</p>
        </div>
    </div>
    <div class="batas"></div>
    <div class="container">
        <h3>Pendidikan</h3>
        <table>
            @foreach($data_education as $key=>$value)
                <tr>
                    <td class="kiri">Agustus 2018 - Juli 2022</td>
                    <td class="kanan"><span class="title">{{$value->university}} - {{$value->degree}}</span><br>
                        <div class="subs">{{$value->major}}</div>
                        <div class="subs">{{$value->gpa}}/4.00</div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <h3>Seminar & Training</h3>
        <table>
            @foreach($data_seminar as $key=>$value)
                <tr>
                    <td class="kiri">27 Desember 2020</td>
                    <td class="kanan"><span class="title">{{$value->event_name}}</span><br>
                        <div class="subs">{{$value->organizer}}</div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <h3>Proyek</h3>
        <table>
            @foreach($data_project as $key=>$value)
                <tr>
                    <td class="kiri">Juni 2021 - Juni 2021</td>
                    <td class="kanan"><span class="title">{{$value->project_name}}</span><br>
                        <div class="subs italic">{{$value->role}}</div>
                        <div class="subs-proyek">{{$value->description}}</div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <h3>Organisasi</h3>
        <table>
            @foreach($data_organization as $key=>$value)
                <tr>
                    <td class="kiri">Maret 2021 - Maret 2022</td>
                    <td class="kanan"><span class="title">{{$value->organization_name}}</span><br>
                        <div class="subs italic">{{$value->role}}</div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <table>
            <tr>
                <td class="kiri">
                    <h3>Skill</h3>
                </td>
                <td class="kanan">
                    <div class="item">- Javascript</div>
                    <div class="item">- HTML</div>
                    <div class="item">- CSS</div>
                    <div class="item">- Python3</div>
                    <div class="item">- Golang</div>
                    <div class="item">- Codeigniter</div>
                    <div class="item">- Laravel</div>
                    <div class="item">- Oracle SQL Developer</div>
                </td>
            </tr>
        </table>
    </div>
    
</page>
