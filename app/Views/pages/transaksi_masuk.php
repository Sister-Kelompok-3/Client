<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<style>
    .content {
        height: 80vh;
    }
</style>
<?php
$server1 = 'http://192.168.236.158:8000/Komputer_server1/Server_1/public';
$detail = file_get_contents($server1 . "/barang_masuk");
$data = json_decode($detail, true);

?>
<div class="container-filed ">
    <div class="row content bg-white p-2 ">
        <div class="d-block">
            <h2 class="m-3">
                Daftar Transaksi Masuk
            </h2>
                <a href="/detail_transaksi_masuk">
                    <button class="btn btn-primary" type="button">
                        Detail
                    </button>
                </a>
            
        </div>

        <div class="row overflow-auto container" style="height: 50vh;">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Transaksi</th>
                        <th>Tanggal </th>
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
                            <td><?php echo $row['tanggal'] ?></td>
                            <td><?php echo $row['lokasi'] ?></td>
                            <td>
                                <button class="btn btn-warning" type="button">
                                    <span class="material-symbols-outlined">
                                        edit_note
                                    </span>
                                </button>
                                <button class="btn btn-danger" type="button">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>

            </table>
        </div>
    </div>

</div>


<?= $this->endSection() ?>