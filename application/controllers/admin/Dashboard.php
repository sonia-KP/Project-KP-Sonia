<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->database(); // Memuat Library Database CodeIgniter

        $tbDatabase = $this->db->get('tb_database'); // Mengambil data dari tabel tb_database
        $tbServer = $this->db->get('tb_server'); // Mengambil data dari tabel tb_server
        $tbAplikasi = $this->db->get('tb_aplikasi'); // Mengambil data dari tabel tb_aplikasi

        $data['tbDatabase'] = $tbDatabase->num_rows();
        $data['tbServer'] = $tbServer->num_rows();
        $data['tbAplikasi'] = $tbAplikasi->num_rows();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
