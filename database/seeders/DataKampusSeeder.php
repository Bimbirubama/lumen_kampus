<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class DataKampusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('datakampus')->insert([
            [
                'nama' => 'Universitas Gadjah Mada',
                'alamat' => 'Jl. Bulaksumur, Yogyakarta',
                'no_telpon' => '0274-123456',
                'kategori' => 'Negeri',
                'latitude' => -7.782885,
                'longitude' => 110.367066,
                'jurusan' => 'Teknik Informatika',
               
            ],
            [
                'nama' => 'Institut Teknologi Bandung',
                'alamat' => 'Jl. Ganesha, Bandung',
                'no_telpon' => '022-654321',
                'kategori' => 'Negeri',
                'latitude' => -6.89148,
                'longitude' => 107.6107,
                'jurusan' => 'Teknik Elektro',
              
            ],
            [
                'nama' => 'Universitas Indonesia',
                'alamat' => 'Jl. Margonda Raya, Depok',
                'no_telpon' => '021-789012',
                'kategori' => 'Negeri',
                'latitude' => -6.3705,
                'longitude' => 106.8294,
                'jurusan' => 'Manajemen',
                
            ],
        ]);
    }
}
