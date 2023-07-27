<?php

class tbServer extends CI_Controller
{
    public function index()
    {
        $data['title'] = "tb Server";
        $data['tbserver'] = $this->penggajianModel->get_data('tb_server')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_server/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah data Server";
        $data['tbserver'] = $this->penggajianModel->get_data('tb_server')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_server/tambahtbServer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            // $id_server = $this->input->post('id_server');
            $id_tipe_server = $this->input->post('id_tipe_server');
            $id_tipe_os = $this->input->post('id_tipe_os');
            $ip = $this->input->post('ip');

            $data = array(
                // 'id_server' => $id_server,
                'id_tipe_server' => $id_tipe_server,
                'id_tipe_os' => $id_tipe_os,
                'ip' => $ip,
            );

            $this->penggajianModel->insert_data($data, 'tb_server');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/tbServer');
        }
    }

    public function updateData($id)
    {
        $where = array('id_server' => $id);
        $data['tbserver'] = $this->db->query("SELECT * FROM tb_server WHERE id_server='$id'")->result();
        $data['title'] = "Form update List";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_server/updatetbServer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id_server      = $this->input->post('id_server');
            $id_tipe_server = $this->input->post('id_tipe_server');
            $id_tipe_os     = $this->input->post('id_tipe_os');
            $ip             = $this->input->post('ip');

            $data = array(
                'id_tipe_server' => $id_tipe_server,
                'id_tipe_os'     => $id_tipe_os,
                'ip'             => $ip,
            );

            $where = array(
                'id_server' => $id_server
            );

            $this->penggajianModel->update_data('tb_server', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/tbServer');
        }
    }
    public function _rules()
    {
        // $this->form_validation->set_rules('id_server', 'id_server', 'required');
        $this->form_validation->set_rules('id_tipe_server', 'id_tipe_server', 'required');
        $this->form_validation->set_rules('id_tipe_os', 'id_tipe_os', 'required');
        $this->form_validation->set_rules('ip', 'ip', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_server' => $id);
        $this->penggajianModel->delete_data($where, 'tb_server');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/tbServer');
    }
}
