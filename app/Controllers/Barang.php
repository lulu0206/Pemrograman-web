<?php

namespace App\Controllers;

use App\Models\PerangkatiotModel;

class barang extends BaseController
{
    protected $PerangkatiotModel;
    public function __construct()
    {
        $this->PerangkatiotModel = new PerangkatiotModel();

    }
    public function index()
    {
        $perangkatiot = $this->PerangkatiotModel->findAll();

        $data = [
            'title' => 'Daftar Barang',
            'perangkatiot' => $perangkatiot
        ];

       // $PerangkatiotModel = new \App\Models\PerangkatiotModel();

        

        return view('barang/index', $data);
    }

}