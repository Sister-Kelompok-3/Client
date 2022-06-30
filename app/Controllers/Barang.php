<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BarangModel;

class Barang extends ResourceController
{

    function index()
    {
        $get_url = file_get_contents("localhost:8080/barang");
        $data = json_decode($get_url);

        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('page/dashboard', $data_array);
    }

    // create
    public function create()
    {
<<<<<<< HEAD
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_barang'      =>  $this->input->post('nama_barang'),
                'satuan'           =>  $this->input->post('satuan'),
                'stok'             =>  $this->input->post('stok')
            );
            $insert =  $this->curl->simple_post($this->API . 'http://localhost:8080/add_barang', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('barang');
        } else {
            $this->load->view('home/page');
=======
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
>>>>>>> f4c77cd8f43d685742b595aacedc08525682ec85
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
