<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">From Tambah Server</h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/tbServer/tambahDataAksi') ?>">

                <div class="form-group">
                    <label>Nama Server</label>
                    <input type="text" name="id_tipe_server" class="form-control">

                    <?php echo form_error('id_tipe_server', ' <div class="text-small text-danger></div>') ?>
                </div>
                <div class="form-group">
                    <label>ip</label>
                    <input type="number" name="ip" class="form-control">

                    <?php echo form_error('ip', ' <div class="text-small text-danger></div>') ?>
                </div>

                <div class="form-group">
                    <label for="id_tipe_database">Pilih Tipe</label>
                    <div class="form-group">
                        <select class="form-control" name="id_server">

                            <?php foreach ($tbserver as $j) : ?>
                                <option value="<?= $j->id_server ?>"><?= $j->id_server ?></option>

                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_server', ' <div class="text-small text-danger></div>') ?>
                    </div>


                    <div class="form-group">
                        <label for="id_tipe_database">Pilih OS</label>
                        <div class="form-group">
                            <select class="form-control" name="id_tipe_os">

                                <?php foreach ($tbserver as $j) : ?>
                                    <option value="<?= $j->id_tipe_os ?>"><?= $j->id_tipe_os ?></option>

                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('id_tipe_os', ' <div class="text-small text-danger></div>') ?>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>


            </form>

        </div>
    </div>



</div>