
        <!-- Awal dari sidebar -->
        <div class="left-menu">
            <div class="menubar-content">
                <nav class="animated bounceInDown">
                    <ul id="sidebar">
                        <li class="<?= $title == 'dashboard' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/') ?>"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="<?= $title == 'profile' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/profile') ?>"><i class="fas fa-list"></i>Profile</a>
                        </li>
                        <li class="<?= $title == 'barang' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/goods') ?>"><i class="fas fa-chart-bar"></i>Barang</a>
                        </li>
                        <li class="<?= $title == 'harga' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/prizes') ?>"><i class="fas fa-table"></i>Harga</a>
                        </li>
                        <li class="<?= $title == 'stok' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/stocks') ?>"><i class="fas fa-bell"></i>Stok</a>
                        </li>
                        <li class="<?= $title == 'kategori' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/categories') ?>"><i class="fas fa-bell"></i>Kategori</a>
                        </li>
                        <li class="<?= $title == 'transaksi' ? 'active' : ''?>">
                            <a href="<?= base_url('admin/transactions/home') ?>"><i class="fas fa-icons"></i>Transaksi</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/logout') ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Akhir dari sidebar -->