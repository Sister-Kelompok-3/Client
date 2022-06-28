<?php

namespace App\Controllers;

class Barang extends BaseController
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

    // insert data kontak
    function create()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'kode_barang'       =>  $this->input->post('kode_barang'),
                'nama_barang'      =>  $this->input->post('nama_barang'),
                'satuan' =>  $this->input->post('satuan'),
                'stok' =>  $this->input->post('stok')
            );
            $insert =  $this->curl->simple_post($this->API . '/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('kontak');
        } else {
            $this->load->view('kontak/create');
        }
    }

    // edit data kontak
    function edit()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'nomor' =>  $this->input->post('nomor')
            );
            $update =  $this->curl->simple_put($this->API . '/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }
            redirect('kontak');
        } else {
            $params = array('id' =>  $this->uri->segment(3));
            $data['datakontak'] = json_decode($this->curl->simple_get($this->API . '/kontak', $params));
            $this->load->view('kontak/edit', $data);
        }
    }

    // delete data kontak
    function delete($id)
    {
        if (empty($id)) {
            redirect('kontak');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/kontak', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('kontak');
        }
    }
}
