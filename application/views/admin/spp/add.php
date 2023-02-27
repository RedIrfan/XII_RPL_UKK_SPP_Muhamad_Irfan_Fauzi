<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Spp</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= site_url('admin/spp') ?>">Spp</a></li>
        <li class="breadcrumb-item active">Tambah Spp</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                Tambah Spp
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/spp/insert') ?>" method="post">
                    <div class="row row-cols-2">
                        <label for="bulan">Bulan</label>
                        <div>
                            <input type="number" class="form-control" id="bulan" name="bulan" required>
                        </div>

                        <label for="nominal">Nominal</label>
                        <div>
                            <input type="number" class="form-control" id="nominal" name="nominal" required>
                        </div>

                        <div></div>
                        <div>
                            <button class="btn btn-primary w-100">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>