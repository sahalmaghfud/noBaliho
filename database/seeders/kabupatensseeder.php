<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class kabupatensseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabupatens')->insert([
            // Kabupaten di Provinsi Aceh
            [
                'idprovinsi' => 1,
                'nama' => 'Kabupaten Aceh Besar'
            ],
            [
                'idprovinsi' => 1,
                'nama' => 'Kabupaten Aceh Tengah'
            ],
            // Kabupaten di Provinsi Bali
            [
                'idprovinsi' => 2,
                'nama' => 'Kabupaten Badung'
            ],
            [
                'idprovinsi' => 2,
                'nama' => 'Kabupaten Buleleng'
            ],
            // Kabupaten di Provinsi Banten
            [
                'idprovinsi' => 3,
                'nama' => 'Kabupaten Lebak'
            ],
            [
                'idprovinsi' => 3,
                'nama' => 'Kabupaten Pandeglang'
            ],
            // Kabupaten di Provinsi Bengkulu
            [
                'idprovinsi' => 4,
                'nama' => 'Kabupaten Bengkulu Selatan'
            ],
            [
                'idprovinsi' => 4,
                'nama' => 'Kabupaten Rejang Lebong'
            ],
            // Kabupaten di Provinsi Gorontalo
            [
                'idprovinsi' => 5,
                'nama' => 'Kabupaten Bone Bolango'
            ],
            [
                'idprovinsi' => 5,
                'nama' => 'Kabupaten Gorontalo'
            ],
            // Kabupaten di Provinsi Jambi
            [
                'idprovinsi' => 6,
                'nama' => 'Kabupaten Batanghari'
            ],
            [
                'idprovinsi' => 6,
                'nama' => 'Kabupaten Tanjung Jabung Barat'
            ],
            // Kabupaten di Provinsi Jawa Barat
            [
                'idprovinsi' => 7,
                'nama' => 'Kabupaten Bandung'
            ],
            [
                'idprovinsi' => 7,
                'nama' => 'Kabupaten Bekasi'
            ],
            // Kabupaten di Provinsi Jawa Tengah
            [
                'idprovinsi' => 8,
                'nama' => 'Kabupaten Banyumas'
            ],
            [
                'idprovinsi' => 8,
                'nama' => 'Kabupaten Demak'
            ],
            // Kabupaten di Provinsi Jawa Timur
            [
                'idprovinsi' => 9,
                'nama' => 'Kabupaten Banyuwangi'
            ],
            [
                'idprovinsi' => 9,
                'nama' => 'Kabupaten Blitar'
            ],
            // Kabupaten di Provinsi Kalimantan Barat
            [
                'idprovinsi' => 10,
                'nama' => 'Kabupaten Kapuas Hulu'
            ],
            [
                'idprovinsi' => 10,
                'nama' => 'Kabupaten Kayong Utara'
            ]
        ]);
    }
}
