<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BarangModel;

class Barang extends ResourceController
{
    var $API = "";

    public function __construct()
    {

        $this->parent::__construct();
        $this->API = "http://localhost:8080/barang";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    use ResponseTrait;
    // all users
    public function index()
    {
        // $barang = new BarangModel();
        // $data = $barang->getBarang();
        // return view('barang', compact('data'));
        // $model = new BarangModel();
        // $data['barang'] = $model->orderBy('kode_barang', 'DESC')->findAll();
        // return $this->respond($data);

        // $model = new BarangModel();
        // $barang = $this->$model->findAll();
        // $data = [
        //     'barang' => '$barang'
        // ];
        // return view('dashboard', $data);
        $model = new BarangModel();
        $data['barang'] = $model->orderBy('kode_barang', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new BarangModel();
        $data = [
            'nama_barang'   => $this->request->getVar('nama_barang'),
            'satuan'        => $this->request->getVar('satuan'),
            'stok'          => $this->request->getVar('stok'),
        ];
        $model->insert($data);
        $response = [
            'status'    => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($kode_barang = null)
    {
        $model = new BarangModel();
        $data = $model->getWhere(['kode_barang'], $kode_barang)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($kode_barang = null)
    {
        $model = new BarangModel();
        $kode_barang = $this->request->getVar('kode_barang');
        $data = [
            'nama_barang'   => $this->request->getVar('nama_barang'),
            'satuan'        => $this->request->getVar('satuan'),
            'stok'          => $this->request->getVar('stok'),
        ];
        $model->update($kode_barang, $data);
        $response = [
            'status'        => 200,
            'error'         => null,
            'messages'      => [
                'success'   => 'Data produk berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($kode_barang = null)
    {
        $model = new BarangModel();
        $data = $model->delete($kode_barang);
        if ($data) {
            $model->delete($kode_barang);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
