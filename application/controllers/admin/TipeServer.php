<?php

class TipeServer extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tipe Server";
        $data['tipeserver'] = $this->penggajianModel->get_data('tb_tipe_server')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_server/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Tipe Server";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_server/tambahTipeServer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nama_tipe_server = $this->input->post('nama_tipe_server');

            $data = array(
                'nama_tipe_server' => $nama_tipe_server,


            );


            $this->penggajianModel->insert_data($data, 'tb_tipe_server');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/TipeServer');
        }
    }

    public function updateData($id)
    {
        $where = array('id_tipe_server' => $id);
        $data['tipeserver'] = $this->db->query("SELECT * FROM tb_tipe_server WHERE id_tipe_server='$id'")->result();
        $data['title'] = "Form Tambah List";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_server/updateTipeServer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id = $this->input->post('id_tipe_sever');
            $nama_table = $this->input->post('nama_tipe_server');

            $data = array(
                'nama_tipe_server' => $nama_tipe_server,
            );

            $where = array(
                'id_tipe_server' => $id
            );

            $this->penggajianModel->update_data('tb_tipe_server', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/TipeServer');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_tipe_server', 'Nama Tipe Server', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_tipe_server' => $id);
        $this->penggajianModel->delete_data($where, 'tb_tipe_server');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/TipeServer');
    }
}
