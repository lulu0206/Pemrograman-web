<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | IOT Monitoring'
        ];
        return view('pages/home', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail | IOT Monitoring '
        ];
        
        return view('pages/detail', $data);
        
    }

    public function device()
    {
        $data=[
            'title' => 'Detail | IOT Monitoring',
            'barang' => [
                [
                    'tipe'=> 'uno',
                    'nama' => 'arduino',
                    'kota' => 'bandung'
                ],
                [
                    'tipe'=> 'samsung',
                    'nama' => 'hp',
                    'kota' => 'bandung'
                ]


            ]

        ];

        return view('pages/device', $data);
    }

}

