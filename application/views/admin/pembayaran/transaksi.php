<div class="container-fluid px-4">
    <h1 class="mt-4">Transaksi Pembayaran</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Transaksi Pembayaran</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4 row row-cols-2 justify-content-between ">
                <div class="col">
                    Form Transaksi
                </div>
                <div class="d-flex h6 align-items-center">
                    <label for="tanggal" class="text-muted me-2 d-block ms-auto">Tanggal</label>
                    <div class="overflow-auto">
                        <input type="date" name="tanggal" id="tanggal" class="form-control" disabled value="<?= date('Y-m-d') ?>">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/transaksi/insert') ?>" method="post">
                    <div class="row row-cols-2">
                        <label for="siswa">Siswa</label>
                        <div>
                            <select name="siswa" id="siswa" class="form-select">
                                <?php foreach($students as $student) : ?>
                                    <option value="<?= $student->nisn ?>"><?= $student->nisn . ' - ' . $student->nama ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <label for="bulan">Bulan Dibayar</label>
                        <div>
                            <input type="text" name="bulan" id="bulan" class="form-control">
                        </div>

                        <label for="tahun">Tahun Dibayar</label>
                        <div>
                            <input type="text" name="tahun" id="tahun" class="form-control">
                        </div>

                        <label for="jumlah">Jumlah Bayar</label>
                        <div>
                            <input type="number" name="jumlah" id="jumlah" class="form-control">
                        </div>

                        <div></div>
                        <div>
                            <button class="btn btn-primary w-100">Transaksi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>