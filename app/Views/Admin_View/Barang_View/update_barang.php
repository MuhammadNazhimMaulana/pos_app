<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php

    // Membuat angka menjadi tulisan
    $format = new NumberFormatter("id", NumberFormatter::SPELLOUT);
        
    $id_kategori = [
        'name' => 'id_kategori',
        'id' => 'id_kategori',
        'options' => $daftar_kategori,
        'class' => 'form-control',
        'selected' => $barang->id_kategori
    ];

    $nama_barang = [
        'name' => 'nama_barang',
        'id' => 'nama_barang',
        'value' =>  $barang->nama_barang,
        'class' => 'form-control'
    ];

    $harga_barang = [
        'name' => 'harga_barang',
        'id' => 'harga_barang',
        'type' => 'number',
        'value' => $harga->harga_asli,
        'class' => 'form-control'
    ];

    $harga_text = [
        'name' => 'harga_text',
        'id' => 'harga_text',
        'type' => 'hidden',
        'value' => $format->format($harga->harga_asli),
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
        'class' => 'form-control',
        'selected' => $barang->status
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
                <?= form_open_multipart('admin/goods/update/'.$barang->id_barang) ?>

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
                        <?= form_label("Harga Text", "harga_text") ?>
                        <?= form_input($harga_text) ?>
                </div>
                
                <!-- Preview Gambar -->
                <div class="text-center">
                        <img class="img-fluid mb-3 mt-3" width="50" src="<?= base_url('upload/Foto Barang/' . $barang->foto_barang) ?>">
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
