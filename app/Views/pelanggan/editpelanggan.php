<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="/update-pelanggan/<?= $pelanggan['id_pelanggan']; ?>" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Nama Pelanggan</div>
            <input type="hidden" name="id_pelanggan" class="form-control" value="<?= $pelanggan['id_pelanggan']; ?>" />
            <input type="text" name="nama_pelanggan" class="form-control" id="inlineFormInputGroupUsername" value="<?= $pelanggan['nama_pelanggan']; ?>" />
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Umur</div>
            <input type="text" name="umur" class="form-control" id="inlineFormInputGroupUsername" value="<?= $pelanggan['umur']; ?>" />
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Alamat</div>
            <input type="text" name="alamat" class="form-control" id="inlineFormInputGroupUsername" value="<?= $pelanggan['alamat']; ?>" />
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="input-group">
            <div class="input-group-text">Jenis Kelamin</div>
            <select name="jk" id="">
                <option value="LK">laki Laki</option>
                <option value="PR">Perempuan</option>
            </select>
        </div>
    </div>

    <div class="col-12">
        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?= $this->endSection(); ?>