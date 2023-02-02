<style>
    .bg-navbar{
        background-color: #343a41;
    }
</style>
<link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-navbar">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?= site_url('admin') ?>">Irfan SPP</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?= site_url('admin')  ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <?php if ($_SESSION["level"] == "admin") : ?>
                        <div class="sb-sidenav-menu-heading">CRUD</div>
                        <a class="nav-link" href="<?= site_url('admin/siswa') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Siswa
                        </a>
                        <a class="nav-link" href="<?= site_url('admin/petugas') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Petugas
                        </a>
                        <a class="nav-link" href="<?= site_url('admin/kelas') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Kelas
                        </a>
                        <a class="nav-link" href="<?= site_url('admin/spp') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            SPP
                        </a>
                    <?php endif ?>

                    <div class="sb-sidenav-menu-heading">Laporan</div>
                    <a class="nav-link" href="<?= site_url('admin/transaksi') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Transaksi Pembayaran
                    </a>
                    <a class="nav-link" href="<?= site_url('admin/history') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        History
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Sebagai:</div>
                <?= $_SESSION['username'] . " (" .  ucwords($_SESSION['level']) . ")" ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>