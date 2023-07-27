<?php

class tbAplikasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = "tb Aplikasi";
        $data['tbaplikasi'] = $this->tbAplikasi_model->get_data('tb_aplikasi')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_aplikasi/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah tb Aplikasi";
        $data['tbaplikasi'] = $this->penggajianModel->get_data('tb_aplikasi')->result();
        $data['tbserver'] = $this->penggajianModel->get_data('tb_server')->result();
        $data['tbdatabase'] = $this->penggajianModel->get_data('tb_database')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_aplikasi/tambahtbAplikasi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nama_aplikasi               = $this->input->post('nama_aplikasi');
            $url                         = $this->input->post('url');
            $PIC                         = $this->input->post('PIC');
            $id_database                 = $this->input->post('id_database');
            $id_server                   = $this->input->post('id_server');

            $data = array(
                'nama_aplikasi' => $nama_aplikasi,
                'url' => $url,
                'PIC' => $PIC,
                'id_database' => $id_database,
                'id_server' => $id_server,

            );


            if ($this->penggajianModel->insert_data($data, 'tb_aplikasi')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/tbAplikasi');
            } else {

                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal menambahkan data!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/tbAplikasi');
            }
        }
    }

    public function updateData($id)
    {
        $where = array('id_aplikasi' => $id);
        $data['tbaplikasi'] = $this->db->get_where('tb_aplikasi', $where)->result();
        $data['tbserver'] = $this->penggajianModel->get_data('tb_server')->result();
        $data['tbdatabase'] = $this->penggajianModel->get_data('tb_database')->result();
        $data['title'] = "Form Update List";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/list_aplikasi/updatetbAplikasi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData($this->input->post('id_aplikasi'));
        } else {
            $id_aplikasi = $this->input->post('id_aplikasi');
            $nama_aplikasi = $this->input->post('nama_aplikasi');
            $url = $this->input->post('url');
            $PIC = $this->input->post('PIC');
            $id_server = $this->input->post('id_server');


            $data = array(
                'id_aplikasi' => $id_aplikasi,
                'nama_aplikasi' => $nama_aplikasi,
                'url' => $url,
                'PIC' => $PIC,
                'id_server' => $id_server,


            );

            $where = array(
                'id_aplikasi' => $id_aplikasi
            );

            $this->penggajianModel->update_data('tb_aplikasi', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/tbAplikasi');
        }
    }

    public function _rules()
    {
        // $this->form_validation->set_rules('id_aplikasi', 'ID Aplikasi', 'required');
        $this->form_validation->set_rules('nama_aplikasi', 'ID Aplikasi', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('PIC', 'PIC', 'required');
        $this->form_validation->set_rules('id_server', 'ID Server', 'required');
        $this->form_validation->set_rules('id_database', 'ID database', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_aplikasi' => $id);
        $this->penggajianModel->delete_data($where, 'tb_aplikasi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
        redirect('admin/tbAplikasi');
    }
}
