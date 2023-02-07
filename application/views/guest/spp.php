<div class="container-fluid px-4">
    <div class="row row-cols-md-2 row-cols-sm-1 gx-4">
        <div>
            <div class="card border-0 mb-4 shadow-sm">
                <div class="p-2">
                    <div class="card-header border-0 h4">
                        <h4 class="text-center mb-4">Data Siswa</h4>
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-striped">
                            <thead>
                                <th>Nisn</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                            </thead>
                            <tbody>
                                <td><?= $student->nisn ?></td>
                                <td><?= $student->nis ?></td>
                                <td><?= $student->nama ?></td>
                                <td><?= $student->nama_kelas ?></td>
                                <td><?= $student->alamat ?></td>
                                <td><?= $student->no_telp ?></td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card border-0 mb-4 shadow-sm">
                <div class="p-2">
                    <div class="card-header border-0 h4">
                        <h4 class="text-center mb-4">Data SPP</h4>
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Tahun</th>
                                <th>Nominal</th>
                            </thead>
                            <tbody>
                                <td><?= $spp->id_spp ?></td>
                                <td><?= $spp->tahun ?></td>
                                <td><?= $spp->nominal ?></td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                <h4 class="text-center mb-4">History Pembayaran</h4>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped w-100">
                    <thead>
                        <th>Id Pembayaran</th>
                        <th>Nama Petugas</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Bulan Dibayar</th>
                        <th>Tahun Dibayar</th>
                        <th>Jumlah Bayar</th>
                    </thead>
                    <tbody>
                        <?php foreach($histories as $history) : ?>
                            <tr>
                                <td><?= $history->id_pembayaran ?></td>
                                <td><?= $history->nama_petugas ?></td>
                                <td><?= $history->tgl_bayar ?></td>
                                <td><?= $history->bulan_dibayar ?></td>
                                <td><?= $history->tahun_dibayar ?></td>
                                <td><?= $history->jumlah_bayar ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('js/scripts.js') ?>"></script>
<script src="<?= base_url('js/datatable.js') ?>"></script>