<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> List Database</h1>
    </div>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/tbDatabase/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Database</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">Nama Database</th>
            <th class="text-center">Versi</th>
            <th class="text-center">tipe Database</th>
            <th class="text-center">server</th>
            <th class="text-center">Detail</th>
            <th class="text-center">Action</th>

        </tr>

        <?php $no = 1;
        foreach ($tbdatabase as $j) : ?>


            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $j->nama_database ?></td>
                <td><?php echo $j->versi ?></td>
                <td><?php echo $j->nama_tipe_database ?></td>
                <td><?php echo $j->ip ?></td>
                <td class="text-center">
                    <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#editModal<?php echo $j->id_database ?>">
                        <i class="fas fa-info"></i>
                    </a>
                </td>

                <!-- Modal -->
                <div class="modal fade" id="editModal<?php echo $j->id_database ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi modal dengan form atau konten yang ingin diedit -->
                                <form action="<?php echo base_url('admin/tbDatabase/updateDataAksi') ?>" method="post">
                                    <div class="form-group">
                                        <label>Nama Database</label>
                                        <input type="hidden" name="id_database" class="form-control" value="<?php echo $j->id_database ?>" readonly>
                                        <input type="text" name="nama_database" class="form-control" value="<?php echo $j->nama_database ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Versi</label>
                                        <input type="number" name="versi" class="form-control" value="<?php echo $j->versi ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Tipe Database</label>
                                        <input type="text" name="id_tipe_database" class="form-control" value="<?php echo $j->nama_tipe_database ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilih Server</label>
                                        <input type="text" name="id_tipe_server" class="form-control" value="<?php echo $j->id_server ?>" readonly>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
<td>

    <center>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/tbDatabase/updateData/' . $j->id_database) ?>"><i class="fas fa-edit"></i></a>
        <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/tbDatabase/deleteData/' . $j->id_database) ?>"><i class="fas fa-trash"></i></a>
    </center>
    </tr>
<?php endforeach; ?>
</table>
</div>