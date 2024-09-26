<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kode_kriteria' => 'C1', 'nama_kriteria' => 'Jenis Usaha', 'nama_bobot' => 'Mikro', 'nilai_bobot' => 30],
            ['kode_kriteria' => 'C1', 'nama_kriteria' => 'Jenis Usaha', 'nama_bobot' => 'Makro', 'nilai_bobot' => 70],
            ['kode_kriteria' => 'C2', 'nama_kriteria' => 'Jumlah Pekerja', 'nama_bobot' => '<=1', 'nilai_bobot' => 10],
            ['kode_kriteria' => 'C2', 'nama_kriteria' => 'Jumlah Pekerja', 'nama_bobot' => '1-50', 'nilai_bobot' => 20],
            ['kode_kriteria' => 'C2', 'nama_kriteria' => 'Jumlah Pekerja', 'nama_bobot' => '51-100', 'nilai_bobot' => 30],
            ['kode_kriteria' => 'C2', 'nama_kriteria' => 'Jumlah Pekerja', 'nama_bobot' => '>100', 'nilai_bobot' => 40],
            ['kode_kriteria' => 'C3', 'nama_kriteria' => 'Modal Usaha', 'nama_bobot' => '<=1000000', 'nilai_bobot' => 10],
            ['kode_kriteria' => 'C3', 'nama_kriteria' => 'Modal Usaha', 'nama_bobot' => '1000000-2000000', 'nilai_bobot' => 20],
            ['kode_kriteria' => 'C3', 'nama_kriteria' => 'Modal Usaha', 'nama_bobot' => '2000000-3000000', 'nilai_bobot' => 30],
            ['kode_kriteria' => 'C3', 'nama_kriteria' => 'Jenis Usaha', 'nama_bobot' => '>3000000', 'nilai_bobot' => 40],
        ];

        // Using Query Builder
        $this->db->table('kriteria')->insertBatch($data);
    }
}
