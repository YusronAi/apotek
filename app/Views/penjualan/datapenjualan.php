<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success mb-3 text-center" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Transaksi</th>
                            <th>Total Transaksi</th>
                            <th>Total Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($penjualan as $item) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $item['id_pelanggan']; ?></td>
                                <td><?= $item['tgl_transaksi']; ?></td>
                                <td><?= $item['total_bayar']; ?></td>
                                <td>
                                    <a href="/hapus-penjualan/<?= $item['id_penjualan']; ?>"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                                    <a href="/cetak/<?= $item['id_penjualan']; ?>"><button type="button" class="btn btn-outline-success">Cetak</button></a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<?= $this->endSection(); ?>

<?= $this->endSection(); ?>