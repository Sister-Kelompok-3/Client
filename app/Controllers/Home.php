<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function page()
    {
        return view('pages/dashboard');
    }
    public function barang()
    {
        return view('pages/page_daftar_barang');
    }
    public function transaksi()
    {
        return view('pages/transaksi_masuk');
    }
    public function tambah_barang()
    {
        return view('pages/tambah_barang');
    }
}
