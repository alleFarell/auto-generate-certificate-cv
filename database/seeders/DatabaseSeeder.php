<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;
use App\Models\Education;
use App\Models\Seminar;
use App\Models\Project;
use App\Models\Organization;
use App\Models\DesignCertificate;
use App\Models\Certificate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CV Data
        // Biodata seed
        Biodata::create([
            'fullname' => 'Muhamad Farell Ambiar',
            'email' => 'ambiar.farell@gmail.com',
            'country' => 'indonesia',
            'city' => 'bogor',
            'birthday' => '2000-01-10',
            'phone' => '+6281219643829',
            'linkedIn' => 'https://www.linkedin.com/in/farell-ambiar/',
            'skills' => ''
        ]);

        // Education seed
        Education::create([
            'university' => 'Telkom University',
            'major' => 'Computer Science',
            'degree' => 'Bachelor',
            'start_date' => '2018-08-01',
            'end_date' => '2019-04-01',
            'gpa' => '3.5'
        ]);
        Education::create([
            'university' => 'Institut Teknologi Bandung',
            'major' => 'Cyber Security',
            'degree' => 'Magister',
            'start_date' => '2023-08-01',
            'end_date' => '2024-04-01',
            'gpa' => '3.7'
        ]);

        // Seminars and Trainings seed
        Seminar::create([
            'event_name' => 'Strategi Pengembangan Soft Skill dan Literasi Digital Pelajar di Era New Normal',
            'organizer' => 'Telkom University Open Library',
            'start_date' => '2021-08-11',
            'end_date' => '2021-08-11'
        ]);
        Seminar::create([
            'event_name' => 'Pelatihan Online Marketing',
            'organizer' => 'Kementrian Perhubungan',
            'start_date' => '2011-08-03',
            'end_date' => '2011-08-10'
        ]);
        
        // Projects seed
        Project::create([
            'project_name' => 'Simulasi Penyebaran Virus (Random Walk 2 Dimensi dengan 4 Arah)',
            'role' => 'Back-end programmer',
            'description' => 'Aplikasi untuk membuat simulasi visual dalam rangka tracking penyebaran virus Covid-19',
            'start_date' => '2018-10-11',
            'end_date' => '2019-03-02'
        ]);
        Project::create([
            'project_name' => 'Website UMKM Kuker Hut Bakery',
            'role' => 'Project Leader',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor, quam sed tristique finibus, turpis leo laoreet nulla, eu laoreet magna nisi non diam. Morbi commodo egestas dignissim. Nulla augue ante, mollis sit amet consectetur non, faucibus et odio. Nullam eu dapibus quam, vitae porttitor lectus.',
            'start_date' => '2020-10-11',
            'end_date' => '2021-03-02'
        ]);
        Project::create([
            'project_name' => 'Pembangunan Aplikasi PeduliLindingi',
            'role' => 'Fullstack Developer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor, quam sed tristique finibus, turpis leo laoreet nulla, eu laoreet magna nisi non diam. Morbi commodo egestas dignissim. Nulla augue ante, mollis sit amet consectetur non, faucibus et odio. Nullam eu dapibus quam, vitae porttitor lectus.',
            'start_date' => '2021-05-11',
            'end_date' => '2021-06-02'
        ]);

        // Organizations seed
        Organization::create([
            'organization_name' => 'Himpunnan Mahasiswa Informatika',
            'role' => 'Chairman',
            'start_date' => '2021-02-11',
            'end_date' => '2021-04-11'
        ]);
        Organization::create([
            'organization_name' => 'Big Data Laboratory of Telkom University',
            'role' => 'Study Group Member',
            'start_date' => '2019-02-11',
            'end_date' => '2020-04-11'
        ]);
        Organization::create([
            'organization_name' => 'Forum Betawi Rempug',
            'role' => 'Treasurer',
            'start_date' => '2021-06-11',
            'end_date' => '2021-10-11'
        ]);
        // End of CV Data

        //Certificate Data
        // design_certificate seed
        DesignCertificate::create([
            'no_template' => '1',
            'template_name' => 'Template 01',
            'filename' => 'Auto-Certificate-Template-01-for-web.jpg',
            'filesize' => '1286654'
        ]);
        DesignCertificate::create([
            'no_template' => '2',
            'template_name' => 'Template 02',
            'filename' => 'Auto-Certificate-Template-02-for-web.jpg',
            'filesize' => '1186009'
        ]);
        DesignCertificate::create([
            'no_template' => '3',
            'template_name' => 'Template 03',
            'filename' => 'Auto-Certificate-Template-03-for-web.jpg',
            'filesize' => '1063568'
        ]);

        //Certificate seed
        Certificate::create([
            'nomor' => '00001/seminar/09/2021',
            'nama' => 'Muhamad Farell Ambiar',
            'nim' => '1301184262',
            'tipe' => 'seminar',
            'event' => 'Literasi Event Untuk Meningkatkan Public Speaking',
            'pembicara' => 'Drs. Suherman M.Pd',
            'tanggal_mulai' => '2021-09-01',
            'tanggal_selesai' => '2021-09-02',
            'design_certificate_id' => '1',
            'status' => 'Hadir'
        ]);
        Certificate::create([
            'nomor' => '00002/talkshow/09/2021',
            'nama' => 'Muhamad Farell Ambiar',
            'nim' => '1301184262',
            'tipe' => 'talkshow',
            'event' => 'Literasi Event Untuk Meningkatkan Public Speaking',
            'pembicara' => 'Drs. Ahmad Drajat M.Si',
            'tanggal_mulai' => '2021-09-03',
            'tanggal_selesai' => '2021-09-04',
            'design_certificate_id' => '2',
            'status' => 'Hadir'
        ]);
        Certificate::create([
            'nomor' => '00003/workshop/09/2021',
            'nama' => 'Muhamad Farell Ambiar',
            'nim' => '1301184262',
            'tipe' => 'workshop',
            'event' => 'Literasi Event Untuk Meningkatkan Public Speaking',
            'pembicara' => 'Drs. Panji Danang M.Pd',
            'tanggal_mulai' => '2021-09-07',
            'tanggal_selesai' => '2021-09-07',
            'design_certificate_id' => '3',
            'status' => 'Hadir'
        ]);
        Certificate::create([
            'nomor' => '00004/workshop/09/2021',
            'nama' => 'Muhamad Farell Ambiar',
            'nim' => '1301184262',
            'tipe' => 'workshop',
            'event' => 'Literasi Event Untuk Meningkatkan Public Speaking',
            'pembicara' => 'Drs. Panji Danang M.Pd',
            'tanggal_mulai' => '2021-09-07',
            'tanggal_selesai' => '2021-09-07',
            'design_certificate_id' => '3',
            'status' => ''
        ]);
        Certificate::create([
            'nomor' => '00005/workshop/09/2021',
            'nama' => 'Muhamad Farell Ambiar',
            'nim' => '1301184262',
            'tipe' => 'workshop',
            'event' => 'Literasi Event Untuk Meningkatkan Public Speaking',
            'pembicara' => 'Drs. Panji Danang M.Pd',
            'tanggal_mulai' => '2021-09-07',
            'tanggal_selesai' => '2021-09-07',
            'design_certificate_id' => '3',
            'status' => 'Tidak Hadir'
        ]);

        // End of Certificate Data
    }
}
