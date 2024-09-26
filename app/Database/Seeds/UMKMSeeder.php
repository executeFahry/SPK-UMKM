<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UMKMSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_umkm' => 'Kios Lumintu',
                'nama_pimpinan' => 'H. Toha Muhidin',
                'jalan' => 'JL. Galunggung',
                'desa' => 'Sebani',
                'kecamatan' => 'Gadingrejo',
                'id_jenis_usaha' => 4
            ],
            [
                'nama_umkm' => 'UD. Linggar Jati',
                'nama_pimpinan' => 'Muhammad Bahrus Salim',
                'jalan' => 'JL. Gatot Subroto 45',
                'desa' => 'Bukir',
                'kecamatan' => 'Purworejo',
                'id_jenis_usaha' => 6
            ],
            [
                'nama_umkm' => 'Nanda Motor',
                'nama_pimpinan' => 'Rudi Santoso',
                'jalan' => 'JL. Pattimura',
                'desa' => 'Pohjentrek',
                'kecamatan' => 'Purworejo',
                'id_jenis_usaha' => 2
            ],
            [
                'nama_umkm' => 'Zayaka Tailor',
                'nama_pimpinan' => 'Maritza Salim',
                'jalan' => 'JL. Mawar 78',
                'desa' => 'Krapyak',
                'kecamatan' => 'Kraton',
                'id_jenis_usaha' => 7
            ],
        ];

        // Using Query Builder
        $this->db->table('umkm')->insertBatch($data);
    }
}
