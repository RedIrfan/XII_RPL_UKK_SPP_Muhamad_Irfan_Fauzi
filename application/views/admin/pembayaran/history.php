<div class="container-fluid px-4">
    <h1 class="mt-4">History Pembayaran</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">History Pembayaran</li>
    </ol>
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                List Pembayaran
            </div>
            <div class="card-body">
                <table id="datatable" class="table">
                    <thead>
                        <th>Id</th>
                        <th>Petugas</th>
                        <th>Siswa</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan Dibayar</th>
                        <th>Tahun Dibayar</th>
                        <th>Spp</th>
                        <th>Jumlah Bayar</th>
                    </thead>
                    <tbody>
                        <?php if(count($histories) > 0) : ?>
                            <?php foreach($histories as $history) : ?>
                                <tr>
                                    <td><?= $history->id_pembayaran ?></td>
                                    <td><?= $history->nama_petugas ?></td>
                                    <td><?= $history->nama ?></td>
                                    <td><?= $history->tgl_bayar ?></td>
                                    <td><?= $history->bulan_dibayar ?></td>
                                    <td><?= $history->tahun_dibayar ?></td>
                                    <td><?= $history->id_spp ?></td>
                                    <td><?= $history->jumlah_bayar ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <td colspan="8">Data tidak ditemukan.</td>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>