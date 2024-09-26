<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'nama_bobot', 'nilai_bobot'];
    protected $validationRules = [
        'kode_kriteria' => 'required',
        'nama_kriteria' => 'required',
    ];

    public function tampilData()
    {
        $dataQuery = $this->db->table($this->table)
            ->join('bobot b1', 'b1.kode_kriteria = kriteria.kode_kriteria')
            ->join('bobot b2', 'b2.nama_kriteria = kriteria.nama_kriteria')
            ->get();
        return $dataQuery->getResult();
    }
}
