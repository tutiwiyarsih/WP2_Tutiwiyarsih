<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->u=insert('user', $data);
    }
    public funtion cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function cekUserAcces($where = null)
    {
        $this->db->select('*');
        $this->db->from('acces_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10,0);
        return $this->db->get();
    }
    public function cekData($where = null)
    {
        return $this->get_where('user', $where);
    }
}