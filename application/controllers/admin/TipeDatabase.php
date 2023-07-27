<?php

class TipeDatabase extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tipe Database";
        $data['tipedatabase'] = $this->penggajianModel->get_data('tb_tipe_database')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_database/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Tipe Database";
        $data['tipedatabase'] = $this->penggajianModel->get_data('tb_tipe_database')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_database/tambahTipeDatabase', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nama_tipe_database = $this->input->post('nama_tipe_database');
            // $nama_versi = $this->input->post('nama_versi');

            $data = array(
                'nama_tipe_database' => $nama_tipe_database,
                // 'nama_versi' => $nama_versi,


            );


            $this->penggajianModel->insert_data($data, 'tb_tipe_database');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/TipeDatabase');
        }
    }

    public function updateData($id)
    {
        $where = array('id_tipe_database' => $id);
        $data['tipedatabase'] = $this->db->query("SELECT * FROM tb_tipe_database WHERE id_tipe_database='$id'")->result();
        $data['title'] = "Form Tambah List";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_database/updateDatabase', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id_tipe_database     = $this->input->post('id_tipe_database');
            // $id_tipe_server = $this->input->post('id_tipe_server');

            $data = array(
                'nama_tipe_database'     => $nama_tipe_database,

            );

            $where = array(
                'id_tipe_database' => $id_tipe_database
                // 'id_tipe_server' => $id_tipe_server
            );

            $this->penggajianModel->update_data('tb_tipe_database', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/TipeDatabase');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama_tipe_database', 'Nama Tipe Database', 'required');
        // $this->form_validation->set_rules('nama_versi', 'versi', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_tipe_database' => $id);
        $this->penggajianModel->delete_data($where, 'tb_tipe_database');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/TipeDatabase');
    }
}
