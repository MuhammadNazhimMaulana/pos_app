<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php
    
    $id_barang = [
        'name' => 'id_barang',
        'id' => 'id_barang',
        'options' => $daftar_barang,
        'class' => 'form-control',
        'selected' => $prize->id_barang
    ];

    $range_1 = [
        'name' => 'range_1',
        'id' => 'range_1',
        'type' => 'number',
        'value' => $prize->range_1,
        'class' => 'form-control'
    ];

    $range_2 = [
        'name' => 'range_2',
        'id' => 'range_2',
        'type' => 'number',
        'value' => $prize->range_2,
        'class' => 'form-control'
    ];
    
    $harga = [
        'name' => 'harga',
        'id' => 'harga',
        'type' => 'number',
        'value' => $prize->harga,
        'class' => 'form-control',
    ];
    
    $nama_harga = [
        'name' => 'nama_harga',
        'id' => 'nama_harga',
        'value' => $prize->nama_harga,
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
                <h1>Form Tambah Barang</h1>
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
                <?= form_open_multipart('Admin/Harga_Admin/update/'.$prize->id_harga) ?>

                <div class="form-group mt-3">
                        <?= form_label("Nama Barang", "id_barang") ?>
                        <?= form_dropdown($id_barang) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Harga Minimal", "range_1") ?>
                        <?= form_input($range_1) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Harga Maksimal", "range_2") ?>
                        <?= form_input($range_2) ?>
                </div>
                
                <div class="form-group mt-3">
                        <?= form_label("Harga Barang", "harga") ?>
                        <?= form_input($harga) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Tulisan", "nama_harga") ?>
                    <?= form_input($nama_harga) ?>
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
