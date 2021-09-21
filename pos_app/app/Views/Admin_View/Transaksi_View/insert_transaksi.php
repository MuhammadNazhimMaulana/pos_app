<?= $this->extend('Template/Source/admin_looks') ?>
<?= $this->section('content_admin') ?>

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

                                            <!-- Ini awal Input -->
                                            <div class="col-sm-3">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>

                                            <!-- Ini Akhir input -->
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
