<div class="container-fluid px-4">
    <h1 class="mt-4">Spp</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Spp</li>
    </ol>
    <div class="card mb-4">
        <div class='card-header'>
            <h6>List Spp</h6>
        </div>
        <div class="card-body">
            <a href="<?= site_url('admin/spp/add') ?>" class="btn btn-primary d-block w-100 mb-2">Tambah Spp Baru</a>
            <table id="datatable" class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Tahun</th>
                    <th>Nominal</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php foreach($spps as $spp) : ?>
                        <tr>
                            <td><?= $spp->id_spp ?></td>
                            <td><?= $spp->tahun ?></td>
                            <td><?= $spp->nominal ?></td>
                            <td>
                                <a href="<?= site_url('admin/spp/edit/' . $spp->id_spp) ?>" class="btn btn-success" >Edit</a>
                                <a href="<?= site_url('admin/spp/delete/' . $spp->id_spp) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>