<?php

// application/models/User_model.php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_users()
    {
        // Ambil data pengguna dari tabel 'users'
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function tambah_user($data)
    {
        // Masukkan data user ke dalam tabel 'users'
        return $this->db->insert('users', $data);
    }

    public function get_user_by_id($id)
    {
        // Ambil data user berdasarkan ID dari tabel 'users'
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function update_user($id, $data)
    {
        // Update data user berdasarkan ID di tabel 'users'
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function hapus_user($id)
    {
        // Hapus data user berdasarkan ID dari tabel 'users'
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}
