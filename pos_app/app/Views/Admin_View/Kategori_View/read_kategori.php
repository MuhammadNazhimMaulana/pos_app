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
                                            <h5>Kategori</h5>
                                            <p>Overview</p>

                                            <a href="<?= base_url('admin/categories/create') ?>" class="di-btn purple-gradient mt-5">Tambah Data</a>                                 
                                            </div>

                                            <!-- Awal Tabel -->
                                            <div class="data-table-section table-responsive tbl-kategori">
                                                <table id="tabel-pesanan" class="table table-striped" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Kategori</th>
                                                            <th>Gambar</th>
                                                            <th>Keterangan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="order-view-tb">
                                                    <?php $i = 1;?>
                                                    <?php foreach ($data_kategori as $index => $kategories) :?>
                                                        <tr>
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $kategories->nama_kategori ?></td>
                                                            <td><img src="<?= base_url ('upload/Foto Kategori/' . $kategories->foto_kategori)?>" width="100"></td>
                                                            <td><?= $kategories->keterangan ?></td>
                                                            <td class="col-md-3">
                                                                <a href="<?= base_url('admin/categories/view/' . $kategories->id_kategori) ?>" class="status-tb-btn bg-cla">View</a>
                                                                <a href="<?= base_url('admin/categories/update/' . $kategories->id_kategori) ?>" class="status-tb-btn bg-cla">Update</a>
                                                                <a href="#modalDelete<?= $kategories->id_kategori ?>" data-bs-toggle="modal" onclick="" class="status-tb-btn bg-cla">Delete</a>
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
            
    <!-- Modal -->
        <?php foreach ($data_kategori as $index => $kategories) :?>
            <div class="modal fade" id="modalDelete<?= $kategories->id_kategori ?>" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Penghapusan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin akan menghapus data ini?</p>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-danger"><a href="<?= base_url('admin/categories/delete/' . $kategories->id_kategori) ?>">Delete</a></button>
                            </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
            
<?= $this->endSection() ?>
