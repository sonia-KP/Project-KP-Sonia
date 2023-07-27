<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Tipe Database</h1>
    </div>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/TipeDatabase/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">Nama tipe Database</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;

        foreach ($tipedatabase as $j) : ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $j->nama_tipe_database ?></td>

                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/TipeDatabase/updateData/' . $j->id_tipe_database) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/TipeDatabase/deleteData/' . $j->id_tipe_database) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>