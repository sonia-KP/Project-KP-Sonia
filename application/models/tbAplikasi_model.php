<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tbAplikasi_model extends CI_Model
{
    public function get_data($table)
    {
        $this->db->select();
        $this->db->from('tb_aplikasi');
        $this->db->join('tb_database', 'tb_database.id_database = tb_aplikasi.id_database');
        $this->db->join('tb_server', 'tb_database.id_server = tb_server.id_server');

        return $this->db->get();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
