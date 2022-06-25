<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        echo 'login model tampil/';
    }

    protected $table = 'tb_master_barang';
    protected $primaryKey = 'kode_barang';
    protected $allowedFields = ['kode_barang', 'nama_barang', 'satuan', 'stok'];
}
