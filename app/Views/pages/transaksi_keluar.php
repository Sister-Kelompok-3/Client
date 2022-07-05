<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<style>
    .content {
        height: 80vh;
    }
</style>
<?php
$server2 = 'http://192.168.236.177/Server2/server2/public';
$detail = file_get_contents($server2 . "/barangkeluar");
$data = json_decode($detail, true);
// var_dump($konten);
?>
<div class="container-filed ">
    <div class="row content bg-white p-2 ">
        <div class="grid">
            <h2 class="m-3">
                Daftar Transaksi Keluar
            </h2>
            <div class="ml-3  d-grid gap-2 d-md-block">
                <a href="/tambah_transaksi_keluar">
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
                        <th>#</th>
                        <th>Id Transaksi</th>
                        <th>Kode Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody">
                    <?php
                    $no = 1;
                    foreach ($data['id_transaksi'] as $row) {
                    ?>
                        <tr>
                            <th><?= $no++; ?></th>
                            <td><?php echo $row['id_transaksi'] ?></td>
                            <td><?php echo $row['kode_barang'] ?></td>
                            <td><?php echo $row['jumlah'] ?></td>
                            <td><?php echo $row['tanggal'] ?></td>
                            <td><?php echo $row['lokasi'] ?></td>
                            <td>
                                <a href="#>" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-warning m-1 alert_notif" type="submit">
                                        Edit
                                    </button>
                                </a>
                                <a href="http://192.168.236.177/Server2/server2/public/barangkeluar_delete/<?= $row['id_transaksi']; ?>" method="post">
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