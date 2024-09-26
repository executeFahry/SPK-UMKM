<?php

namespace App\Models;

use CodeIgniter\Model;

class BobotModel extends Model
{
    protected $table = 'bobot';
    protected $primaryKey = 'id_bobot';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'nilai_kriteria', 'tipe_kriteria'];
    protected $validationRules = [
        'kode_kriteria' => 'is_unique[bobot.kode_kriteria]',
        'nama_kriteria' => 'is_unique[bobot.nama_kriteria]'
    ];

    public function tampilData()
    {
        $dataQuery = $this->db->table($this->table)->get();
        return $dataQuery->getResult();
    }
}
