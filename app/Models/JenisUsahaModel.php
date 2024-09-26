<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisUsahaModel extends Model
{
    protected $table = 'jenis_usaha';
    protected $primaryKey = 'id_jenis_usaha';
    protected $allowedFields = ['nama_jenis_usaha'];

    public function tampilData()
    {
        $dataQuery = $this->db->table($this->table)->get();
        return $dataQuery->getResult();
    }
}
