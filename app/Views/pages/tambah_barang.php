<?php
$nama_barang = null;
$jumlah = null;
$satuan = null;
$tanggal = null;
$lokasi = null
?>

<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<style>
    #content {
        height: 80vh;
    }
</style>

<div class="container-filed ">
<div class="row align-items-start">
        <nav class="navbar bg-light container-fluid">
            <div class="container-fluid mt-3">
                <h2 class="navbar-brand text-primary">Tambah Barang</h2>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary ml-2" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <form id="content" class="bg-white p-3" method="POST" accept-charset="utf-8" action="http://192.168.236.158:8000/Komputer_server1/Server_1/public/barang_add">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label>
                    Nama Barang
                    <input class="form-control" type="text" name="nama_barang" value="<?= $nama_barang ?>">
                </label>
            </div>
            <div class="form-row col-md-9 ">
                <label>
                    Jumlah
                    <input class="form-control" type="text" name="stok" value="<?= $jumlah ?>">
                </label>
            </div>
            <div class="form-row col-md-9  ">
                <label>
                    satuan
                    <input class="form-control" type="text" name="satuan" value="<?= $satuan ?>">
                </label>
            </div>
            <div class="form-row col-md-9  ">
                <label>
                    lokasi
                    <input class="form-control" type="text" name="lokasi" value="<?= $lokasi ?>">
                </label>
            </div>
            <div class="form-row col-md-9  ">
                <label>
                    Tanggal
                    <input class="form-control" type="date" name="tanggal" value="<?= $tanggal ?>">
                </label>
            </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Save</button>
        </div>
           
    </form>
</div>

<?= $this->endSection() ?>