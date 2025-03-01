<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Gebermas;

class GebermasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Gebermas::create([
            'title' => 'Kegiatan di Masjid Sabilul Huda',
            'slug' => Str::slug('Kegiatan di Masjid Sabilul Huda'),
            'content' => 'Kegiatan membersihkan masjid untuk menjaga kebersihan dan kenyamanan.',
            'image' => 'assets/img/masjid1.jpg',
            'date' => now()
        ]);

         Gebermas::create([
            'title' => 'Bersih-Bersih Musholla',
            'slug' => Str::slug('Bersih-Bersih Musholla'),
            'content' => 'Kegiatan rutin membersihkan musholla sebagai bagian dari ibadah.',
            'image' => 'assets/img/gebermas.jpg',
            'date' => now()
        ]);

         Gebermas::create([
            'title' => 'Bersih-Bersih Masjid',
            'slug' => Str::slug('Bersih-Bersih Masjid'),
            'content' => 'Kegiatan rutin membersihkan musholla sebagai bagian dari ibadah.',
            'image' => 'assets/img/muslim_medical.jpg',
            'date' => now()
        ]);

    }
}
