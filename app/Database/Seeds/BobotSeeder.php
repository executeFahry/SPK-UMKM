<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BobotSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_kriteria' => 'C1',
                'nama_kriteria' => 'Jeni Usaha',
                'nilai_kriteria' => 0.2,
                'tipe_kriteria' => 'Benefit',
            ],
            [
                'kode_kriteria' => 'C2',
                'nama_kriteria' => 'Jumlah Pekerja',
                'nilai_kriteria' => 0.2,
                'tipe_kriteria' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C3',
                'nama_kriteria' => 'Modal Usaha',
                'nilai_kriteria' => 0.4,
                'tipe_kriteria' => 'Cost'
            ],
        ];

        // Using Query Builder
        $this->db->table('bobot')->insertBatch($data);
    }
}
