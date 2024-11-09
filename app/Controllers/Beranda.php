<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];

        echo view('pages/beranda', $data);
    }
}
