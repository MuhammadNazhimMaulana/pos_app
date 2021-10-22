<?= $this->extend('Template/Source/auth_looks') ?>
<?= $this->section('content_auth') ?>
<?php

$nama_lengkapa = [
    'name' => 'nama_lengkapa',
    'id' => 'nama_lengkapa',
    'value' => null,
    'class' => 'form-control'
];

$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];

$alamat = [
    'name' => 'alamat',
    'id' => 'alamat',
    'value' => null,
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];

$password_confirm = [
    'name' => 'password_confirm',
    'id' => 'password_confirm',
    'class' => 'form-control'
];

$foto_user = [
    'name' => 'foto_user',
    'id' => 'foto_user',
    'value' => null,
    'class' => 'form-control'
];

$usia = [
    'name' => 'usia',
    'id' => 'usia',
    'type' => 'number',
    'value' => null,
    'class' => 'form-control'
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Login',
    'class' => 'btn btn-danger w-50',
    'type' => 'submit'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>

   <!-- Awal Login -->
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                    <p class="text-center  mb-4">POS Bonevian</p>
                    <img src="<?= base_url('img/Bonevian.png') ?>" class="w-25" />
                </div>

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

                <?= form_open_multipart('Auth/Authorisasi/register') ?>
                    <div class="mb-4">
                        <?= form_label("Nama Lengkap", "nama_lengkapa") ?>
                        <?= form_input($nama_lengkapa) ?>
                    </div>

                    <div class="mb-4">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                    </div>

                    <div class="mb-4">
                        <?= form_label("Alamat", "alamat") ?>
                        <?= form_textarea($alamat) ?>
                    </div>

                    <div class="mb-4">
                        <?= form_label("Password", "password") ?>
                        <?= form_password($password) ?>
                    </div>

                    <div class="mb-4">
                        <?= form_label("Konfirmasi Password", "password_confirm") ?>
                        <?= form_password($password_confirm) ?>
                    </div>

                    <div class="mb-4">
                        <?= form_label("Foto User", "foto_user") ?>

                        <!-- Form Upload karena mau upload foto_user -->
                        <?= form_upload($foto_user) ?>
                    </div>
                    
                    <div class="mb-4">
                        <?= form_label("Usia", "usia") ?>
                        <?= form_input($usia) ?>
                    </div>

                    <div class="mb-4 d-flex justify-content-center">

                        <!-- Form submit terkait submit-->
                        <?= form_submit($submit) ?>
                    </div>

                <?= form_close() ?>

                <p class="mb-0 text-center">Belum Register? <a href="<?= base_url('/login') ?>" class="text-decoration-none">Daftar Disini</a></p>
            </div>
        </div>
    </div>
    <!-- Akhir Login -->

    <?= $this->endSection() ?>
