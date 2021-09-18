<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php

    $nama_kategori = [
        'name' => 'nama_kategori',
        'id' => 'nama_kategori',
        'value' => $kategori->nama_kategori,
        'class' => 'form-control'
    ];

    $foto_kategori = [
        'name' => 'foto_kategori',
        'id' => 'foto_kategori',
        'value' => null,
        'class' => 'form-control',
    ];

    $keterangan = [
        'name' => 'keterangan',
        'id' => 'keterangan',
        'value' => $kategori->keterangan,
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

<div class="container mt-4 vh-200 mb-4">
    <div class="row justify-content-center h-200">
        <div class="card w-50 my-auto">
            <div class="card-header text-center">
                <h1>Form Ubah Kategori</h1>
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
                <?= form_open_multipart('Admin/Kategori_Admin/update/' . $kategori->id_kategori) ?>

                <div class="form-group mt-3">
                        <?= form_label("Nama Kategori", "nama_kategori") ?>
                        <?= form_input($nama_kategori) ?>
                </div>

                <!-- Preview Gambar -->
                <div class="text-center">
                        <img class="img-fluid mb-3 mt-3" width="100" src="<?= base_url('upload/Foto Kategori/' . $kategori->foto_kategori) ?>">
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Foto Kategori", "foto_kategori") ?>

                        <!-- Form Upload karena mau upload foto_kategori -->
                        <?= form_upload($foto_kategori) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Keterangan", "keterangan") ?>
                    <?= form_textarea($keterangan) ?>
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

<!-- Memanggil CKeditor -->
<?= $this->section('script') ?>

<script src="<?= base_url('ckeditor5/ckeditor.js') ?>"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#body'),{
            
        }).then(editor=>{
            console.log(editor);
        }).catch(error=>{
            console.log(editor);

        });
</script>

<?= $this->endSection() ?>