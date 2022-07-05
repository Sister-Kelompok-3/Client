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
    public function transaksi_masuk()
    {
        return view('pages/transaksi_masuk');
    }
    public function transaksi_keluar()
    {
        return view('pages/transaksi_keluar');
    }
    public function tambah_barang()
    {
        return view('pages/tambah_barang');
    }
    public function login()
    {
        return view('pages/login');
    }

    public function add_transaksi_masuk()
    {
        return view('pages/FormAdd_transaksi_masuk');
    }
    public function add_transaksi_keluar()
    {
        return view('pages/tambah_transaksi_keluar');
    }
}
