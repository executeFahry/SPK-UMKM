<?php

namespace App\Controllers;

use App\Models\UmkmModel;

class Umkm extends BaseController
{
    // Method untuk menampilkan data jenis usaha
    public function index()
    {
        $umkmModel = new UmkmModel();
        $data_umkm = $umkmModel->tampilData();

        $data = [
            'data_umkm' => $data_umkm
        ];

        return view('umkm/v_umkm', $data);
    }

    // Method untuk menampilkan form tambah data
    public function create()
    {
        $data = [
            'data_jenis_usaha' => (new \App\Models\JenisUsahaModel())->findAll()
        ];

        return view('umkm/v_input_umkm', $data);
    }

    // Method untuk menyimpan data umkm\
    public function store()
    {
        $umkmModel = new UmkmModel();
        $data = [
            'nama_umkm' => $this->request->getPost('nama_umkm'),
            'nama_pimpinan' => $this->request->getPost('nama_pimpinan'),
            'jalan' => $this->request->getPost('jalan'),
            'desa' => $this->request->getPost('desa'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'id_jenis_usaha' => $this->request->getPost('id_jenis_usaha')
        ];

        $umkmModel->insert($data);

        return redirect()->to(base_url('Umkm'));
    }

    // Method untuk menampilkan form edit data umkm
    public function edit($id_umkm)
    {
        $umkmModel = new UmkmModel();
        $data_umkm = $umkmModel->find($id_umkm);

        $data = [
            'data_umkm' => $data_umkm,
            'data_jenis_usaha' => (new \App\Models\JenisUsahaModel())->findAll()
        ];

        return view('umkm/v_edit_umkm', $data);
    }

    // Method untuk mengupdate data umkm
    public function update($id_umkm)
    {
        $umkmModel = new UmkmModel();

        $data = [
            'nama_umkm' => $this->request->getPost('nama_umkm'),
            'nama_pimpinan' => $this->request->getPost('nama_pimpinan'),
            'jalan' => $this->request->getPost('jalan'),
            'desa' => $this->request->getPost('desa'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'id_jenis_usaha' => $this->request->getPost('id_jenis_usaha')
        ];

        $umkmModel->update($id_umkm, $data);

        return redirect()->to(base_url('Umkm'));
    }

    // Method untuk menghapus data umkm
    public function delete($id_umkm)
    {
        $umkmModel = new UmkmModel();
        $umkmModel->delete($id_umkm);

        return redirect()->to(base_url('Umkm'));
    }
}
