<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <?php foreach ($users as $j) : ?>
                <form method="POST" action="<?php echo base_url('admin/Admin/updateDataAksi') ?>">

                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $j->id ?>">
                        <input type="text" name="name" class="form-control" value="<?php echo $j->name ?>">

                        <?php echo form_error('nama', ' <div class="text-small text-danger></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>NPK</label>
                        <input type="text" name="NPK" class="form-control" value="<?php echo $j->NPK ?>">

                        <?php echo form_error('NPK', ' <div class="text-small text-danger></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">

                        <?php echo form_error('password', ' <div class="text-small text-danger></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            <?php endforeach; ?>

        </div>
    </div>



</div>