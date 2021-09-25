<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php
    
    $nama_kasir = [
        'name' => 'nama_kasir',
        'id' => 'nama_kasir',
        'readonly' => true,
        'value' => $transaksi->nama_kasir,
        'class' => 'form-control'
    ];
    
    $tanggal_transaksi = [
        'name' => 'tanggal_transaksi',
        'id' => 'tanggal_transaksi',
        'readonly' => true,
        'value' => $transaksi->tanggal_transaksi,
        'class' => 'form-control'
    ];
    
    $waktu_transaksi = [
        'name' => 'waktu_transaksi',
        'id' => 'waktu_transaksi',
        'readonly' => true,
        'value' => $transaksi->waktu_transaksi,
        'class' => 'form-control'
    ];

    $id_transaksi = [
        'name' => 'id_transaksi',
        'id' => 'id_transaksi',
        'type' => 'number',
        'readonly' => true,
        'value' => $transaksi->id_transaksi,
        'class' => 'form-control'
    ];

    $total_transaksi = [
        'name' => 'total_transaksi',
        'id' => 'total_transaksi',
        'type' => 'number',
        'readonly' => true,
        'value' => $transaksi->total_transaksi,
        'class' => 'form-control'
    ];

    $ppn = [
        'name' => 'ppn',
        'id' => 'ppn',
        'type' => 'number',
        'readonly' => true,
        'value' => null,
        'class' => 'form-control'
    ];

    $kembalian = [
        'name' => 'kembalian',
        'id' => 'kembalian',
        'type' => 'number',
        'readonly' => true,
        'value' => null,
        'class' => 'form-control'
    ];

    $total_ppn = [
        'name' => 'total_ppn',
        'id' => 'total_ppn',
        'type' => 'number',
        'readonly' => true,
        'value' => null,
        'class' => 'form-control'
    ];
    
    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Pembayaran',
        'class' => 'btn btn-success',
        'type' => 'submit'
    ];
    
$session = session();
$errors = $session->getFlashdata('errors');
?>

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
                                    <!-- Awal Pembayaran -->
                                    <?= form_open('Admin/Transaksi_Admin/pembayaran/'. $transaksi->id_transaksi) ?>
                                        <div class="row">
                                            <div class="col-sm-4 input">
                                                <?= form_label("Nomor Transaksi", "id_transaksi") ?>
                                                <?= form_input($id_transaksi) ?>
                                            </div>
                                            <div class="col-sm-4 input">
                                                <?= form_label("Nama Kasir", "nama_kasir") ?>
                                                <?= form_input($nama_kasir) ?>
                                            </div>
                                            <div class="col-sm-4 input">
                                                <?= form_label("Tanggal Transaksi", "tanggal_transaksi") ?>
                                                <?= form_input($tanggal_transaksi) ?>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-4 input">
                                                <?= form_label("Harga Total", "total_transaksi") ?>
                                                <?= form_input($total_transaksi) ?>
                                            </div>
                                            <div class="col-sm-4 input">
                                                <?= form_label("PPN", "ppn") ?>
                                                <?= form_input($ppn) ?>
                                            </div>
                                            <div class="col-sm-4 input">
                                                <?= form_label("Total Bayar", "total_ppn") ?>
                                                <?= form_input($total_ppn) ?>
                                            </div>
                                        </div>
                                        <div class="row mt-4 kembalian">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4 mt-3">
                                                <?= form_label("Kembalian", "kembalian") ?>
                                                <?= form_input($kembalian) ?>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="d-flex justify-content-end mt-3">
                                                <!-- Form submit terkait submit-->
                                                <?= form_submit($submit) ?>
                                            </div>
                                        </div>
                                    <?= form_close() ?>
                                    <!-- Akhir Pembayaran -->
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
