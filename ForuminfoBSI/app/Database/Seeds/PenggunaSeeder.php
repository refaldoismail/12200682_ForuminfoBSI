<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'     => 'MimiMariani',
                'password' =>md5('12200910')
            ],
            [
                'nama'     => 'RefaldoIsmail',
                'password' =>md5('12200682')
            ],
            [
                'nama'     => 'Aderahul',
                'password' =>md5('12200655')
            ],
            [
                'nama'     => 'AfiefSuseno',
                'password' =>md5('12200660')
            ],
            [
                'nama'     => 'MerryAndany',
                'password' =>md5('12200650')
            ],
            [
                'nama'     => 'FdienSera',
                'password' =>md5('12200907')
            ],
            [   'nama'     => 'admin',
                'password'  =>md5('12345')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
} 