<div class="container px-4">
    <h1 class="mt-4">Siswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Siswa</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                List Siswa
            </div>
            <div class="card-body">
                <a href="<?= site_url('admin/siswa/add') ?>" class="btn btn-primary d-block w-100 mb-2">Tambah Siswa Baru</a>
                <table id="datatable" class="table table-striped w-100">
                    <thead>
                        <th class="nisn">Nisn</th>
                        <th class="nis">Nis</th>
                        <th class="nama">Nama</th>
                        <th class="kelas">Kelas</th>
                        <th class="alamat">Alamat</th>
                        <th class="no_telp no telp">No Telp</th>
                        <th class="spp">Spp</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    // function getDatatableParams(){
    //     return {
    //         "search" : {
    //             "nisn" : 0,
    //             "nis" : 1,
    //             "nama" : 2,
    //             "kelas" : 3, 
    //             "alamat" : 4,
    //             "no_telp" : 5,
    //             "no" : 6,
    //             "telp" : 7,
    //             "spp" : 8,
    //         }
    //     };
    // }
</script>