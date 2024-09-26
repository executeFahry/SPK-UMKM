<?php

namespace App\Models;

use CodeIgniter\Model;

class UmkmModel extends Model
{
    protected $table = 'umkm';
    protected $primaryKey = 'id_umkm';
    protected $allowedFields = ['nama_umkm', 'nama_pimpinan', 'jalan', 'desa', 'kecamatan', 'id_jenis_usaha'];

    public function tampilData()
    {
        $dataQuery = $this->db->table($this->table)
            ->join('jenis_usaha', 'jenis_usaha.id_jenis_usaha = umkm.id_jenis_usaha')
            ->get();
        return $dataQuery->getResult();
    }
}
