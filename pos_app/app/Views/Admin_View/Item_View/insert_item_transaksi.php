<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin')?>
<?php
    // Awal Bagian Atas
    $nomor_transaksi = [
        'name' => 'id_transaksi',
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
        'readonly' => true,
        'value' => null,
        'class' => 'form-control'
    ];

    $total_item = [
        'name' => 'total_item',
        'id' => 'total_item',
        'type' => 'number',
        'readonly' => true,
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

// Transaksi

    $nomor_bayar = [
        'name' => 'id_transaksi',
        'id' => 'nomor_bayar',
        'type' => 'hidden',
        'readonly' => true,
        'value' => $informasi->id_transaksi,
        'class' => 'form-control'
    ];

    $kasir = [
        'name' => 'nama_kasir',
        'id' => 'kasir',
        'type' => 'hidden',
        'readonly' => true,
        'value' => $informasi->nama_kasir,
        'class' => 'form-control'
    ];

    $tanggal = [
        'name' => 'tanggal_transaksi',
        'id' => 'tanggal',
        'type' => 'hidden',
        'readonly' => true,
        'value' => $informasi->tanggal_transaksi,
        'class' => 'form-control'
    ];

    $waktu = [
        'name' => 'waktu_transaksi',
        'id' => 'waktu',
        'type' => 'hidden',
        'readonly' => true,
        'value' => $informasi->waktu_transaksi,
        'class' => 'form-control'
    ];

    $total_transaksi = [
        'name' => 'total_transaksi',
        'id' => 'total_transaksi',
        'type' => 'hidden',
        'readonly' => true,
        'value' => $total[0]->jumlah,
        'class' => 'form-control'
    ];

    $pembayaran = [
        'name' => 'pembayaran',
        'id' => 'pembayaran',
        'value' => 'Total',
        'class' => 'btn btn-success',
        'type' => 'submit'
    ];

$session = session();
$errors = $session->getFlashdata('errors');
?>

<section class="dashboard-top-sec trans">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center mb-4">Input Transaksi</h1>

            <!-- Awal Jika Error -->
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
            <!-- Akhir Jika Error -->

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
                                        <?= form_open('admin/items/input/'. $informasi->id_transaksi, $attributes) ?>
                                        
                                        <div class="row mt-3">

                                            <div class="col-sm-3 input">
                                                <?= form_label("Nama Barang", "id_barang") ?>
                                                <?= form_dropdown($id_barang) ?>
                                            </div>
                                            
                                            <div class="col-sm-3 input">
                                                <?= form_label("Jumlah Beli", "qty") ?>
                                                <?= form_input($qty) ?>
                                            </div>
                                            
                                            <div class="col-sm-3 input">
                                                <?= form_label("Harga Barang", "harga_item") ?>
                                                <?= form_input($harga_item) ?>
                                            </div>

                                            <div class="col-sm-3 input">
                                                <?= form_label("Harga Total", "total_item") ?>
                                                <?= form_input($total_item) ?>
                                            </div>
                                            
                                            <div class="col-sm-3">
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
                            <th scope="col">Total Harga</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php $i = 1;?>
                            <?php foreach ($item as $index => $shops) :?>
                            <th scope="row"><?= $i++ ?></th>
                                <td><?= $shops->id_transaksi ?></td>
                                <td><?= $shops->nama_barang ?></td>
                                <td><?= $shops->qty ?></td>
                                <td><?= $shops->harga_item ?></td>
                                <td><?= $shops->total_item ?></td>
                                <td>
                                    <a href="#modalUpdate<?= $shops->id_item ?>" data-bs-toggle="modal" onclick="" class="btn btn-warning">Update</a>
                                    <a href="#modalDelete<?= $shops->id_item ?>" data-bs-toggle="modal" onclick="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach ?>

                            <tr>
                                <td colspan="5">Total Bayar</td>
                                <td colspan="2"><?= $total[0]->jumlah ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Awal Penyesuaian Transaksi -->
                    <?= form_open('admin/transactions/check_out/' . $informasi->id_transaksi) ?>
                                            
                        <div class="col-sm-4">
                            <?= form_input($kasir) ?>
                        </div>
                                            
                        <div class="col-sm-4">
                            <?= form_input($tanggal) ?>
                        </div>

                        <div class="col-sm-4">
                            <?= form_input($waktu) ?>
                        </div>

                        <div class="col-sm-4">
                            <?= form_input($total_transaksi) ?>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <!-- Form submit terkait submit-->
                            <?= form_submit($pembayaran) ?>
                        </div>
                    <?= form_close() ?>
                    <!-- Akhir Penyesuaian Transaksi -->

                </div>

        </div>
    </div>
</section>

<!-- Awal Modal Update -->
      <!-- Modal -->
      <?php foreach ($item as $index => $shops) :?>
        <!-- Mendapatkan Nilai dari yang dipilih -->
            <?php
                $nomor_barang = [
                    'name' => 'id_barang',
                    'id' => 'id_barang',
                    'options' => $daftar_barang,
                    'class' => 'form-control',
                    'selected' => $shops->id_barang,
                    'readonly' => true
                    ];

                $total = [
                    'name' => 'qty',
                    'id' => 'total',
                    'type' => 'number',
                    'class' => 'form-control',
                    'value' => $shops->qty
                    ];

                $harga_satuan = [
                    'name' => 'harga_item',
                    'id' => 'harga_satuan',
                    'type' => 'number',
                    'class' => 'form-control',
                    'value' => $shops->harga_item,
                    'readonly' => true
                    ];

                $harga_total = [
                    'name' => 'total_item',
                    'id' => 'harga_total',
                    'type' => 'hidden',
                    'class' => 'form-control',
                    'value' => $shops->total_item,
                    'readonly' => true
                    ];

                $transaksi = [
                    'name' => 'id_transaksi',
                    'id' => 'transaksi',
                    'type' => 'hidden',
                    'class' => 'form-control',
                    'value' => $shops->id_transaksi,
                    'readonly' => true
                    ];
            ?>
        
        <div class="modal fade" id="modalUpdate<?= $shops->id_item ?>" tabindex="-1" data-bs-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Perubahan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  
                    <!-- Awal Input Item -->
                        <?= form_open('admin/items/update/'. $shops->id_item) ?>
                            <div class="row">
                                <div class="col-sm-4 input">
                                    <?= form_label("Nama Barang", "nomor_barang") ?>
                                    <?= form_dropdown($nomor_barang) ?>
                                </div>
                                                    
                                <div class="col-sm-4 input">
                                    <?= form_label("Jumlah Beli", "total") ?>
                                    <?= form_input($total) ?>
                                </div>
                                
                                <div class="col-sm-4 input">
                                    <?= form_label("Harga Barang", "harga_satuan") ?>
                                    <?= form_input($harga_satuan) ?>
                                </div>
                                
                                <div class="col-sm-4 input">
                                    <?= form_input($transaksi) ?>
                                </div>
                                
                            </div>

                        </div>
                        <div class="modal-footer mt-3">
                            <div class="d-flex justify-content-end mt-3">
                                <!-- Form submit terkait submit-->
                                <?= form_submit($submit) ?>
                            </div>
          
                    <?= form_close() ?>
                            
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
<!-- Akhir Modal Update -->

<!-- Awal Modal Update -->
      <!-- Modal -->
      <?php foreach ($item as $index => $shops) :?>
        <!-- Mendapatkan Nilai dari yang dipilih -->
            <?php
                $transaction = [
                    'name' => 'id_transaksi',
                    'id' => 'transaction',
                    'type' => 'hidden',
                    'class' => 'form-control',
                    'value' => $shops->id_transaksi,
                    'readonly' => true
                    ];
            ?>
        
        <div class="modal fade" id="modalDelete<?= $shops->id_item ?>" tabindex="-1" data-bs-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Penghapusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  
                    <!-- Awal Input Item -->
                        <?= form_open('admin/items/delete/'. $shops->id_item) ?>
                            <div class="row">

                                <div class="col-sm-4 input">
                                    <?= form_input($transaksi) ?>
                                </div>
                                
                            </div>

                        </div>
                        <div class="modal-footer mt-3">
                            <div class="d-flex justify-content-end mt-3">
                                <!-- Form submit terkait submit-->
                                <?= form_submit($submit) ?>
                            </div>
          
                    <?= form_close() ?>
                            
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
<!-- Akhir Modal Update -->

<?= $this->endSection() ?>

      
<!-- Bagian Script -->
<?= $this->section('script')?>

<!-- Mendapatkan Harga Otomatis -->
    <script>
        $(document).ready(function(){

            $('#id_barang').change(function(){

                var id_barang = $('#id_barang').val();

                var action = 'get_harga';

                if(id_barang != '')
                {
                    $.ajax({
                        url:"<?= base_url('admin/items/action'); ?>",
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

            $('#qty').change(function(){

                var qty = $('#qty').val();
                var harga_item = $('#harga_item').val();
                $('#total_item').val(0);

                if(qty != null)
                {                            
                    $('#total_item').val(qty * harga_item);

                }
                else
                {
                    $('#total_item').val(0);
                }
            });

        });
    </script>
<?= $this->endSection() ?>