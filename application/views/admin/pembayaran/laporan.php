<!DOCTYPE html>
<html lang="en" style="height:89vh;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irfan SPP - Laporan Spp</title>
</head>
<style>
    *{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    h1, h2, h3, h4, h5, h6{
        font-weight: 500 !important;
    }
    th, td{
        font-size: large;
    }
    a{
        text-decoration: none !important;
    }
    body{
        display: flex;
        flex-direction: column;
        min-height:98vh;
    }
    .main{
        flex: 1;
    }
    .container{
        
    }
    .d-flex{
        display: flex;
    }
    .flex-column{
        flex-direction: column;
    }
    .h-100{
        height: 100%;
    }
    .my-auto{
        margin-top: auto;
        margin-bottom: auto;
    }
    .justify-content-between{
        justify-content:space-between;
    }
    .table{
        width: 100%;
        display: table;
        border-style: solid;
        border-collapse:collapse;
        border-width: 1px;
    }
    .table *{
        font-size: small !important;
        padding: 2px 2px;
        border-style: solid;
        border-width: 1px;
    }
    .table th{
        border-width: 1px;
        background-color: rgb(108, 117, 125);
        color: white;
        border-color: black;
    }
    .text-muted{
        color: rgba(33, 37, 41, 0.75);
    }
</style>
<body class="h-100">
    <div class="container d-flex flex-column h-100">
        <div>
            <div class='d-flex justify-content-between'>
                <h2>Laporan Spp</h2>
                <h4 class="my-auto">2020-2022</h4>
            </div>
            <br>
        </div>
        <div class="main">
            <table class="table table-bordered table-striped border-dark">
                <thead class='bg-secondary text-white'>
                    <th>Id</th>
                    <th>Petugas</th>
                    <th>Siswa</th>
                    <th>Tanggal Bayar</th>
                    <th>Bulan Dibayar</th>
                    <th>Tahun Dibayar</th>
                    <th>SPP</th>
                    <th>Jumlah Bayar</th>
                </thead>
                <tbody>
                    <?php foreach($histories as $history) : ?>
                        <tr>
                            <td><?= $history->id_pembayaran ?></td>
                            <td><?= $history->id_petugas . ' - ' . $history->nama_petugas ?></td>
                            <td><?= $history->nisn . ' - ' . $history->nama ?></td>
                            <td><?= $history->tgl_bayar ?></td>
                            <td><?= $history->bulan_dibayar ?></td>
                            <td><?= round($history->bulan_dibayar / 12) ?></td>
                            <td><?= $history->id_spp . ' Rp' . number_format($history->nominal) ?></td>
                            <td><?= 'Rp' .  number_format($history->jumlah_bayar) ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between text-muted">
            <h4>Irfan Spp</h4>
            <h4>Copyright &copy; Irfan Spp 2023</h4>
        </div>
    </div>
</body>
</html>