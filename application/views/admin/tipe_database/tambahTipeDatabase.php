<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">From Tambah Database</h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/TipeDatabase/tambahDataAksi') ?>">

                <div class="form-group">
                    <label>Nama Tipe Database</label>
                    <input type="text" name="nama_tipe_database" class="form-control">

                    <?php echo form_error('nama_tipe_database', ' <div class="text-small text-danger></div>') ?>
                </div>


        </div>
    </div>




    <br> <button type="submit" class="btn btn-primary">Submit</button><br>

    </form>

</div>
</div>



</div>