<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php
    
    $id_barang = [
        'name' => 'id_barang',
        'id' => 'id_barang',
        'options' => $daftar_barang,
        'class' => 'form-control'
    ];

    $stok_awal = [
        'name' => 'stok_awal',
        'id' => 'stok_awal',
        'type' => 'number',
        'value' => null,
        'class' => 'form-control'
    ];

    $stok = [
        'name' => 'stok',
        'id' => 'stok',
        'type' => 'number',
        'value' => null,
        'class' => 'form-control'
    ];
    
    $tanggal_masuk = [
        'name' => 'tanggal_masuk',
        'id' => 'tanggal_masuk',
        'type' => 'date',
        'value' => null,
        'class' => 'form-control'
    ];

    $tanggal_kadaluarsa = [
        'name' => 'tanggal_kadaluarsa',
        'id' => 'tanggal_kadaluarsa',
        'type' => 'date',
        'value' => null,
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

<div class="container mt-4 vh-100">
    <div class="row justify-content-center h-100">
        <div class="card w-50 my-auto">
            <div class="card-header text-center">
                <h1>Form Tambah Stok</h1>
            </div>
            <div class="card-body">
                <?php if ($errors != null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Terjadi Kesalahan</h4>
                        <hr>
                        <p class="mb-0">
                            <?php foreach ($errors as $err) {
                                echo $err . '<br>';
                            }

                            ?>
                        </p>
                    </div>
                <?php endif ?>

                <!-- Membuat Form dengan Form Helper -->
                <?= form_open_multipart('Admin/Stok_Admin/create') ?>

                <div class="form-group mt-3">
                        <?= form_label("Nama Barang", "id_barang") ?>
                        <?= form_dropdown($id_barang) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Stok Awal", "stok_awal") ?>
                        <?= form_input($stok_awal) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Stok Sekarang", "stok") ?>
                        <?= form_input($stok) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Tanggal Masuk", "tanggal_masuk") ?>
                        <?= form_input($tanggal_masuk) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Tanggal Kadaluarsa", "tanggal_kadaluarsa") ?>
                        <?= form_input($tanggal_masuk) ?>
                </div>

                <div class="d-flex justify-content-end mt-3">
                <!-- Form submit terkait submit-->
                <?= form_submit($submit) ?>
                </div>

                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
