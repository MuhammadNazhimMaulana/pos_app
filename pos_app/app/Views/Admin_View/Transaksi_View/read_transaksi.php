<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>

<section class="dashboard-top-sec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-white top-chart-ear">
                                <div class="row">
                                    <div class="col-sm-12 my-2 pe-0">
                                        <div class="last-month kategori">
                                            <h5>Transaksi</h5>
                                            <p>Overview</p>

                                            <a href="<?= site_url('Admin/Transaksi_Admin/home') ?>" class="di-btn purple-gradient mt-5">Home</a>                                 
                                            </div>

                                            <!-- Awal Tabel -->
                                            <div class="data-table-section table-responsive tbl-kategori">
                                                <table id="tabel-pesanan" class="table table-striped" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Kasir</th>
                                                            <th>Tanggal Transaksi</th>
                                                            <th>Total Transaksi</th>
                                                            <th>Total Bayar</th>
                                                            <th>Kembalian</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="order-view-tb">
                                                    <?php $i = 1;?>
                                                    <?php foreach ($data_transaksi as $index => $transactions) :?>
                                                        <tr>
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $transactions->nama_kasir ?></td>
                                                            <td><?= $transactions->tanggal_transaksi ?></td>
                                                            <td><?= $transactions->total_ppn ?></td>
                                                            <td><?= $transactions->total_bayar ?></td>
                                                            <td><?= $transactions->kembalian ?></td>
                                                            <td class="col-md-3">
                                                                <a href="<?= site_url('Admin/Transaksi_Admin/view/' . $transactions->id_transaksi) ?>" class="status-tb-btn bg-cla">View</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Akhir Tabel -->

                                    </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
<?= $this->endSection() ?>
