<?php

namespace App\Controllers;

use App\Models\JenisUsahaModel;

class JenisUsaha extends BaseController
{
    // Method untuk menampilkan data jenis usaha
    public function index()
    {
        $jenisUsahaModel = new JenisUsahaModel();
        $data_jenis_usaha = $jenisUsahaModel->tampilData();

        $data = [
            'data_jenis_usaha' => $data_jenis_usaha
        ];

        return view('jenis_usaha/v_jenis_usaha', $data);
    }

    // Method untuk menampilkan form input jenis usaha
    public function create()
    {
        return view('jenis_usaha/v_input_jenis_usaha');
    }

    // Method untuk menyimpan data jenis usaha
    public function store()
    {
        $jenisUsahaModel = new JenisUsahaModel();
        $data = [
            'nama_jenis_usaha' => $this->request->getPost('nama_jenis_usaha')
        ];

        $jenisUsahaModel->insert($data);

        return redirect()->to(base_url('JenisUsaha'));
    }

    // Method untuk menampilkan form edit jenis usaha
    public function edit($id_jenis_usaha)
    {
        $jenisUsahaModel = new JenisUsahaModel();
        $data_jenis_usaha = $jenisUsahaModel->find($id_jenis_usaha);

        $data = [
            'data_jenis_usaha' => $data_jenis_usaha
        ];

        return view('jenis_usaha/v_edit_jenis_usaha', $data);
    }

    // Method untuk mengupdate data jenis usaha
    public function update($id_jenis_usaha)
    {
        $jenisUsahaModel = new JenisUsahaModel();

        $data = [
            'nama_jenis_usaha' => $this->request->getPost('nama_jenis_usaha')
        ];

        $jenisUsahaModel->update($id_jenis_usaha, $data);

        return redirect()->to(base_url('JenisUsaha'));
    }

    // Method untuk menghapus data jenis usaha
    public function delete($id_jenis_usaha)
    {
        $jenisUsahaModel = new JenisUsahaModel();
        $jenisUsahaModel->delete($id_jenis_usaha);

        return redirect()->to(base_url('JenisUsaha'));
    }
}
