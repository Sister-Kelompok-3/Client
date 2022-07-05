<?php
$jumlah = null;
$kode_barang = null;
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
                <h2 class="navbar-brand text-primary">Beranda</h2>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary ml-2" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <form id="content" class="bg-white p-3" method="POST" accept-charset="utf-8" action="hhttp://localhost:8080/transaksi_add">
        <div class="form-row">

            <div class="form-row col-md-5 ">
                <label>
                    kode barang
                    <input class="form-control" type="text" name="stok" value="<?= $kode_barang ?>">
                </label>
            </div>
            <div class="form-row col-md-3  ">
                <label>
                    jumlah
                    <input class="form-control" type="text" name="satuan" value="<?= $jumlah ?>">
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>
<?= $this->endSection() ?>