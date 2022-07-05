<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<style>
    .content {
        height: 100vh;
    }
</style>
<?php
$server1 = 'http://192.168.236.158:8000/Komputer_server1/Server_1/public';
$detail = file_get_contents($server1 . "/barang");
$data = json_decode($detail, true);

?>
<div class="container-filed ">

    <div class="row content bg-white p-2">
        <div class="grid">
            <h1 class="m-3">
                Stock Barang
            </h1>
            <div class="ml-3 ">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary ml-2" type="submit">Search</button>
                </form>
            </div>

        </div>

        <div class="row overflow-auto container" style="height: 70vh;">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Stok</th>

                    </tr>
                </thead>

                <tbody">
                    <?php
                    $no = 1;
                    foreach ($data['barang'] as $row) { ?>
                        <tr>
                            <th> <?= $no++; ?></th>
                            <td><?php echo $row['nama_barang'] ?></td>
                            <td><?php echo $row['satuan'] ?></td>
                            <td><?php echo $row['stok'] ?></td>

                        </tr>
                    <?php } ?>
                    </tbody>

            </table>
        </div>
    </div>
</div>


<?= $this->endSection() ?>