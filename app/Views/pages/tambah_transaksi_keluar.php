<?php
$lokasi = null;
$tanggal = null;

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
                <h2 class="navbar-brand text-primary">Tambah Transaksi</h2>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary ml-2" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <form id="content" class="bg-white p-3" method="POST" accept-charset="utf-8" action=" http://192.168.236.177/Server2/server2/public/barangkeluar_add ">
        <div class="form-row">
            <input class="form-control" type="Hidden" name="id_transaksi" value="<?= $id_transaksi?>">
            <div class="form-row col-md-3  ">
                <label>
                    kode Barang
                    <input class="form-control" type="form" name="kode_barang" value="<?= $kode_barang ?>">
                </label>
            </div>
            <div class="form-row col-md-3  ">
                <label>
                    lokasi
                    <input class="form-control" type="text" name="lokasi" value="<?= $lokasi ?>">
                </label>
            </div>
            <div class="form-row col-md-3  ">
                <label>
                    Jumlah
                    <input class="form-control" type="text" name="jumlah" value="<?= $jumlah ?>">
                </label>
            </div>
            <div class="form-row col-md-3  ">
                <label>
                    tanggal
                    <input class="form-control" type="date" name="tanggal" value="<?= $tanggal ?>">
                </label>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<?= $this->endSection() ?>