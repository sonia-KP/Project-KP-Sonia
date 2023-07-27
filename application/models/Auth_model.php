<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function register($data)
    {
        return $this->db->insert('users', $data);
    }

    public function get_user($NPK)
    {
        return $this->db->get_where('users', ['NPK' => $NPK])->row_array();
    }
}
