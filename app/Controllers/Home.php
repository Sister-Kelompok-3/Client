<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/dashboard');
    }
    public function form_barang()
    {
        return view('pages/tambah_barang');
    }
    public function server()
    {
        return view('client');
    }
}
