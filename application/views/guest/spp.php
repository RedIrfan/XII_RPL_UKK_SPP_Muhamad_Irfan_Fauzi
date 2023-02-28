<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
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
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Nominal</th>
                            </thead>
                            <tbody>
                                <td><?= $spp->id_spp ?></td>
                                <td><?= $spp->bulan ?></td>
                                <td><?= round($spp->bulan / 12) ?></td>
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
                <div class="d-flex align-items-center mb-2">
                    <label for="minDate" class="me-2">Dari</label>
                    <select name="minDate" id="minDate" class="form-select">
                        <option value="0">yyyy-mm-dd</option>
                        <?php foreach($histories as $history) : ?>
                            <option value="<?= $history->tgl_bayar ?>"><?= $history->tgl_bayar ?></option>
                        <?php endforeach ?>
                    </select>
                    <label for="maxDate" class="mx-2">Ke</label>
                    <select name="maxDate" id="maxDate" class="form-select">
                        <option value="0">yyyy-mm-dd</option>
                        <?php foreach($histories as $history) : ?>
                            <option value="<?= $history->tgl_bayar ?>"><?= $history->tgl_bayar ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <table id="datatable" class="overflow-auto table table-striped w-100">
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
                                <td><?= round($history->bulan_dibayar / 12) ?></td>
                                <td>Rp<?= number_format($history->jumlah_bayar) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    jQuery(document).ready(function(){
        var datatable = initializeDatatable();
        
        $('#minDate, #maxDate').on('change', function(){
            datatable.draw();
        });

        $.fn.DataTable.ext.search.push(function (settings, data, dataIndex){
            var minDates = $('#minDate').val();
            var maxDates = $('#maxDate').val();
            var date = data[2] || 0;
            
            if ( minDates == '0' && maxDates == '0' ||
                minDates == '0' && date <= maxDates ||
                date >= minDates && maxDates == '0' ||
                date >= minDates && date <= maxDates
            ){
                return true;
            }
        
            return false;
        
        });
    });
    
    function datatableStart(){
        return false
    }

</script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('js/scripts.js') ?>"></script>
<script src="<?= base_url('js/datatable.js') ?>"></script>