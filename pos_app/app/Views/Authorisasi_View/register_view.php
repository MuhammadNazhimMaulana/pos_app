<?= $this->extend('Template/Source/auth_looks') ?>
<?= $this->section('content_auth') ?>

   <!-- Awal Login -->
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                    <p class="text-center  mb-4">POS Bonevian</p>
                    <img src="<?= base_url('img/Bonevian.png') ?>" class="w-25" />
                </div>
                <form action="#">
                    <div class="mb-4">
                        <label for="nama_lengkapa" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkapa" id="nama_lengkapa" aria-describedby="user-help">
                    </div>
                    <div class="mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="user-help">
                        <div id="user-help" class="form-text">Username Tidak akan disebar</div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="password-help">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="ingat">
                        <label for="ingat" class="form-check-label">Remember Me</label>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger w-50">Login</button>
                    </div>
                </form>
                <p class="mb-0 text-center">Belum Register? <a href="#" class="text-decoration-none">Daftar Disini</a></p>
            </div>
        </div>
    </div>
    <!-- Akhir Login -->

    <?= $this->endSection() ?>
