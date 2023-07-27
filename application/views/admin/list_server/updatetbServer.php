<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Data</h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <?php foreach ($tbserver as $j) : ?>
                <form method="POST" action="<?php echo base_url('admin/tbServer/updateDataAksi') ?>">

                    <div class="form-group">
                        <label>Nama Server</label>
                        <input type="hidden" name="id_server" class="form-control" value="<?php echo $j->id_server ?>">
                        <input type="text" name="id_tipe_server" class="form-control" value="<?php echo $j->id_tipe_server ?>">

                        <?php echo form_error('id_tipe_server', ' <div class="text-small text-danger></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Server</label>
                        <input type="text" name="id_tipe_os" class="form-control" value="<?php echo $j->id_tipe_os ?>">

                        <?php echo form_error('id_tipe_os', ' <div class="text-small text-danger></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>IP</label>
                        <input type="text" name="ip" class="form-control" value="<?php echo $j->ip ?>">

                        <?php echo form_error('ip', ' <div class="text-small text-danger></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            <?php endforeach; ?>

        </div>
    </div>



</div>