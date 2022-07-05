<?php
$nama_barang = null;
$jumlah = null;
$satuan = null;
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
                <h2 class="navbar-brand text-primary">Edit Barang</h2>
            </div>
        </nav>
    </div>
    <form id="content" class="bg-white p-3 " method="POST" accept-charset="utf-8" action="">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label>
                    Kode Barang
                    <input class="form-control" type="text" name="kode_barang" value="<?= $kode_barang ?>">
                </label>
            </div>
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
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>
<?= $this->endSection() ?>