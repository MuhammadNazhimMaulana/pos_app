        <!-- Navbar Awal-->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm expand-header">
                <div class="header-left d-flex">
                    <div class="logo">
                        Bonevian
                    </div>
                    <a href="#" id="toggleSidebar" class="sidebarCollapse" data-placement="bottom">
                        <span class="fas fa-bars"></span>
                    </a>
                </div>
                <ul class="navbar-item flex-row ml-auto">
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notif" data-bs-toggle="dropdown">
                            <img class="icon" src="<?= base_url('img/bell.svg')?>" alt="">
                            <p class="count purple-gradient">5</p>
                        </a>

                        <!-- Dropdown Awal-->
                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="" class="dropdown-item message-item">
                                    <img src="Assets/img/server.svg" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Server Reboot</p>
                                            <p class="note-time">20 menit yang lalu</p>
                                        </div>
                                        <p class="status-link"><span class="fas fa-times"></span></p>
                                    </div>
                                </a>

                                <a href="" class="dropdown-item message-item">
                                    <img src="Assets/img/server.svg" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Berhasil</p>
                                            <p class="note-time">20 menit yang lalu</p>
                                        </div>
                                        <p class="status-link"><span class="fas fa-times"></span></p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!-- Dropdown Akhir-->
                    </li>

                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notif" data-bs-toggle="dropdown">
                            <img class="icon" src="<?= base_url('img/envelope.svg')?>" alt="">
                            <p class="count bg-clc">5</p>
                        </a>

                        <!-- Dropdown Pesan Awal-->
                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="" class="dropdown-item message-item">
                                    <img src="Assets/img/pengguna.jpeg" class="sms-user">
                                    <div class="user-message-info">
                                        <p class="m-user-name">Halo Anda</p>
                                        <p class="user-role">Role</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Dropdown Pesan Akhir-->

                    </li>
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notif" data-bs-toggle="dropdown">
                            <img class="icon" src="<?= base_url('img/user.svg')?>" alt="">
                        </a>

                        <!-- Awal Dropdown -->
                        <div class="dropdown-menu">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="Assets/img/user.svg" class="img-fluid mr-2">
                                    <div class="media-body">
                                        <h5>Anto (Nama)</h5>
                                        <p>Admin (Role)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="dp-main-menu">
                                <a href="<?= site_url('Admin/Dashboard_Admin/profile') ?>" class="dropdown-item"><span class="fas fa-user"></span>Profile</a>
                                <a href="<?= site_url('Auth/Authorisasi/logout') ?>" class="dropdown-item"><span class="fas fa-outdent"></span>Log Out</a>
                            </div>

                        </div>

                        <!-- Akhir Dropdown -->

                    </li>

                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notif" data-bs-toggle="dropdown">
                            <img class="icon" src="Assets/img/settings.svg" alt="">
                        </a>

                        <!-- Awal Dropdown setting -->

                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="" class="dropdown-item"><span class="fas fa-plug"></span>Permission</a>
                                <a href="" class="dropdown-item"><span class="fas fa-users"></span>Admin</a>
                                <a href="" class="dropdown-item"><span class="fas fa-object-ungroup"></span>Tipe Desain</a>
                                <a href="" class="dropdown-item"><span class="fas fa-palette"></span>Warna</a>
                            </div>
                        </div>

                        <!-- Akhir Dropdown setting -->
                    </li>

                </ul>
            </header>
        </div>
        <!-- Navbar Akhir-->