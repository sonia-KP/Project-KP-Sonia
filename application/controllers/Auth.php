<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function login()
    {
        $this->form_validation->set_rules('NPK', 'NPK', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $NPK = $this->input->post('NPK');
            $password = $this->input->post('password');

            $user = $this->auth_model->get_user($NPK);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $this->session->set_userdata('user_id', $user['id']);
                    redirect('admin/Dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Paswword Salah!');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('error', 'NPK Salah!');
                redirect('auth/login');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('NPK', 'NPK', 'required|valid_NPK|is_unique[users.NPK]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'NPK' => $this->input->post('NPK'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            if ($this->auth_model->register($data)) {
                $this->session->set_flashdata('success', 'Registration successful! Please login.');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Registration failed!');
                redirect('auth/register');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('auth/login');
    }
}
