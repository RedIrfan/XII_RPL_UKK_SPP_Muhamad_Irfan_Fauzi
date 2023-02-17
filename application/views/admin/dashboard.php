<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div>
            <div class="card border-0 mb-4 shadow-sm text-center">
                <div class="p-2">
                    <div class="card-header border-0 h4">
                        <i class="fa-solid fa-user me-2"></i>Petugas
                    </div>
                    <div class="card-body text-muted">
                        <div class='container'>
                            <?= count($workers) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card border-0 mb-4 shadow-sm text-center">
                <div class="p-2">
                    <div class="card-header border-0 h4">
                        <i class="fa-sharp fa-solid fa-graduation-cap me-2"></i>Siswa
                    </div>
                    <div class="card-body text-muted">
                        <div class='container'>
                            <?= count($students) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card border-0 mb-4 shadow-sm text-center">
                <div class="p-2">
                    <div class="card-header border-0 h4">
                        <i class="fa-solid fa-scroll me-2"></i>Spp
                    </div>
                    <div class="card-body text-muted">
                        <div class='container'>
                            <?= count($spps) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card border-0 mb-4 shadow-sm text-center">
                <div class="p-2">
                    <div class="card-header border-0 h4">
                        <i class="fa-solid fa-receipt me-2"></i>Pembayaran
                    </div>
                    <div class="card-body text-muted">
                        <div class='container'>
                            <?= count($histories) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>