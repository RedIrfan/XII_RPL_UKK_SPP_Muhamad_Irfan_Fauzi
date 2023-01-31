<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Petugas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= site_url('admin/petugas') ?>">Petugas</a></li>
        <li class="breadcrumb-item active">Edit Petugas</li>
    </ol>
    <div class="card mb-4">
        <div class='card-header'>
            <h6>Edit Petugas</h6>
        </div>
        <div class="card-body">
            <form action="<?= site_url('admin/petugas/update/' . $worker->id_petugas) ?>" method="post">
                <div class="row row-cols-2">
                    <label for="username">Username</label>
                    <div>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $worker->username ?>" required>
                    </div>

                    <label for="password">Password</label>
                    <div>
                        <input type="text" class="form-control" id="password" name="password" value="<?= $worker->password ?>" required>
                    </div>

                    <label for="nama">Nama Petugas</label>
                    <div>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $worker->nama_petugas ?>" required>
                    </div>

                    <label for="level">Level</label>
                    <div>
                        <select name="level" id="level" class="form-control">
                            <?php if ($worker->level == "admin") : ?>
                                <option value="petugas">Petugas</option>
                                <option value="admin" selected>Administrator</option>
                            <?php elseif ($worker->level == "petugas") : ?>
                                <option value="petugas" selected>Petugas</option>
                                <option value="admin">Administrator</option>
                            <?php else : ?>
                                <option value="admin">Administrator</option>
                                <option value="petugas">Petugas</option>
                            <?php endif ?>
                        </select>
                    </div>

                    <div></div>
                    <div>
                        <button class="btn btn-primary w-100">Update</button>
                    </div>
                </div>
            </form>
        </div>
