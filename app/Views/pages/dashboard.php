<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Barang</h1>
            <table class="table">
                <a href="/add_barang">
                    <button class="btn btn-primary mb-2">Tambah Barang</button>
                </a>
                <table class="table table-hover">
                    <tr>
                        <th width='10%'>No</th>
                        <th width='40%'>Nama Barang</th>
                        <th width='20%'>satuan</th>
                        <th width='20%'>stok</th>
                        <th width='20%'>Action</th>
                    </tr>

                </table>

            </table>
        </div>
    </div>
</div>


<?= $this->endSection() ?>