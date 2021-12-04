<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Query Builder
        DB::table('siswa')
        ->insert([
            [
                "nis" => "2021010001",
                "nama" => "Rahman",
                "jk" => "L",
                "alamat" => "Jalan Depan",
                "tmp_lahir" => "Situbondo",
                "tgl_lahir" => date("2000-02-20"),
                "telepon" => "08123456789",
                "id_jurusan" => 1,
                "nilai" => 90
            ]
        ]);

        // Eloquent
        // Siswa::insert([
        //     [
        //         "nis" => "2021010001",
        //         "nama" => "Rahman",
        //         "jk" => "L",
        //         "alamat" => "Jalan Depan",
        //         "tmp_lahir" => "Situbondo",
        //         "tgl_lahir" => date_create(strtotime("2000-02-20")),
        //         "telepon" => "08123456789",
        //         "id_jurusan" => 1,
        //         "nilai" => 90
        //     ]
        // ]);
    }
}
