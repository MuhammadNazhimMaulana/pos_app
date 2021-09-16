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

    <!-- Navbar -->
    <?= $this->include('Template/Source/Header/navbar_admin') ?>
    
    <!-- Sidebar -->
    <?= $this->include('Template/Source/Header/sidebar_admin') ?>

        <!-- Awal Main (Isi) -->
        <div class="content-wrapper">
            <?= $this->renderSection('content_admin') ?>
        </div>
        <!-- Akhir dari Main -->


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