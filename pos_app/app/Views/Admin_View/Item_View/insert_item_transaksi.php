<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin')?>
<?php
    // Awal Bagian Atas
    $nomor_transaksi = [
        'name' => 'nomor_transaksi',
        'id' => 'nomor_transaksi',
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
    // Akhir Bagian Atas

    // Awal Input
    $attributes = ['class' => 'inline-form'];

    $id_transaksi = [
        'name' => 'id_transaksi',
        'id' => 'id_transaksi',
        'type' => 'hidden',
        'value' => $informasi->id_transaksi,
        'class' => 'form-control'
    ];
    
    $id_barang = [
        'name' => 'id_barang',
        'id' => 'id_barang',
        'options' => $daftar_barang,
        'class' => 'form-control'
    ];
    
    $qty = [
        'name' => 'qty',
        'id' => 'qty',
        'type' => 'number',
        'value' => null,
        'class' => 'form-control'
    ];
    
    $harga_item = [
        'name' => 'harga_item',
        'id' => 'harga_item',
        'type' => 'number',
        'value' => null,
        'class' => 'form-control'
    ];

    // Akhir input
    
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
                                                <?= form_label("Nomor Transaksi", "nomor_transaksi") ?>
                                                <?= form_input($nomor_transaksi) ?>
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
                                        
                                        <!-- Awal Input Item -->
                                        <?= form_open('Admin/Item_Admin/input', $attributes) ?>
                                        
                                        <div class="row mt-3">

                                            <div class="col-sm-4 input">
                                                <?= form_label("Nama Barang", "id_barang") ?>
                                                <?= form_dropdown($id_barang) ?>
                                            </div>
                                            
                                            <div class="col-sm-4 input">
                                                <?= form_label("Jumlah Beli", "qty") ?>
                                                <?= form_input($qty) ?>
                                            </div>
                                            
                                            <div class="col-sm-4 input">
                                                <?= form_label("Harga Barang", "harga_item") ?>
                                                <?= form_input($harga_item) ?>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <?= form_input($id_transaksi) ?>
                                            </div>

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
      
<!-- Bagian Script -->
<?= $this->section('script')?>
    <script>
        $(document).ready(function(){

            $('#id_barang').change(function(){

                var id_barang = $('#id_barang').val();

                var action = 'get_harga';

                if(id_barang != '')
                {
                    $.ajax({
                        url:"<?= site_url('Admin/Item_Admin/action'); ?>",
                        method:"POST",
                        data:{id_barang:id_barang, action:action},
                        dataType:"JSON",
                        success:function(data)
                        {
                            
                            $('#harga_item').val(data.harga_barang);
                        }
                    });

                }
                else
                {
                    $('#harga_item').val('');
                }
            });
        });
    </script>
<?= $this->endSection() ?>