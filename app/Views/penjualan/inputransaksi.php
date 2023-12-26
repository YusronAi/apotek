<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="/save-transaksi" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12 mb-3">
        <div class="input-group">
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
            <div class="input-group-text">Tanggal Transaksi</div>
            <input type="date" name="tgl_transaksi" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Total Transaksi</div>
            <input type="number" name="total_transaksi" class="form-control" value="<?= $totaltransaksi; ?>" id="inlineFormInputGroupUsername" />
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Total Bayar</div>
            <input type="number" name="total_bayar" id="inlineFormInputGroupUsername">
        </div>
    </div>

    <div class="col-12">
        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?= $this->endSection(); ?>