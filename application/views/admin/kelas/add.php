<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Kelas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= site_url('admin/kelas') ?>">Kelas</a></li>
        <li class="breadcrumb-item active">Tambah Kelas</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                Tambah Kelas
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/kelas/insert') ?>" method="post">
                    <div class="row row-cols-2">
                        <label for="nama">Nama Kelas</label>
                        <div>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <label for="kompetensi">Kompetensi Keahlian</label>
                        <div>
                            <input type="text" class="form-control" id="kompetensi" name="kompetensi" required>
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