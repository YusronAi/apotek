<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<a href="/input-obat"><button type="button" class="btn btn-outline-success mb-5">Input Obat</button></a>
<br>

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
            <h6 class="m-0 font-weight-bold text-primary">Data Tables Obat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($obat as $item) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $item['nama_obat']; ?></td>
                                <td><?= $item['harga']; ?></td>
                                <td><?= $item['stok']; ?></td>
                                <td><a href="/data-obat/edit/<?= $item['id_obat']; ?>"><button type="button" class="btn btn-outline-primary">Edit</button></a>
                                    <a href="/data-obat/hapus/<?= $item['id_obat']; ?>"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
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