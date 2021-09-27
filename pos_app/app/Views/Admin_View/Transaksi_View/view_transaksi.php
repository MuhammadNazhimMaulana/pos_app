<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>
<?php 

    $kembalian = [
        'name' => 'kembalian',
        'id' => 'kembalian',
        'type' => 'number',
        'readonly' => true,
        'value' => $transaksi->kembalian,
        'class' => 'form-control'
    ];

    $total_ppn = [
        'name' => 'total_ppn',
        'id' => 'total_ppn',
        'type' => 'number',
        'readonly' => true,
        'value' => $transaksi->total_ppn,
        'class' => 'form-control'
    ];

    $total_bayar = [
        'name' => 'total_bayar',
        'id' => 'total_bayar',
        'type' => 'number',
        'readonly' => true,
        'value' => $transaksi->total_bayar,
        'class' => 'form-control'
    ];
?>

<section class="dashboard-top-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white top-chart-ear">
                    <div class="row">
                            <h1 class="text-center">Transaksi Nomor <?= $transaksi->id_transaksi ?></h1>
                        <section>
                            <div class="sm-chart-sec my-5">
                                <div class="container-fluid">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <?php $i = 1;?>
                                                <?php foreach ($item as $index => $shops) :?>
                                                <th scope="row"><?= $i++ ?></th>
                                                    <td><?= $shops->nama_kasir ?></td>
                                                    <td><?= $shops->nama_barang ?></td>
                                                    <td><?= $shops->qty ?></td>
                                                    <td><?= $shops->harga_item ?></td>
                                                    <td><?= $shops->total_item ?></td>
                                                </tr>
                                                <?php endforeach ?>

                                                <tr>
                                                    <td colspan="5">Total Bayar</td>
                                                    <td colspan="2"><?= $total[0]->jumlah ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mt-3">
                                            <?= form_label("Total Pembayaran", "total_ppn") ?>
                                            <?= form_input($total_ppn) ?>
                                        </div>
                                        <div class="col-sm-4 mt-3">
                                            <?= form_label("Pembayaran", "total_bayar") ?>
                                            <?= form_input($total_bayar) ?>
                                        </div>
                                        <div class="col-sm-4 mt-3">
                                            <?= form_label("Kembalian", "kembalian") ?>
                                            <?= form_input($kembalian) ?>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3 mt-3">
                                            <a href="<?= site_url('Admin/Transaksi_Admin/pdf/' . $transaksi->id_transaksi) ?>" class="status-tb-btn bg-cla">View PDF</a>
                                        </div>
                                        <div class="col-sm-3"></div>
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
      