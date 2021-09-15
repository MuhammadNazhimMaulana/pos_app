<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel POS</title>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/datatables/jquery.dataTables.css')?>">    

    <!-- Link custom css -->
    <link rel="stylesheet" href="<?= base_url('css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/sass.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/layers.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/responsive.css')?>">

    <!-- Link CSS Chart -->
    <link rel="stylesheet" href="<?= base_url('css/chart/apexcharts.css')?>">
</head>
<body>

    <div class="main-wrapper">
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
                                <a href="" class="dropdown-item"><span class="fas fa-user"></span>Profile</a>
                                <a href="" class="dropdown-item"><span class="fas fa-inbox"></span>Kotak Masuk</a>
                                <a href="" class="dropdown-item"><span class="fas fa-lock-open"></span>Layar</a>
                                <a href="" class="dropdown-item"><span class="fas fa-outdent"></span>Log Out</a>
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


        <!-- Awal dari sidebar -->
        <div class="left-menu">
            <div class="menubar-content">
                <nav class="animated bounceInDown">
                    <ul id="sidebar">
                        <li class="active">
                            <a href="#"><i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-box-open"></i>Widgets</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-uikit"></i>UI Elements</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-chart-bar"></i>Advance UI</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-telegram-plane"></i>Form Elements</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-edit"></i>Editors</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-search"></i>Popups</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-bell"></i>Notifications</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-icons"></i>Icons</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-sad-cry"></i>Error Pages</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pagelines"></i>General Pages</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-opencart"></i>E-Commerce</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-envelope"></i>E-mail</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-calendar-alt"></i>Calender</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-check-circle"></i>Todo List</a>
                        </li>
                        <!-- Awal Bagian Sub-menu -->
                        <li class="sub-menu">
                            <a href="#"><i class="fas fa-cogs"></i>Settings
                                <div class="fa fa-caret-down right"></div>
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href=""><i class="fa fa-user-circle"></i>Akun</a></li>
                                <li><a href=""><i class="fa fa-id-card"></i>Profil</a></li>
                                <li><a href=""><i class="fa fa-fingerprint"></i>Keamanan &amp; Privasi</a></li>
                                <li><a href=""><i class="fa fa-key"></i>Password</a></li>
                                <li><a href=""><i class="fa fa-bell"></i>Notifikasi</a></li>
                            </ul>
                        </li>
                        <!-- Akhir Bagian Sub-menu -->
                        <li>
                            <a href="#"><i class="fab fa-envira"></i>Gallery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-book"></i>Documentation</a>
                        </li>


                        <li>
                            <a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Akhir dari sidebar -->

        <div class="content-wrapper">
            <section class="dashboard-top-sec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="bg-white top-chart-ear">
                                <div class="row">
                                    <div class="col-sm-4 my-2 pe-0">
                                        <div class="last-month">
                                            <h5>Dashboard</h5>
                                            <p>Overviewnya</p>

                                            <div class="earn">
                                                <h3>221.000,00</h3>
                                                <p>Bulan Ini</p>
                                            </div>
                                            <div class="sale mb-3">
                                                <h2>95</h2>
                                                <p>Bulan ini</p>
                                            </div>

                                            <a href="#" class="di-btn purple-gradient">Bulan Lalu</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-8 my-2 ps-0">
                                        <div class="classic-tabs">
                                            <!-- Nav Tabs disini -->
                                            <div class="tabs-wrapper">
                                                <ul class="nav nav-pills chart-header-tab mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                      <a href="#" class="nav-link chart-nav active" id="pills-minggu-tab" data-bs-toggle="pill" data-bs-target="#pills-minggu" type="button" role="tab" aria-controls="pills-minggu" aria-selected="true">Minggu</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a href="#" class="nav-link chart-nav" id="pills-bulan-tab" data-bs-toggle="pill" data-bs-target="#pills-bulan" type="button" role="tab" aria-controls="pills-bulan" aria-selected="false">Bulan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a href="#" class="nav-link chart-nav" id="pills-tahun-tab" data-bs-toggle="pill" data-bs-target="#pills-tahun" type="button" role="tab" aria-controls="pills-tahun" aria-selected="false">Tahun</a>
                                                    </li>
                                                  </ul>
                                                  <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-minggu" role="tabpanel" aria-labelledby="pills-minggu-tab">
                                                        <div class="widget-content">
                                                            <div id="mingguan"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-bulan" role="tabpanel" aria-labelledby="pills-bulan-tab">
                                                        <div class="widget-content">
                                                            <div id="bulanan"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-tahun" role="tabpanel" aria-labelledby="pills-tahun-tab">
                                                        <div class="widget-content">
                                                            <div id="tahunan"></div>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Awal Smal Boxes -->
                                <div class="wre-sec">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                            <div class="earn-view">
                                                <span class="fas fa-crown earn-icon wallet"></span>
            
                                                    <div class="earn-view-text">
                                                        <p class="name-text">
                                                            Balance
                                                        </p>
                                                        <h6 class="balance-text">
                                                            Rp 123,00
                                                        </h6>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                            <div class="earn-view">
                                                <span class="fas fa-heart earn-icon referral"></span>
            
                                                    <div class="earn-view-text">
                                                        <p class="name-text">
                                                            Referral 
                                                        </p>
                                                        <h6 class="balance-text">
                                                            Rp 103,00
                                                        </h6>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                            <div class="earn-view">
                                                <span class="fab fa-salesforce earn-icon sales"></span>
            
                                                    <div class="earn-view-text">
                                                        <p class="name-text">
                                                            Estimasi
                                                        </p>
                                                        <h6 class="balance-text">
                                                            Rp 1.000,00
                                                        </h6>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                            <div class="earn-view">
                                                <span class="fas fa-chart-line earn-icon earning"></span>
            
                                                    <div class="earn-view-text">
                                                        <p class="name-text">
                                                            Pendapatan
                                                        </p>
                                                        <h6 class="balance-text">
                                                            Rp 1.000.,00
                                                        </h6>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <!-- Akhir Small Boxes -->

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="bg-white top-chart-ear">
                                <div class="traffic-title">
                                    <p>Traffic</p>
                                </div>
                                <div class="traffic">
                                    <div id="chart-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="sm-chart-sec my-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="revinue revinue-one-hibrid">
                                    <div class="revinue-hedding">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <span class="fas fa-users"></span>
                                            </div>
                                            <div class="sm-chart-text">
                                                <p class="w-value">31.9</p>
                                                <h5>Pengikut</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="revinue-content">
                                        <div id="hybrid-followers"></div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="revinue page-one-hibrid">
                                    <div class="revinue-hedding">
                                        <div class="w-title">
                                            <div class="sm-chart-text">
                                                <p class="w-value">12345</p>
                                                <h5>View Page</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="revinue-content">
                                        <div id="pengunjung-web"></div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="revinue bounce-one-hibrid">
                                    <div class="revinue-hedding">
                                        <div class="w-title">
                                            <div class="sm-chart-text">
                                                <p class="w-value">Rp 432</p>
                                                <h5>Rating</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="revinue-content">
                                        <div id="rate"></div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="revinue rv-status-one-hibrid">
                                    <div class="revinue-hedding">
                                        <div class="w-title">
                                            <div class="sm-chart-text">
                                                <p class="w-value">Rp 2.000 <small>Jan 01 - Jan 10</small></p>
                                                <h5>Status</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="revinue-content">
                                        <div id="status"></div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <!-- Awal Tabel Status Admin -->
            <section>
                <div class="all-admin my-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="admin-list">
                                    <p class="admin-ac-title">Seluruh Admin</p>
                                    <ul class="admin-ul">
                                        <li class="admin-li">
                                            <img class="gambar-admin" src="Assets/img/user-1.png">
                                            <div class="admin-ac-details">
                                                <div>
                                                    <a href="#" class="admin-name">Anto</a>
                                                    <p class="activity-text">Aktif Sekarang</p>
                                                </div>
                                                <div class="status bg-success"></div>
                                                
                                            </div>
                                        </li>

                                        <li class="admin-li">
                                            <img class="gambar-admin" src="Assets/img/user-2.png">
                                            <div class="admin-ac-details">
                                                <div>
                                                    <a href="#" class="admin-name">Nino</a>
                                                    <p class="activity-text">Aktif 15 Menit Yang lalu</p>
                                                </div>
                                                <div class="status bg-primary"></div>

                                            </div>
                                        </li>

                                        <li class="admin-li">
                                            <img class="gambar-admin" src="Assets/img/user-3.png">
                                            <div class="admin-ac-details">
                                                <div>
                                                    <a href="#" class="admin-name">Nono</a>
                                                    <p class="activity-text">Aktif 1 Bulan Lalu</p>
                                                </div>
                                                <div class="status bg-danger"></div>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-6">
                                <div class="order-list">
                                    <p class="order-ac-title">Status Pesanan</p>

                                    <!-- Awal Tabel -->
                                    <div class="data-table-section table-responsive">
                                        <table id="tabel-pesanan" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody class="order-view-tb">
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>
                                                        <a href="#" class="status-tb-btn bg-cla">Sukses</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>
                                                        <a href="#" class="status-tb-btn bg-clb">Terbuka</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>
                                                        <a href="#" class="status-tb-btn bg-clc">Ditahan</a>                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>
                                                        <a href="#" class="status-tb-btn bg-cld">Diperiksa</a>                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>
                                                        <a href="#" class="status-tb-btn bg-cla">Proses</a>                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Diablo</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>38</td>
                                                    <td>2008/11/28</td>
                                                    <td>
                                                        <a href="#" class="status-tb-btn bg-clb">Buka</a>                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Akhir Tabel -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Akhir Tabel Status Admin -->

        </div>


    </div>

    <!-- Link JS Bootsrap -->
    <script src="<?= base_url('js/bootstrap/bootstrap.bundle.min.js')?>"></script>

    <!-- Link JS -->
    <script src="<?= base_url('js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('js/datatables/jquery.dataTables.js')?>"></script>

    <!-- Link Custom JS -->
    <script src="<?= base_url('js/main.js')?>"></script>

    <!-- Link JS Chart -->
    <script src="<?= base_url('js/chart/apexcharts.min.js')?>"></script>
    <script src="<?= base_url('js/chart/chart.js')?>"></script>
    
</body>
</html>