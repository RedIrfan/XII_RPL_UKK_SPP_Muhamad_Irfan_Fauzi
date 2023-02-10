<style>
    body{
        background-color: rgb(230, 240, 250) !important;
    }
    .bg-navbar{
        background-color: #03a9f4;
    }
    .sidenav{
        background-color: white;
        transition: 0.1s !important;
    }
    .w-0{
        width: 0 !important;
    }
</style>
<link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="navbar bg-navbar navbar-dark text-white fixed-top">
    <div class='container-fluid justify-content-start py-2 d-flex justify-content-between justify-content-md-start'>
        <a class="navbar-brand me-0 ps-3" style="width:205px;" href="<?= site_url('admin') ?>">Irfan SPP</a>    
        <div class='d-flex'>
            <p id="tes"></p>
            <a class="nav-link pe-3 collapse-link" id="collapse-link" href="#collapse-content" data-bs-toggle="collapse" data-bs-target="#collapse-content" aria-controls="collapse-content" aria-expanded="false"><i class="fas fa-bars"></i></a>
            <div class='dropdown'>
                <a class="nav-link dropdown-toggle" id="dropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
                <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="collapse collapse-horizontal show sidenav border-end border-2 overflow-auto" id="collapse-content" style="position:fixed;">
        <div id="sidebar-container" class="container mb-auto" style="height:545px; width:205px; padding-bottom:56px;">
            <ul class="nav flex-column px-2 pt-3">
                <li class="nav-item">
                    <h6 class="pt-4 fw-bolder d-flex justify-content-between">
                        CORE
                        <button type="button" class="btn-close text-reset" style="visibility:hidden;" id="close-offcanvas" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </h6>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">Dashboard</a>
                    <h6 class="pt-4 fw-bolder">CRUD</h6>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin/kelas') ?>">Kelas</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin/petugas') ?>">Petugas</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin/siswa') ?>">Siswa</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin/spp') ?>">SPP</a>
                    <h6 class="pt-4 fw-bolder">LAPORAN</h6>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin/transaksi') ?>">Transaksi Pembayaran</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin/history') ?>">History</a>
                </li>
            </ul>
        </div>
        <div class="bg-primary p-2">
            <div class='container'>
                <h6>Sebagai:</h6>
                <h6><?= $_SESSION['username'] . ' (' . $_SESSION['level'] . ")"?></h6>
            </div>    
        </div>
    </div>
</div>
<div id="offcanvas-backdrop" class=""></div>
<div class="mx-0 d-flex h-100" style="margin-top:56px;">
    <div class="collapse collapse-horizontal show sidenav collapse-hidden" id="collapse-content" style="width:200px;">
        <div class="container mb-auto" style="height:81vh; width:200px;"></div>
    </div>
    <div class='w-100 h-100'>
    