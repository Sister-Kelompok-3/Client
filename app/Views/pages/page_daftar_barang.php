<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<style>
    .content {
        height: 80vh;
    }
</style>
<?php
$server1 = 'http://192.168.236.158:8000/Komputer_server1/Server_1/public';
$detail = file_get_contents($server1 . "/barang");
$data = json_decode($detail, true);
?>
<div class="container-filed ">
    <div class="row align-items-start">
        <nav class="navbar bg-light container-fluid">
            <div class="container-fluid mt-3">
                <h2 class="navbar-brand text-primary">Daftar Barang</h2>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary ml-2" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="row content bg-white p-2 ">
        <div class="grid">
            
            <div class="ml-3  d-grid gap-2 d-md-block">
                <a href="/form_barang">
                    <button class="btn btn-primary" type="button">
                        <span class="material-symbols-outlined">
                            create_new_folder
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="row overflow-auto container" style="height: 50vh;">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th class="th-sm">No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody">
                    <?php
                    $no = 1;
                    foreach ($data['barang'] as $row) { ?>
                        <tr>
                            <th> <?= $no++; ?></th>
                            <td><?php echo $row['kode_barang'] ?></td>
                            <td><?php echo $row['nama_barang'] ?></td>
                            <td><?php echo $row['satuan'] ?></td>
                            <td><?php echo $row['stok'] ?></td>
                            <td class="d-flex">
                                <a href="http://localhost:8081/update_barang" method="post">
                                    <input type="hidden" name="_method" value="UPDATE">
                                    <button class="btn btn-warning m-1 " type="submit">
                                        Edit
                                    </button>
                    </a>
                                <a href="http://192.168.236.158:8000/Komputer_server1/Server_1/public/barang_delete/<?= $row['kode_barang']; ?>" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger m-1 alert_notif" type="submit">
                                        Delete
                                    </button>
                                </a>
                            </td>       
                        </tr>
                    <?php } ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>