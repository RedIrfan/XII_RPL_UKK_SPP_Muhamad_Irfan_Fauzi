<div class="container-fluid px-4">
    <h1 class="mt-4">Kelas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kelas</li>
    </ol>
    <div class="card mb-4">
        <div class='card-header'>
            <h6>List kelas</h6>
        </div>
        <div class="card-body">
            <a href="<?= site_url('admin/kelas/add') ?>" class="btn btn-primary d-block w-100">Tambah Kelas Baru</a>
            <table id="datatable" class="table"|>
                <thead>
                    <th>Id</th>
                    <th>Nama Kelas</th>
                    <th>Kompetensi Keahlian</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php foreach($classes as $class) : ?>
                        <tr>
                            <td><?= $class->id_kelas ?></td>
                            <td><?= $class->nama_kelas ?></td>
                            <td><?= $class->kompetensi_keahlian ?></td>
                            <td>
                                <a href="<?= site_url('admin/kelas/edit/' . $class->id_kelas) ?>" class="btn btn-success" >Edit</a>
                                <a href="<?= site_url('admin/kelas/delete/' . $class->id_kelas) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const datatable = document.getElementById('datatable');
            if (datatable) {
                new simpleDatatables.DataTable(datatable);
            }
        });
    </script>
</div>