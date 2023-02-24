<div class="container px-4">
    <h1 class="mt-4">Petugas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Petugas</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                List Petugas
            </div>
            <div class="card-body">
                <a href="<?= site_url('admin/petugas/add') ?>" class="btn btn-primary d-block w-100 mb-2">Tambah Petugas Baru</a>
                <table id="datatable" class="table table-striped w-100">
                    <thead>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Petugas</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php if (count($workers) > 0) : ?>
                            <?php foreach($workers as $worker) : ?>
                                <tr>
                                    <td><?= $worker->id_petugas ?></td>
                                    <td><?= $worker->username ?></td>
                                    <td><?= $worker->password ?></td>
                                    <td><?= $worker->nama_petugas ?></td>
                                    <td><?= $worker->level ?></td>
                                    <td>
                                        <a href="<?= site_url('admin/petugas/edit/' . $worker->id_petugas) ?>" class="btn btn-success" >Edit</a>
                                        <a href="<?= site_url('admin/petugas/delete/' . $worker->id_petugas) ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <td colspan="6">Data tidak ditemukan.</td>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>