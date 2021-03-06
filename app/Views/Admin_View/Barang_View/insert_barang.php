<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php
    
    $id_kategori = [
        'name' => 'id_kategori',
        'id' => 'id_kategori',
        'options' => $daftar_kategori,
        'class' => 'form-control'
    ];

    $nama_barang = [
        'name' => 'nama_barang',
        'id' => 'nama_barang',
        'value' => null,
        'class' => 'form-control'
    ];

    $harga_barang = [
        'name' => 'harga_barang',
        'id' => 'harga_barang',
        'type' => 'number',
        'value' => null,
        'class' => 'form-control'
    ];
    
    $foto_barang = [
        'name' => 'foto_barang',
        'id' => 'foto_barang',
        'value' => null,
        'class' => 'form-control',
    ];
    
    $status = [
        'name' => 'status',
        'id' => 'status',
        'options' => ['Dijual' => 'Dijual', 'Tidak Dijual' => 'Tidak Dijual'],
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
                <?= form_open_multipart('admin/goods/create') ?>

                <div class="form-group mt-3">
                        <?= form_label("Nama Kategori", "id_kategori") ?>
                        <?= form_dropdown($id_kategori) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Nama Barang", "nama_barang") ?>
                        <?= form_input($nama_barang) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Harga Barang", "harga_barang") ?>
                        <?= form_input($harga_barang) ?>
                </div>
                
                <div class="form-group mt-3">
                        <?= form_label("Foto Barang", "foto_barang") ?>

                        <!-- Form Upload karena mau upload foto_barang -->
                        <?= form_upload($foto_barang) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Status", "status") ?>
                    <?= form_dropdown($status) ?>
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
