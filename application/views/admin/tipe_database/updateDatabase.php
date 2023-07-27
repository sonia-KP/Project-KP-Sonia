<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <?php foreach ($tipedatabase as $j) : ?>
                <form method="POST" action="<?php echo base_url('admin/TipeOS/updateDataAksi') ?>">

                    <div class="form-group">
                        <label>Nama Tipe Database</label>
                        <input type="hidden" name="id_tipe_database" class="form-control" value="<?php echo $j->id_tipe_database ?>">
                        <input type="text" name="nama_tipe_database" class="form-control" value="<?php echo $j->nama_tipe_database ?>">

                        <?php echo form_error('nama_tipe_database', ' <div class="text-small text-danger></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            <?php endforeach; ?>

        </div>
    </div>



</div>