<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="/data-obat/update/<?= $obat['id_obat']; ?>" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Nama Obat</div>
            <input type="hidden" name="id_obat" class="form-control" value="<?= $obat['id_obat']; ?>" />
            <input type="text" name="nama_obat" class="form-control" id="inlineFormInputGroupUsername" value="<?= $obat['nama_obat']; ?>" />
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Stok Obat</div>
            <input type="text" name="stok" class="form-control" id="inlineFormInputGroupUsername" value="<?= $obat['stok']; ?>" />
        </div>
    </div>

    <div class="col-12">
        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?= $this->endSection(); ?>