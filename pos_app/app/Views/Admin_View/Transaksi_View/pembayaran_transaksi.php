<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>

<section class="dashboard-top-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white top-chart-ear">
                    <div class="row">
                            <h1 class="text-center">Pembayaran</h1>
                        <section>
                            <div class="sm-chart-sec my-5">
                                <div class="container-fluid">
                                    <div class="row">

                                        <!-- Awal Card -->
                                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Data</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Data Transaksi</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-end">
                                            <a href="" class="di-btn-trans purple-gradient">Testing</a>
                                        </div>
                                        </div>
                                        <!-- Akhir Card -->

                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
