<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">From Tambah Aplikasi</h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/tbtipeos/tambahDataAksi') ?>">

                <div class="form-group">
                    <label>Nama Tipe</label>
                    <input type="text" name="nama_tipe_OS" class="form-control">

                    <?php echo form_error('nama_tipe_server', ' <div class="text-small text-danger></div>') ?>
                </div>


        </div>


        <button type="submit" class="btn btn-success">Submit</button>

        </form>

    </div>
</div>



</div>