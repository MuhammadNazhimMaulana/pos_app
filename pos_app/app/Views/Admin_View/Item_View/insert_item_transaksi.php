<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin')?>
<?php
    
    $id_transaksi = [
        'name' => 'id_transaksi',
        'id' => 'id_transaksi',
        'readonly' => true,
        'value' => $informasi->id_transaksi,
        'class' => 'form-control'
    ];
    
    $nama_kasir = [
        'name' => 'nama_kasir',
        'id' => 'nama_kasir',
        'readonly' => true,
        'value' => $informasi->nama_kasir,
        'class' => 'form-control'
    ];

    $tanggal_transaksi = [
        'name' => 'tanggal_transaksi',
        'id' => 'tanggal_transaksi',
        'readonly' => true,
        'value' => $informasi->tanggal_transaksi,
        'class' => 'form-control'
    ];
    
    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
        'type' => 'submit'
    ];

$session = session();
$errors = $session->getFlashdata('errors');
?>

<section class="dashboard-top-sec">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center mb-4">Input Transaksi</h1>

            <!-- Ini untuk transaksi -->
                <div class="col-lg-12">
                    <div class="bg-white top-chart-ear">
                        <div class="row">

                            <section>
                                <div class="sm-chart-sec my-5">
                                    <div class="container-fluid">
                                        <div class="row">
                                                                                                                                   
                                            <div class="col-sm-4">
                                                <?= form_label("Nomor Transaksi", "id_transaksi") ?>
                                                <?= form_input($id_transaksi) ?>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <?= form_label("Nama Kasir", "nama_kasir") ?>
                                                <?= form_input($nama_kasir) ?>
                                            </div>

                                            <div class="col-sm-4">
                                                <?= form_label("Tanggal", "tanggal_transaksi") ?>
                                                <?= form_input($tanggal_transaksi) ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Awal Input Item -->
                                            <?= form_open('Admin/Item_Admin/input') ?>
                                            
                                            <div class="d-flex justify-content-end mt-3">
                                                <!-- Form submit terkait submit-->
                                                <?= form_submit($submit) ?>
                                            </div>

                                            <?= form_close() ?>

                                            <!-- Ini Akhir input Item-->
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            
            <!-- Ini Tabel transaksi Sementara -->
                <div class="col-lg-12 mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Kasir</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah Beli</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>Hapus</td>
                            </tr>

                            <tr>
                                <td colspan="5">Total</td>
                                <td>Isi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
</section>

            <?= $this->endSection() ?>
