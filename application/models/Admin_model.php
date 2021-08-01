<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('datacenter')->result_array();
    }



    public function dapatData($id)
    {
        return $this->db->get_where('datacenter', ['id' => $id])->row_array();
    }


    public function updateData()
    {
        $data = [
            "tahun" => $this->input->post('tahun', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "bulan" => $this->input->post('bulan', true),
            "bidang" => $this->input->post('bidang', true),
            "judul" => $this->input->post('judul', true),
            "file" => 'ubah.docx'
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('datacenter', $data);
    }



    public function hapusData($id)
    {
        $this->db->delete('datacenter', ['id' => $id]);
    }


    ///////////////////////////////////////////////////
    // USER
    public function semuaUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function total_rows()
    {

        return $this->db->get('user')->num_rows();
    }

    public function total_rows2()
    {

        return $this->db->get('datacenter')->num_rows();
    }

    public function hapusDatauser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }



    // ROLE
    public function inputData()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];
        $this->db->insert('user_role', $data);
    }

    // edit
    public function idRole($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function updateRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function hapusDataRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }
}
