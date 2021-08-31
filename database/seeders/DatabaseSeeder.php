<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;
use App\Models\Education;
use App\Models\Seminar;
use App\Models\Project;
use App\Models\Organization;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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
            'end_date' => '2022-04-01',
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
            'start_date' => '2020-10-11',
            'end_date' => '2021-03-02'
        ]);

        // Organizations seed
        Organization::create([
            'organization_name' => 'Himpunnan Mahasiswa Informatika',
            'role' => 'Chairman',
            'start_date' => '2021-02-11',
            'end_date' => '2021-04-11'
        ]);
    }
}
