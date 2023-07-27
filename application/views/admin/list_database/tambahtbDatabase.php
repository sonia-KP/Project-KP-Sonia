<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">From Tambah Database</h1>

    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/tbDatabase/tambahDataAksi') ?>">

                <div class="form-group">
                    <label>Nama Database</label>
                    <input type="text" name="nama_database" class="form-control">

                    <?php echo form_error('nama_database', ' <div class="text-small text-danger></div>') ?>
                </div>
                <div class="form-group">
                    <label>versi</label>
                    <input type="number" name="versi" class="form-control">

                    <?php echo form_error('versi', ' <div class="text-small text-danger></div>') ?>
                </div>


                <div class="form-group">
                    <label for="id_tipe_database">tipe Database</label>
                    <div class="form-group">
                        <select class="form-control" name="id_tipe_database">

                            <!-- <?php foreach ($tbtipedatabase as $j) : ?> -->
                            <option value="<?= $j->id_tipe_database ?>"><?= $j->nama_tipe_database ?></option>

                        <?php endforeach;  ?>
                        </select>
                        <?php echo form_error('nama_tipe_database', ' <div class="text-small text-danger></div>') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="id_tipe_database">Pilih Server</label>
                    <div class="form-group">
                        <select class="form-control" name="id_server">

                            <?php foreach ($tbserver as $j) : ?>
                                <option value="<?= $j->id_server ?>"><?= $j->id_server ?></option>

                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_server', ' <div class="text-small text-danger></div>') ?>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="form-group">
                    <label>tipe</label>
                    <input type="text" name="id_server" class="form-control">

                    <?php echo form_error('id_server', ' <div class="text-small text-danger></div>') ?>
                </div> -->



                    <button type="submit" class="btn btn-primary">Submit</button>


            </form>

        </div>
    </div>



</div>