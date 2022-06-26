<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Barang</h1>
            <table class="table">
                <button class="btn btn-primary mb-2">Tambah Barang</button>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Id Transaksi</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- plug eror di sini -->
                    <td class="kode_barang">1</td>
                    <td class="nama_barang">Sosis</td>
                    <td class="id_transaksi">pcs</td>
                    <td class="jumlah">2000</td>
                    <td>
                        <a href="" class="btn btn-success">Detail</a>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection() ?>