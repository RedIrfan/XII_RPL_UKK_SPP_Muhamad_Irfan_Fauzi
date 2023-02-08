<div class="container-fluid px-4 main">
    <div class="card border-0 mb-4 shadow-sm">
        <div class="p-2">
            <div class="card-header border-0 h4">
                <h4 class="text-center mb-4">Cek SPP</h4>
            </div>
            <div class="card-body">
                <form action="<?= site_url('to_spp') ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nisn">
                        <button class="btn btn-primary px-5">Cek</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>