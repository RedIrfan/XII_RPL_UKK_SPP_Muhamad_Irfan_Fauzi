<style>
    body{
        background-color: rgb(230, 240, 250) !important;
    }
    .bg-navbar{
        background-color: #03a9f4;
    }
    .sidenav{
        background-color: white;
    }
</style>
<link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="navbar navbar-expand-lg bg-navbar navbar-dark text-white">
    <div class='container-fluid justify-content-start py-2 '>
        <a class="navbar-brand col-2 me-0 ps-3" href="<?= site_url('admin') ?>">Irfan SPP</a>    
        <a class="nav-link pe-3" id="offcanvas" href="#collapse-content" data-bs-toggle="collapse" aria-controls="collapse-content"><i class="fas fa-bars"></i></a>
        <div class='dropdown'>
            <a class="nav-link dropdown-toggle" id="dropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdown">
                <li><a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="mx-0 d-flex ">
    <div class="col-2 px-2 collapse show sidenav border-end border-2 h-100" id="collapse-content">
        <div class="container">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <h6 class="pt-4 fw-bolder">CORE</h6>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">Dashboard</a>
                    <h6 class="pt-4 fw-bolder">CRUD</h6>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">Kelas</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">Petugas</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">SPP</a>
                    <h6 class="pt-4 fw-bolder">LAPORAN</h6>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">Transaksi Pembayaran</a>
                    <a class="ps-2 d-block pt-2 link-secondary" href="<?= site_url('admin') ?>">History</a>
                </li>
                <div class="fixed-bottom">

                </div>
            </ul>
        </div>
    </div>
    <div class='col'>
        