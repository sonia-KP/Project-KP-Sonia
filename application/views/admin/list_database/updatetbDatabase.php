<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <?php foreach ($tbdatabase as $j) { ?>
                <form method="POST" action="<?php echo base_url('admin/tbDatabase/updateDataAksi') ?>">
                    <div class="form-group">
                        <label>Nama Database</label>
                        <input type="hidden" name="id_database" class="form-control" value="<?php echo $j->id_database ?>">
                        <input type="text" name="nama_database" class="form-control" value="<?php echo $j->nama_database ?>">
                        <?php echo form_error('nama_database', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Versi</label>
                        <input type="number" name="versi" class="form-control" value="<?php echo $j->versi ?>">
                        <?php echo form_error('versi', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="nama_tipe_database">Tipe Database</label>
                        <select class="form-control" name="id_tipe_database">
                            <?php foreach ($tbtipedatabase as $tipe) : ?>
                                <option value="<?= $tipe->id_tipe_database ?>" <?php if ($tipe->id_tipe_database == $j->id_tipe_database) echo 'selected' ?>>
                                    <?= $tipe->nama_tipe_database ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('nama_tipe_database', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="id_server">Pilih Server</label>
                        <select class="form-control" name="id_server">
                            <?php foreach ($tbserver as $server) : ?>
                                <option value="<?= $server->id_server ?>" <?php if ($server->id_server == $j->id_server) echo 'selected' ?>>
                                    <?= $server->id_server ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_server', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            <?php } ?>

        </div>
    </div>

</div>