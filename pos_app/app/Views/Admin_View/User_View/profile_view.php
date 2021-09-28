<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php
    
    $username = [
        'name' => 'username',
        'id' => 'username',
        'readonly' => true,
        'value' => $profil->username,
        'class' => 'form-control'
    ];

    $nama_lengkapa = [
        'name' => 'nama_lengkapa',
        'id' => 'nama_lengkapa',
        'readonly' => true,
        'value' => $profil->nama_lengkapa,
        'class' => 'form-control'
    ];

    $alamat = [
        'name' => 'alamat',
        'id' => 'alamat',
        'readonly' => true,
        'value' => $profil->alamat,
        'class' => 'form-control'
    ];

    $usia = [
        'name' => 'usia',
        'id' => 'usia',
        'readonly' => true,
        'type' => 'number',
        'value' => $profil->usia,
        'class' => 'form-control'
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
                            <h1 class="text-center">Profile</h1>
                        <section>
                            <div class="sm-chart-sec my-5">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="foto-profile">
                                                <img src="<?= base_url('upload/Foto User/' . $profil->foto_user) ?>" width="200">
                                                <a href="" class="di-btn-trans purple-gradient ubah-pic">Ubah Foto</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="informasi-profil">
                                                <div class="col-sm-10 mb-4">
                                                    <?= form_label("Username", "username") ?>
                                                    <?= form_input($username) ?>
                                                </div>
                                                <div class="col-sm-10 mb-4">
                                                    <?= form_label("Nama Lengkap", "nama_lengkapa") ?>
                                                    <?= form_input($nama_lengkapa) ?>
                                                </div>
                                                <div class="col-sm-10 mb-4">
                                                    <?= form_label("Alamat", "alamat") ?>
                                                    <?= form_input($alamat) ?>
                                                </div>
                                                <div class="col-sm-10 mb-4">
                                                    <?= form_label("Usia", "usia") ?>
                                                    <?= form_input($usia) ?>
                                                </div>
                                                <div class="d-flex justify-content-center col-sm-10 mb-4">
                                                    <a href="<?= site_url('Admin/Dashboard_Admin/update/'. $profil->id_pengguna) ?>" class="di-btn-trans purple-gradient">Ubah Profile</a>
                                                </div>
                                            </div>
                                        </div>
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
      