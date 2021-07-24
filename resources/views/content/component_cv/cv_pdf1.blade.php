<style>
    .header {
        text-align: center;
    }

    .nama {
        margin: 20px 0px 5px 0px;
    }

    .dom_wa {
        margin: 0;
    }

    .email_linkedin {
        margin: 0px 0px 20px 0px;
    }

    .row {
        display: grid;
        grid-template-columns: 0.8fr 1.2fr;
        grid-template-rows: 1fr;
        gap: 0px 0px;
        grid-auto-flow: row;
        grid-template-areas:
            "kiri kanan";
    }

    .kiri {
        grid-area: kiri;
        font-weight: bold;
    }

    .kanan {
        grid-area: kanan;
    }

    .title {
        font-weight: bold;
    }

    .sub {
        margin: 3px 0px 3px 0px;
        text-align: justify;
    }

    .italic {
        font-style: italic;
    }

    @media print {
        .row {
            page-break-inside: avoid;

        }
    }
    @page {
        size: A4;
        margin: 2cm;
    }


</style>
<page>
<div class="block"></div>
<div class="header">
    <h1 class="nama">Ghina Khoerunnisa</h1>
    <p class="dom_wa">Bandung, Indonesia | (+62) 85279630592</p>
    <p class="email_linkedin">gkhoerunnisa@gmail.com | linkedin.com/in/ghina-khoerunnisa/</p>
</div>
<hr>
<div class="content" style="margin: 5px 20px 5px 20px">
    <h2>Pendidikan</h2>
    <div class="row">
        <div class="kiri">Agustus 2018 - Juli 2022</div>
        <div class="kanan">
            <div class="title">Telkom University - Sarjana / Bachelor</div>
            <div class="sub">Informatika</div>
            <div class="sub">3.00/4.00</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">Oktober 2022 - Agustus 2024</div>
        <div class="kanan">
            <div class="title">Institut Teknologi Bandung - Master / Magister</div>
            <div class="sub">Informatika</div>
            <div class="sub">3.00/4.00</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">September 2024 - November 2027</div>
        <div class="kanan">
            <div class="title">Institut Teknologi Bandung - Doktor / Doctor</div>
            <div class="sub">Informatika</div>
            <div class="sub">3.00/4.00</div>
        </div>
    </div>

    <h2>Seminar & Training</h2>
    <div class="row">
        <div class="kiri">27 Desember 2020</div>
        <div class="kanan">
            <div class="title">Changing The Way You Think To Fulfil Your Potential</div>
            <div class="sub">Telkom University</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">27 Maret 2020 - 29 April 2020</div>
        <div class="kanan">
            <div class="title">Nama Seminar / Training</div>
            <div class="sub">Penyelenggara</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">27 Maret 2020 - 29 April 2020</div>
        <div class="kanan">
            <div class="title">Nama Seminar / Training</div>
            <div class="sub">Penyelenggara</div>
        </div>
    </div>

    <h2>Proyek</h2>
    <div class="row">
        <div class="kiri">Juni 2021 - Juni 2021</div>
        <div class="kanan">
            <div class="title">Simulasi Penyebaran Virus (Random Walk 2 Dimensi dengan 4 Arah)</div>
            <div class="sub italic">Programmer</div>
            <div class="sub">Untuk memenuhi tugas besar mata kuliah Pemodelan dan Simulasi. Membuat simulasi
                bagaimana virus menyebar di suatu komunitas dengan ketentuan yang telah diberikan dan
                menghitung waktu pulih komunitas tersebut</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">Juni 2021 - Juni 2021</div>
        <div class="kanan">
            <div class="title">Simple Activity Log (Client-Server Socket)</div>
            <div class="sub italic">Programmer</div>
            <div class="sub">Merupakan tugas besar mata kuliah Sistem Paralel dan Terdistribusi. Membuat program
                sederhana mengenai activity logging client dan server. Pada tugas ini saya menggunakan
                socket (Inter-Process Communication)</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">Maret 2021 - Maret 2021</div>
        <div class="kanan">
            <div class="title">Multi-Channel Contacts (Data Analytics Challenge)</div>
            <div class="sub italic">-</div>
            <div class="sub">Mengidentifikasi setiap tiket ke customer service, jika user memiliki informasi kontak yang
                sama dengan asumsi bahwa setiap kontak dengan nomor telepon atau email yang sama
                adalah pengguna yang sama. Menjadi anggota dan berkontribusi dalam menganalisis data.
                Mendapatkan skor sebesar 0.66587
            </div>
        </div>
    </div>
    
    <h2>Pengalaman Organisasi</h2>
    <div class="row">
        <div class="kiri">Maret 2021 - Maret 2022</div>
        <div class="kanan">
            <div class="title">Nama Organisai</div>
            <div class="sub italic">Role</div>
        </div>
    </div>
    <div class="row">
        <div class="kiri">Maret 2021 - Maret 2022</div>
        <div class="kanan">
            <div class="title">Nama Organisai</div>
            <div class="sub italic">Role</div>
        </div>
    </div>

    <div class="row">
        <div class="kiri"><h2>Skill</h2></div>
        <div class="kanan">
            <ul style="margin-top: 10px;padding: 13px;">
                <li>Javascript</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>Bootstrap</li>
                <li>PHP</li>
                <li>Python3</li>
            </ul>
        </div>
    </div>
</div>
</page>