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
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Jumlah Stok</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Barang</td>
                        <td>kg</td>
                        <td>100</td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <!-- plug eror di sini -->
                    <!-- <td class="kode_barang">1</td>
                    <td class="nama_barang">Sosis</td>
                    <td class="satuan">pcs</td>
                    <td class="jumlah">2000</td> -->
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection() ?>