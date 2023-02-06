<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Siswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= site_url('admin/siswa') ?>">Siswa</a></li>
        <li class="breadcrumb-item active">Tambah Siswa</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                Tambah Siswa
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/siswa/insert') ?>" method="post">
                    <div class="row row-cols-2">
                        <label for="nisn">Nisn</label>
                        <div>
                            <input type="text" class="form-control" id="nisn" name="nisn" required>
                        </div>

                        <label for="nis">Nis</label>
                        <div>
                            <input type="text" class="form-control" id="nis" name="nis" required>
                        </div>

                        <label for="nama">Nama</label>
                        <div>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <label for="kelas">Kelas</label>
                        <div>
                            <select name="kelas" id="kelas" class="form-control">
                                <?php foreach($classes as $class) : ?>
                                    <option value="<?= $class->id_kelas ?>"><?= $class->nama_kelas ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <label for="alamat">Alamat</label>
                        <div>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <label for="no_telp">No Telp</label>
                        <div>
                            <input type="number" class="form-control" id="no_telp" name="no_telp" required>
                        </div>

                        <label for="spp">Spp</label>
                        <div>
                            <select name="spp" id="spp" class="form-control">
                                <?php foreach($spps as $spp) : ?>
                                    <option value="<?= $spp->id_spp ?>"><?= $spp->id_spp ?></option>
                                <?php endforeach ?>
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