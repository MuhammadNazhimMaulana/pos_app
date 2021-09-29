<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php
    
    $username = [
        'name' => 'username',
        'id' => 'username',
        'value' => $profil->username,
        'class' => 'form-control'
    ];

    $nama_lengkapa = [
        'name' => 'nama_lengkapa',
        'id' => 'nama_lengkapa',
        'value' => $profil->nama_lengkapa,
        'class' => 'form-control'
    ];

    $alamat = [
        'name' => 'alamat',
        'id' => 'alamat',
        'value' => $profil->alamat,
        'class' => 'form-control'
    ];

    $usia = [
        'name' => 'usia',
        'id' => 'usia',
        'type' => 'number',
        'value' => $profil->usia,
        'class' => 'form-control'
    ];

    $foto_user = [
        'name' => 'foto_user',
        'id' => 'foto_user',
        'value' => null,
        'class' => 'form-control'
    ];

    $password = [
        'name' => 'password',
        'id' => 'password',
        'type' => 'password',
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

<div class="container mt-4 vh-200 mb-4">
    <div class="row justify-content-center h-200">
        <div class="card w-50 my-auto">
            <div class="card-header text-center">
                <h1>Form Ubah Profile</h1>
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
                <?= form_open_multipart('admin/profile/update/' . $profil->id_pengguna) ?>
                
                <!-- Preview Gambar -->
                <div class="text-center">
                        <img class="img-fluid mb-3 mt-3" width="100" src="<?= base_url('upload/Foto User/' . $profil->foto_user) ?>">
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Foto User", "foto_user") ?>

                        <!-- Form Upload karena mau upload foto_user -->
                        <?= form_upload($foto_user) ?>
                </div>

                <div class="form-group mt-3">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Nama Lengkap", "nama_lengkapa") ?>
                    <?= form_input($nama_lengkapa) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Alamat", "alamat") ?>
                    <?= form_textarea($alamat) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Usia", "usia") ?>
                    <?= form_input($usia) ?>
                </div>

                <div class="form-group mt-3">
                    <?= form_label("Password", "password") ?>
                    <?= form_input($password) ?>
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
