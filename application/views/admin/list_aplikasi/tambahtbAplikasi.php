<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Tambah Aplikasi</h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/tbAplikasi/tambahDataAksi') ?>">
                <div class="form-group">
                    <label>Nama Aplikasi</label>
                    <input type="text" name="nama_aplikasi" class="form-control">
                    <?php echo form_error('nama_aplikasi', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>URL</label>
                    <input type="text" name="url" class="form-control">
                    <?php echo form_error('url', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>PIC</label>
                    <input type="text" name="PIC" class="form-control">
                    <?php echo form_error('PIC', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label for="id_server">Pilih Server</label>
                    <select class="form-control" name="id_server">
                        <?php foreach ($tbserver as $j) : ?>
                            <option value="<?= $j->id_server ?>"><?= $j->id_server ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('id_server', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label for="id_database">Pilih Database</label>
                    <select class="form-control" name="id_database">
                        <?php foreach ($tbdatabase as $j) : ?>
                            <option value="<?= $j->id_database ?>"><?= $j->nama_database ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('id_database', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>