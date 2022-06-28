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
                <label for="inputAddress">Nama Barang</label>
                <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="form-row col-md-5 mr-2 ml-1">
                <label for="inputPassword4">Jumlah</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="form-row col-md-3 mr-2 ">
                <label for="inputEmail4">Satuan</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Lokasi</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>



</div>
</div>


<?= $this->endSection() ?>