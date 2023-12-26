<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
<a href="/input-pelanggan"><button type="button" class="btn btn-outline-success mb-3">Input Pelanggan</button></a>
<br>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success mb-3 text-center" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pelanggan as $item) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $item['nama_pelanggan']; ?></td>
                                <td><?= $item['umur']; ?></td>
                                <td><?= $item['alamat']; ?></td>
                                <td><a href="/edit-pelanggan/<?= $item['id_pelanggan']; ?>"><button type="button" class="btn btn-outline-primary">Edit</button></a>
                                    <a href="/hapus-pelanggan/<?= $item['id_pelanggan']; ?>"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
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