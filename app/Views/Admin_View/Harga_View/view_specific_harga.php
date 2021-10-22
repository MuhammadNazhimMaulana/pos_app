<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<div class="text">

    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 ms-5">
            <div class="card">
                <h2 class="card-header text-center">Data Harga</h2>
                <div class="card-body">
                    <a href="<?= site_url('admin/prizes') ?>" class="btn btn-primary mb-3">Kembali ke Daftar</a>
                    <h3 class="text-center mb-5"><?= $prize->nama_barang ?></h3>
                    <p><?= $prize->range_1 ?> adalah harga minimalnya</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>