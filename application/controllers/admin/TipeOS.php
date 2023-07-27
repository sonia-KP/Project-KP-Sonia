<?php

class TipeOS extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tipe OS";
        $data['tipeos'] = $this->penggajianModel->get_data('tb_tipe_os')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_os/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Tipe OS";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_os/tambahTipeOS', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nama_tipe_os = $this->input->post('nama_tipe_os');

            $data = array(
                'nama_tipe_os' => $nama_tipe_os,


            );


            $this->penggajianModel->insert_data($data, 'tb_tipe_os');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/TipeOS');
        }
    }

    public function updateData($id)
    {
        $where = array('id_tipe_os' => $id);
        $data['tipeos'] = $this->db->query("SELECT * FROM tb_tipe_os WHERE id_tipe_os='$id'")->result();
        $data['title'] = "Form Tambah List";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tipe_os/updateTipeOS', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id = $this->input->post('id_tipe_os');
            $nama_tipe_os = $this->input->post('nama_tipe_os');

            $data = array(
                'nama_tipe_os' => $nama_tipe_os,
            );

            $where = array(
                'id_tipe_os' => $id
            );


            $this->penggajianModel->update_data('tb_tipe_os', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/TipeOS');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_tipe_os', 'Nama Tipe OS', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_tipe_os' => $id);
        $this->penggajianModel->delete_data($where, 'tb_tipe_os');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/TipeOS');
    }
}
