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
<div class="grid">
            <h1 class="m-3">
                Tambah Transaksi
            </h1>
        </div>
    <form id="content" class="bg-white p-3" method="POST" accept-charset="utf-8" action="http://192.168.236.158:8000/Komputer_server1/Server_1/public/transaksi_detail_add">
        <div class="form-row">
            <div class="form-row col-md-5 ">
                <label>
                    Id Transaksi
                    <input class="form-control" type="text" name="id_transaksi" value="<?= $id_transaksi ?>">
                </label>
            </div>
            <div class="form-row col-md-5 ">
                <label>
                    kode barang
                    <input class="form-control" type="text" name="kode_barang" value="<?= $kode_barang ?>">
                </label>
            </div>
            <div class="form-row col-md-3  ">
                <label>
                    jumlah
                    <input class="form-control" type="text" name="jumlah" value="<?= $jumlah ?>">
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>
<?= $this->endSection() ?>