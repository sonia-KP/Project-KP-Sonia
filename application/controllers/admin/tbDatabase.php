<?php

class tbDatabase extends CI_Controller
{
    public function index()
    {
        $data['title'] = "tb Database";
        $data['tbdatabase'] = $this->tbDatabase_model->get_data('tb_database')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_database/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah tb Database";
        $data['tbdatabase'] = $this->penggajianModel->get_data('tb_database')->result();
        $data['tbserver'] = $this->penggajianModel->get_data('tb_server')->result();
        $data['tbtipedatabase'] = $this->penggajianModel->get_data('tb_tipe_database')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_database/tambahtbDatabase', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->tambahData();
        } else {
            $id_database = $this->input->post('id_database');
            $nama_database = $this->input->post('nama_database');
            $versi = $this->input->post('versi');
            $id_tipe_database = $this->input->post('id_tipe_database');
            $id_server = $this->input->post('id_server');
            // $nama_tipe_database = $this->input->post('nama_tipe_database');

            $data = array(
                'id_database' => $id_database,
                'nama_database' => $nama_database,
                'versi' => $versi,
                'id_tipe_database' => $id_tipe_database,
                'id_server' => $id_server,
                // 'nama_tipe_database' => $nama_tipe_database,

            );
            // var_dump($data);

            $this->penggajianModel->insert_data($data, 'tb_database');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/tbDatabase');
            // var_dump($data);
            // die();
        }
    }

    public function updateData($id)
    {
        $where = array('id_database' => $id);
        $data['tbdatabase'] = $this->db->get_where('tb_database', $where)->result();
        $data['tbserver'] = $this->penggajianModel->get_data('tb_server')->result();
        $data['tbtipedatabase'] = $this->penggajianModel->get_data('tb_tipe_database')->result();
        $data['title'] = "Form Update List";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_database/updatetbDatabase', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData($this->input->post('id_database'));
        } else {
            $id_database = $this->input->post('id_database');
            $nama_database = $this->input->post('nama_database');
            $versi = $this->input->post('versi');
            $id_tipe_database = $this->input->post('id_tipe_database');
            $id_server = $this->input->post('id_server');

            $data = array(
                'id_database' => $id_database,
                'nama_database' => $nama_database,
                'versi' => $versi,
                'id_tipe_database' => $id_tipe_database,
                'id_server' => $id_server,
            );

            $where = array('id_database' => $id_database);
            $this->penggajianModel->update_data('tb_database', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/tbDatabase');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_database', 'Nama Database', 'required');
        $this->form_validation->set_rules('versi', 'Versi', 'required');
        $this->form_validation->set_rules('id_tipe_database', 'ID Tipe Database', 'required');
        $this->form_validation->set_rules('id_server', 'ID Server', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_database' => $id);
        $this->penggajianModel->delete_data($where, 'tb_database');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/tbDatabase');
    }
}
