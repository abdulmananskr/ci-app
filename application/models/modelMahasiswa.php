<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modelMahasiswa extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function get_data()
    {
        return $this->db->get('mahasiswa');
    }

    public function simpanData($data = null)
    {
        $this->db->insert('mahasiswa', $data);
    }

    public function wheremahasiswa($where)
    {
        return $this->db->get_where('mahasiswa', $where);
    }

    public function updatemahasiswa($data = null, $where = null)
    {
        $this->db->update('mahasiswa', $data, $where);
    }
    public function deletemahasiswa($where = null)
    {
        $this->db->delete('mahasiswa', $where);
    }
}