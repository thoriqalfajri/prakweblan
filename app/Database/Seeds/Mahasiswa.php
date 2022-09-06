<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [[
            'npm' => '2057051002',
            'nama'    => 'M. Thoriq Al Fajri',
            'alamat' => 'Kota Jambi',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051007',
            'nama'    => 'Muhammad Faiz',
            'alamat' => 'Lampung',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051060',
            'nama'    => 'Ahmad Al Farizi',
            'alamat' => 'Depok',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051075',
            'nama'    => 'Riyo Pratama J.',
            'alamat' => 'Krui',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2057051019',
            'nama'    => 'Muhammad Sultan Raisyah',
            'alamat' => 'Jakarta Selatan',
            'created_at' =>Time::now()
        ],
    ];
        foreach($data_mahasiswa as $data){
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
