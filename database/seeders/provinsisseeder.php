<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class provinsisseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsis')->insert([
            [
                'nama' => 'Aceh'
            ],
            [
                'nama' => 'Bali'
            ],
            [
                'nama' => 'Banten'
            ],
            [
                'nama' => 'Bengkulu'
            ],
            [
                'nama' => 'Gorontalo'
            ],
            [
                'nama' => 'Jambi'
            ],
            [
                'nama' => 'Jawa Barat'
            ],
            [
                'nama' => 'Jawa Tengah'
            ],
            [
                'nama' => 'Jawa Timur'
            ],
            [
                'nama' => 'Kalimantan Barat'
            ]
        ]);
    }
}
