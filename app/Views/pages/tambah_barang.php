<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<form class="m-5" action="/barang/create" method="POST">
    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control" id="nama" name="nama_barang" autofocus>
    </div>
    <div class="form-group">
        <label for="satuan">Satuan</label>
        <input type="text" class="form-control" id="satuan" name="satuan">
    </div>
    <div class="form-group">
        <label for="jumlah">jumlah</label>
        <input type="text" class="form-control" id="jumlah" name="jumlah">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="http://localhost:8080/dashboard?">
        <button type="button" class="btn btn-danger" href="<?= base_url('http://localhost:8080/dashboard?') ?>">kembali</button>
    </a>

</form>


<?= $this->endSection() ?>