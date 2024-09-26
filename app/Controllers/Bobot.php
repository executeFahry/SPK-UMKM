<?php

namespace App\Controllers;

use App\Models\BobotModel;

class Bobot extends BaseController
{
    // Method untuk menampilkan data bobot
    public function index()
    {
        $bobotModel = new BobotModel();
        $data_bobot = $bobotModel->tampilData();

        $data = [
            'data_bobot' => $data_bobot
        ];

        return view('bobot/v_bobot', $data);
    }

    // Method untuk menampilkan form input bobot
    public function create()
    {
        return view('bobot/v_input_bobot');
    }

    // Method untuk menyimpan data bobot
    public function store()
    {
        $bobotModel = new BobotModel();
        $data = [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria')
        ];

        $bobotModel->insert($data);

        return redirect()->to(base_url('Bobot'));
    }

    // Method untuk menampilkan form edit bobot
    public function edit($id)
    {
        $bobotModel = new BobotModel();
        $data_bobot = $bobotModel->find($id);

        $data = [
            'data_bobot' => $data_bobot
        ];

        return view('bobot/v_edit_bobot', $data);
    }

    // Method untuk mengupdate data bobot
    public function update($id_bobot)
    {
        $bobotModel = new BobotModel();
        $data = [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria')
        ];

        $bobotModel->update($id_bobot, $data);

        return redirect()->to(base_url('Bobot'));
    }

    // Method untuk menghapus data bobot
    public function delete($id_bobot)
    {
        $bobotModel = new BobotModel();
        $bobotModel->delete($id_bobot);

        return redirect()->to(base_url('Bobot'));
    }
}
