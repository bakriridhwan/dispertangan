<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_model extends CI_Model
{

    public function all()
    {
        $this->db->select('*');
        $this->db->from('datacenter');
        $this->db->order_by('tanggal_upload', 'DESC');

        return $this->db->get();
    }

    public function insert($data)
    {
        $this->db->insert('datacenter', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
