<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\BobotModel;

class Kriteria extends BaseController
{

    // Method untuk menampilkan data kriteria
    public function index()
    {
        $kriteriaModel = new KriteriaModel();
        $data_kriteria = $kriteriaModel->tampilData();

        $data = [
            'data_kriteria' => $data_kriteria
        ];

        return view('kriteria/v_kriteria', $data);
    }

    // Method untuk menampilkan form input kriteria
    public function create()
    {
        $bobotModel = new BobotModel();
        $data_bobot = $bobotModel->findAll();

        $data = [
            'data_bobot' => $data_bobot
        ];

        return view('kriteria/v_input_kriteria', $data);
    }


    // Method untuk menyimpan data kriteria
    public function store()
    {
        $kriteriaModel = new KriteriaModel();
        $data = [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nama_bobot' => $this->request->getPost('nama_bobot'),
            'nilai_bobot' => $this->request->getPost('nilai_bobot')
        ];

        $kriteriaModel->insert($data);

        return redirect()->to(base_url('Kriteria'));
    }

    // Method untuk menampilkan form edit kriteria
    public function edit($id_kriteria)
    {
        $kriteriaModel = new KriteriaModel();
        $data_kriteria = $kriteriaModel->find($id_kriteria);

        $bobotModel = new BobotModel();
        $data_bobot = $bobotModel->findAll();

        $data = [
            'data_kriteria' => $data_kriteria,
            'data_bobot' => $data_bobot
        ];

        return view('kriteria/v_edit_kriteria', $data);
    }

    // Method untuk mengupdate data kriteria
    public function update($id_kriteria)
    {
        $kriteriaModel = new KriteriaModel();
        $data = [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nama_bobot' => $this->request->getPost('nama_bobot'),
            'nilai_bobot' => $this->request->getPost('nilai_bobot')
        ];

        $kriteriaModel->update($id_kriteria, $data);

        return redirect()->to(base_url('Kriteria'));
    }

    // Method untuk menghapus data kriteria
    public function delete($id_kriteria)
    {
        $kriteriaModel = new KriteriaModel();
        $kriteriaModel->delete($id_kriteria);

        return redirect()->to(base_url('Kriteria'));
    }
}
