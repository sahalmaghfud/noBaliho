<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class walikotasseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('walikotas')->insert([
            [
                'nama' => 'Siti Aminah',
                'jeniskelamin' => 'Perempuan',
                'ttl' => '15-04-1975',
                'agama' => 'Islam',
                'nama_w' => 'Rahman',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Laki-Laki',
                'agama_w' => 'Islam',
                'idkab' => 2, // sar
                'visimisi' => 'Meningkatkan kesejahteraan masyarakat',
                'profil' => 'Siti Aminah memiliki latar belakang di bidang pendidikan...',
                'program' => '1. Peningkatan kualitas pendidikan 2. Pengembangan ekonomi lokal',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Dewi Sartika',
                'jeniskelamin' => 'Perempuan',
                'ttl' => '20-10-1980',
                'agama' => 'Hindu',
                'nama_w' => 'Putu Wirata',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Laki-Laki',
                'agama_w' => 'Hindu',
                'idkab' => 2, //
                'visimisi' => 'Mewujudkan masyarakat yang sejahtera',
                'profil' => 'Dewi Sartika adalah seorang aktivis sosial dan pemimpin komunitas...',
                'program' => '1. Peningkatan layanan kesehatan 2. Pengembangan pariwisata',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Agus Supriyanto',
                'jeniskelamin' => 'Laki-Laki',
                'ttl' => '05-05-1975',
                'agama' => 'Islam',
                'nama_w' => 'Nurhayati',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Perempuan',
                'agama_w' => 'Islam',
                'idkab' => 11, //
                'visimisi' => 'Membangun Serang yang lebih baik',
                'profil' => 'Agus Supriyanto adalah seorang birokrat yang berpengalaman...',
                'program' => '1. Pengentasan kemiskinan 2. Peningkatan infrastruktur',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Rahmat Hidayat',
                'jeniskelamin' => 'Laki-Laki',
                'ttl' => '11-11-1980',
                'agama' => 'Islam',
                'nama_w' => 'Siti Aisyah',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Perempuan',
                'agama_w' => 'Islam',
                'idkab' => 12, // h
                'visimisi' => 'Meningkatkan kualitas hidup masyarakat',
                'profil' => 'Rahmat Hidayat adalah seorang tokoh masyarakat yang dikenal...',
                'program' => '1. Peningkatan pendidikan 2. Pengembangan ekonomi kreatif',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Indah Permata',
                'jeniskelamin' => 'Perempuan',
                'ttl' => '25-12-1978',
                'agama' => 'Islam',
                'nama_w' => 'Ahmad Fauzi',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Laki-Laki',
                'agama_w' => 'Islam',
                'idkab' => 11, //
                'visimisi' => 'Mewujudkan masyarakat Gorontalo yang sejahtera',
                'profil' => 'Indah Permata memiliki latar belakang di bidang kesehatan...',
                'program' => '1. Peningkatan layanan kesehatan 2. Pengembangan ekonomi lokal',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Hendra Wijaya',
                'jeniskelamin' => 'Laki-Laki',
                'ttl' => '17-08-1970',
                'agama' => 'Islam',
                'nama_w' => 'Siti Nurbaya',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Perempuan',
                'agama_w' => 'Islam',
                'idkab' => 12, //
                'visimisi' => 'Membangun Tebo yang berdaya saing',
                'profil' => 'Hendra Wijaya adalah seorang pengusaha sukses yang beralih ke politik...',
                'program' => '1. Pengembangan UMKM 2. Peningkatan layanan publik',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Sri Rahayu',
                'jeniskelamin' => 'Perempuan',
                'ttl' => '21-03-1982',
                'agama' => 'Islam',
                'nama_w' => 'Bambang',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Laki-Laki',
                'agama_w' => 'Islam',
                'idkab' => 12, //
                'visimisi' => 'Karawang yang modern dan maju',
                'profil' => 'Sri Rahayu adalah seorang akademisi yang berfokus pada pembangunan...',
                'program' => '1. Peningkatan kualitas pendidikan 2. Pembangunan infrastruktur',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Wahyudi',
                'jeniskelamin' => 'Laki-Laki',
                'ttl' => '30-07-1976',
                'agama' => 'Islam',
                'nama_w' => 'Murni',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Perempuan',
                'agama_w' => 'Islam',
                'idkab' => 12, //
                'visimisi' => 'Meningkatkan kualitas hidup masyarakat Cilacap',
                'profil' => 'Wahyudi adalah seorang birokrat yang telah mengabdi di pemerintahan...',
                'program' => '1. Peningkatan pelayanan publik 2. Pengentasan kemiskinan',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Nur Azizah',
                'jeniskelamin' => 'Perempuan',
                'ttl' => '19-05-1979',
                'agama' => 'Islam',
                'nama_w' => 'Arifin',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Laki-Laki',
                'agama_w' => 'Islam',
                'idkab' => 12, //
                'visimisi' => 'Gresik yang adil dan berdaya saing',
                'profil' => 'Nur Azizah memiliki latar belakang di bidang hukum dan pemerintahan...',
                'program' => '1. Pengembangan sektor industri 2. Peningkatan layanan kesehatan',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ],
            [
                'nama' => 'Dedi Mulyadi',
                'jeniskelamin' => 'Laki-Laki',
                'ttl' => '07-12-1973',
                'agama' => 'Islam',
                'nama_w' => 'Sri Wahyuni',
                'ttl_w' => '15-05-1968',
                'jeniskelamin_w' => 'Perempuan',
                'agama_w' => 'Islam',
                'idkab' => 11, //
                'visimisi' => 'Ketapang yang makmur dan sejahtera',
                'profil' => 'Dedi Mulyadi adalah seorang tokoh masyarakat yang berpengaruh...',
                'program' => '1. Peningkatan sektor pertanian 2. Pengembangan pariwisata',
                'facebook' => 'https://www.facebook.com/khannedy',
                'instagram' => 'https://www.instagram.com/stephanieeeflooo',
                'twitter' => 'https://twitter.com/CoachJustinL'
            ]
        ]);
    }
}
