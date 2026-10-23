<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
          public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Agensi Rumah Tangga',
                'director' => 'Sutradara Film',
                'cast' => 'Aktor Utama, Aktris Utama',
                'genre' => 'Drama, Komedi',
                'release_year' => 2024,
                'duration' => 105,
                'poster' => 'Agensi_Rumah_tangga.jpg',
                'synopsis' => 'Kisah lika-liku seputar dunia agensi penyedia jasa rumah tangga dengan segala konflik dan kehangatannya.'
            ],
            [
                'title' => 'Bayi Ajaib',
                'director' => 'Rako Prijanto',
                'cast' => 'Vino G. Bastian, Adipati Dolken',
                'genre' => 'Horor',
                'release_year' => 2023,
                'duration' => 99,
                'poster' => 'Bayi_Ajaib.jpeg',
                'synopsis' => 'Lahirnya seorang anak berwajah orang tua yang membawa malapetaka misterius bagi keluarga dan warga desa.'
            ],
            [
                'title' => 'Ibu, Bagaimana Aku Tanpamu',
                'director' => 'Sutradara Film',
                'cast' => 'Pemeran Film',
                'genre' => 'Drama, Keluarga',
                'release_year' => 2024,
                'duration' => 110,
                'poster' => 'Ibu_Bagaimana_Aku_Tanpamu.jpeg',
                'synopsis' => 'Kisah mengharukan tentang perjuangan dan arti kehadiran seorang ibu dalam kehidupan anak-anaknya.'
            ],
            [
                'title' => 'Jumbo',
                'director' => 'Ryan Adriandhy',
                'cast' => 'Ariel Noah, Pandji Pragiwaksono',
                'genre' => 'Animasi, Anak',
                'release_year' => 2023,
                'duration' => 90,
                'poster' => 'Jumbo.jpg',
                'synopsis' => 'Petualangan magis seorang anak kecil yang menemukan keajaiban tak terduga di lingkungan barunya.'
            ],
            [
                'title' => 'Miracle in Cell No. 7',
                'director' => 'Hanung Bramantyo',
                'cast' => 'Vino G. Bastian, Graciella Abigail',
                'genre' => 'Drama, Keluarga',
                'release_year' => 2022,
                'duration' => 145,
                'poster' => 'Miracle_In_Cell.jpg',
                'synopsis' => 'Kisah cinta mengharukan antara seorang ayah penyandang disabilitas yang dipenjara dan putri kecilnya.'
            ],
            [
                'title' => 'Modal Nekad',
                'director' => 'Sutradara Film',
                'cast' => 'Pemeran Film',
                'genre' => 'Komedi, Aksi',
                'release_year' => 2024,
                'duration' => 100,
                'poster' => 'Modal_Nekad.jpg',
                'synopsis' => 'Aksi jenaka sekelompok pemuda yang melakukan perjalanan menantang hanya bermodalkan keberanian dan kenekatan.'
            ],
            [
                'title' => 'Na Willa',
                'director' => 'Sutradara Film',
                'cast' => 'Pemeran Film',
                'genre' => 'Animasi, Drama',
                'release_year' => 2024,
                'duration' => 85,
                'poster' => 'Na_Willa.jpg',
                'synopsis' => 'Catatan harian tentang pertumbuhan dan petualangan ceria seorang anak perempuan bernama Na Willa.'
            ],
            [
                'title' => 'Para Perasuk',
                'director' => 'Wregas Bhanuteja',
                'cast' => 'Angga Yunanda, Maudy Ayunda',
                'genre' => 'Drama, Misteri',
                'release_year' => 2025,
                'duration' => 115,
                'poster' => 'Para_Perasuk.jpg',
                'synopsis' => 'Sebuah narasi mendalam mengenai fenomena sosial dan misteri psikologis di sebuah komunitas masyarakat.'
            ],
            [
                'title' => 'Toy Story 5',
                'director' => 'Sutradara Pixar',
                'cast' => 'Tom Hanks, Tim Allen',
                'genre' => 'Animasi, Petualangan',
                'release_year' => 2026,
                'duration' => 100,
                'poster' => 'Toy_Story5.jpg',
                'synopsis' => 'Kelanjutan petualangan mainan ikonik Woody dan Buzz Lightyear dalam menghadapi era teknologi modern digital.'
            ],
            [
                'title' => 'Garuda di Dadaku',
                'director' => 'Ifa Isfansyah',
                'cast' => 'Emir Mahira, Aldo Tansani',
                'genre' => 'Drama, Olahraga',
                'release_year' => 2009,
                'duration' => 96,
                'poster' => 'Garuda_Di_Dadaku.jpg',
                'synopsis' => 'Impian besar seorang anak laki-laki untuk menjadi pemain sepak bola profesional tim nasional Indonesia.'
            ]
        ]);
    }

    }


