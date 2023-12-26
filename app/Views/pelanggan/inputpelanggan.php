<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="/save-pelanggan" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Nama Pelanggan</div>
            <input type="text" name="nama_pelanggan" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Umur</div>
            <input type="number" name="umur" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Alamat</div>
            <input type="text" name="alamat" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Jenis Kelamin</div>
            <input type="text" name="jk" class="form-control" id="inlineFormInputGroupUsername" />
        </div>
    </div>

    <div class="col-12">
        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?= $this->endSection(); ?>