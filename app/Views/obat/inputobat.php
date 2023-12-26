<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="/save-obat" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Nama Obat</div>
            <input type="text" name="nama_obat" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Harga Obat</div>
            <input type="number" name="harga" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Stok Obat</div>
            <input type="text" name="stok" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>

    <div class="col-12">
        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?= $this->endSection(); ?>