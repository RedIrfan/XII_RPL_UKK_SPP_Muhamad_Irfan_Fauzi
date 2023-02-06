<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Petugas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= site_url('admin/petugas') ?>">Petugas</a></li>
        <li class="breadcrumb-item active">Tambah Petugas</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                Tambah Petugas
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/petugas/insert') ?>" method="post">
                    <div class="row row-cols-2">
                        <label for="username">Username</label>
                        <div>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <label for="password">Password</label>
                        <div>
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>

                        <label for="nama">Nama Petugas</label>
                        <div>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <label for="level">Level</label>
                        <div>
                            <select name="level" id="level" class="form-control">
                                <option value="admin">Administrator</option>
                                <option value="petugas">Petugas</option>
                            </select>
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