<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tipe Server";
        $data['users'] = $this->penggajianModel->get_data('users')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/admin/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah User";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/admin/tambahuser', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $name = $this->input->post('name');
            $NPK = $this->input->post('NPK');
            $password = $this->input->post('password');

            $data = array(
                'name' => $name,
                'NPK' => $NPK,
                'password' => password_hash($password, PASSWORD_DEFAULT) // Use the variable directly
            );

            $this->penggajianModel->insert_data($data, 'users');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/Admin');
        }
    }

    public function updateData($id)
    {
        $where = array('id' => $id);
        $data['users'] = $this->db->query("SELECT * FROM users WHERE id='$id'")->result();
        $data['title'] = "Form Update User";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/admin/updateuser', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // Handle the form validation errors if necessary, and show the form again
            // (e.g., display an error message and redirect to the edit page).
        } else {
            // Retrieve the form data
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $NPK = $this->input->post('NPK');
            $password = $this->input->post('password');

            // Create an array with the updated user data
            $data = array(
                'name' => $name,
                'NPK' => $NPK,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            );

            // Set the WHERE condition for updating the specific user
            $where = array(
                'id' => $id
            );

            // Update the user data in the 'users' table
            $this->penggajianModel->update_data('users', $data, $where);

            // Set flash data to show a success message on the redirected page
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>');

            // Redirect back to the index page or any other appropriate page
            redirect('admin/Admin');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('name', 'Nama user', 'required');
        $this->form_validation->set_rules('NPK', 'NPK user', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->penggajianModel->delete_data($where, 'users');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/Admin');
    }
}
