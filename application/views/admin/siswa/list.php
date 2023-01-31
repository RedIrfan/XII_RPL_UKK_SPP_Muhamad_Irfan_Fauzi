<div class="container-fluid px-4">
    <h1 class="mt-4">Siswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Siswa</li>
    </ol>
    <div class="card mb-4">
        <div class='card-header'>
            <h6>List Siswa</h6>
        </div>
        <div class="card-body">
            <a href="<?= site_url('admin/siswa/add') ?>" class="btn btn-primary d-block w-100">Tambah Siswa Baru</a>
            <table id="datatable" class="table"|>
                <thead>
                    <th>Nisn</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Spp</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php if (count($students) > 0) : ?>
                        <?php foreach($students as $student) : ?>
                            <tr>
                                <td><?= $student->nisn ?></td>
                                <td><?= $student->nis ?></td>
                                <td><?= $student->nama ?></td>
                                <td><?= $student->nama_kelas ?></td>
                                <td><?= $student->alamat ?></td>
                                <td><?= $student->no_telp ?></td>
                                <td><?= $student->id_spp ?></td>
                                <td>
                                    <a href="<?= site_url('admin/siswa/edit/' . $student->nisn) ?>" class="btn btn-success" >Edit</a>
                                    <a href="<?= site_url('admin/siswa/delete/' . $student->nisn) ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <td colspan="8">Data tidak ditemukan.</td>
                    <?php endif ?>
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