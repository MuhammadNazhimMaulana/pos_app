<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php 

$submit = [
    'name' => 'submit',
    'value' => 'Input',
    'type' =>'submit',
    'class' => 'di-btn-trans purple-gradient bersih'
  ];

?>

<section class="dashboard-top-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white top-chart-ear">
                    <div class="row">

                        <section>
                            <div class="sm-chart-sec my-5">
                                <div class="container-fluid">
                                    <div class="row">

                                        <!-- Awal Card -->
                                        <div class="card text-dark bg-light mb-3 me-4 ms-4" style="max-width: 18rem;">
                                        <div class="card-header">Input</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Input Kasir</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-end">

                                            <!-- Awal Input Transaksi -->
                                            <?= form_open('Admin/Transaksi_Admin/insert') ?>
                                                <div>
                                                    <?= form_submit($submit) ?>
                                                </div>
                                            <?= form_close() ?>
                                            <!-- Akhir Input Transaksi -->

                                        </div>
                                        </div>

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
