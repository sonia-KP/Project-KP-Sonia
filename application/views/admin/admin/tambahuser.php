<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">From Tambah User</h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/admin/tambahDataAksi') ?>">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">

                    <?php echo form_error('id_tipe_server', ' <div class="text-small text-danger></div>') ?>
                </div>
                <div class="form-group">
                    <label>NPK</label>
                    <input type="text" name="NPK" class="form-control">

                    <?php echo form_error('NPK', ' <div class="text-small text-danger></div>') ?>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control">

                    <?php echo form_error('password', ' <div class="text-small text-danger></div>') ?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>


            </form>

        </div>
    </div>



</div>