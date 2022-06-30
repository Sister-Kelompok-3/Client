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
    <form id="content" class="bg-white p-3 ">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label>
                    Nama Barang
                    <input class="form-control" type="text" name="nama_barang">
                </label>
            </div>
            <div class="form-row col-md-5 ">
                <label>
                    Jumlah
                    <input class="form-control" type="text" name="stok">
                </label>
            </div>
            <div class="form-row col-md-3  ">
                <label>
                    satuan
                    <input class="form-control" type="text" name="satuan">
                </label>
            </div>
        </div>
        <a href="/proses_add">

            <button type="submit" class="btn btn-primary">Save</button>
        </a>
    </form>



</div>
</div>


<?= $this->endSection() ?>