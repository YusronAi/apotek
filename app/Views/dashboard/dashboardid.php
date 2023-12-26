<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="/save-detail" class="row row-cols-lg-auto g-3 align-items-center">
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

<div class="container">
    <table class='table mt-5'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Nama Obat</th>
                <th>Jumlah Obat</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($daftar as $item) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                    <td>
                    <td>12</td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div style="display : flex; align-items: center; justify-content : center;"><a href="/input-transaksi/<?= session()->getFlashdata('ip'); ?>"><button class="btn btn-success">Simpan</button></a></div>
</div>

<?= $this->endSection(); ?>