<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col mb-2">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-user"></i>&nbsp;<span><?= $jumlahpelanggan; ?></span>
                    </div>
                    <div class="mr-5">Data Pelanggan</div>
                </div>
                <a class="card-footer text-blue clearfix small z-1" href="/data-pelanggan">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-pills"></i>&nbsp;<?= $jumlahobat; ?>
                    </div>
                    <div class="mr-5">Data Obat</div>
                </div>
                <a class="card-footer text-blue clearfix small z-1" href="/data-obat">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-layer-group"></i>&nbsp;<?= $jumlahpenjualan; ?>
                    </div>
                    <div class="mr-5">Data Penjualan</div>
                </div>
                <a class="card-footer text-blue clearfix small z-1" href="/data-penjualan">
                    <span class="float-left">Data Penjualan</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <!-- <div class="col mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Data Jatuh Tempo</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div> -->
    </div>

    <form method="post" action="/save-detail" class="row row-cols-lg-auto g-3 align-items-center mt-3">
    <div class="col-12 mb-3">
        <div class="input-group">
            <input type="hidden" name="id_penjualan_detail">
            <div class="input-group-text">Nama Pelanggan</div>
            <select name="id_pelanggan" id="">
                <?php $i = 1; ?>
                <?php foreach ($pelanggan as $item) : ?>
                    <option value="<?= $item['id_pelanggan']; ?>"><?= $item['nama_pelanggan']; ?></option>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Nama Obat</div>
            <select name="id_obat" id="">
                <?php $i = 1; ?>
                <?php foreach ($obat as $item) : ?>
                    <option value="<?= $item['id_obat']; ?>"><?= $item['nama_obat']; ?></option>

                    <?php $i++ ?>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Jumlah Obat</div>
            <input type="number" name="jumlah_obat" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>

    <div class="col-12">
        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>

<?= $this->endSection(); ?>