<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
<div class="container px-4">
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
                <a href="<?= site_url('admin/laporan') ?>" class="btn btn-primary w-100 mb-2">Print Laporan</a>
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
                        <?php foreach($histories as $history) : ?>
                            <tr>
                                <td><?= $history->id_pembayaran ?></td>
                                <td><?= $history->nama_petugas ?></td>
                                <td><?= $history->nama ?></td>
                                <td><?= $history->tgl_bayar ?></td>
                                <td><?= $history->bulan_dibayar ?></td>
                                <td><?= round($history->bulan_dibayar / 12) ?></td>
                                <td><?= $history->id_spp ?></td>
                                <td>Rp<?= number_format($history->jumlah_bayar) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var datatable = initializeDatatable();
        
        $('#minDate, #maxDate').on('change', function(){
            datatable.draw();
        });

        $.fn.DataTable.ext.search.push(function (settings, data, dataIndex){
            var minDates = $('#minDate').val();
            var maxDates = $('#maxDate').val();
            var date = data[3] || 0;
            
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
<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>