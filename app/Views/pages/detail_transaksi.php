<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<style>
    .content {
        height: 80vh;
    }
</style>
<?php
$server1 = 'http://192.168.236.158:8000/Komputer_server1/Server_1/public';
$detail = file_get_contents($server1 . "/transaksi_detail" . $slug);
$data = json_decode($detail, true);
?>

<!-- DETAIL PERBARANGD -->

<div class="container-filed ">
    <div class="row content bg-white p-2 ">
        <div class="grid">
            <h2 class="m-3">
                Daftar Transaksi Masuk
            </h2>
            <div class="ml-3  d-grid gap-2 d-md-block">
                <a href="/form_transaksi_masuk">
                    <button class="btn btn-primary" type="button">
                        <span class="material-symbols-outlined">
                            create
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