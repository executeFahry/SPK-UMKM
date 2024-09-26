<?php

namespace App\Controllers;

use App\Models\JenisUsahaModel;
use App\Models\UmkmModel;
use App\Models\BobotModel;
use App\Models\KriteriaModel;

class Home extends BaseController
{
    public function index()
    {
        $jenisUsahaModel = new JenisUsahaModel();
        $umkmModel = new UmkmModel();
        $bobotModel = new BobotModel();
        $kriteriaModel = new KriteriaModel();

        $data = [
            'jenisUsahaCount' => $jenisUsahaModel->countAllResults(),
            'umkmCount' => $umkmModel->countAllResults(),
            'bobotCount' => $bobotModel->countAllResults(),
            'kriteriaCount' => $kriteriaModel->countAllResults(),
        ];

        return view('home', $data);
    }
}
