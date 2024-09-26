<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisUsahaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_jenis_usaha' => 'Apotek'],
            ['nama_jenis_usaha' => 'Bengkel'],
            ['nama_jenis_usaha' => 'Bengkel Motor'],
            ['nama_jenis_usaha' => 'Barang Campuran'],
            ['nama_jenis_usaha' => 'Cellular'],
            ['nama_jenis_usaha' => 'Jual Kayu Bangunan'],
            ['nama_jenis_usaha' => 'Penjahitan'],
            ['nama_jenis_usaha' => 'Perdagangan'],
            ['nama_jenis_usaha' => 'Toko Meubel'],
        ];

        // Using Query Builder
        $this->db->table('jenis_usaha')->insertBatch($data);
    }
}
