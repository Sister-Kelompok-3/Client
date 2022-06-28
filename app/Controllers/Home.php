<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }
    public function form_barang()
    {
        return view('pages/tambah_barang');
    }
}
