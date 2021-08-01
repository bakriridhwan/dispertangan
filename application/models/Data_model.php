<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{


    public function getAllUser()
    {
        return $this->db->get('datacenter')->result_array();
    }


    public function inputData()
    {
        $data = [
            "tahun" => $this->input->post('tahun', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "bulan" => $this->input->post('bulan', true),
            "bidang" => $this->input->post('bidang', true),
            "judul" => $this->input->post('judul', true),
            "file" => 'default.docx'
        ];
        $this->db->insert('datacenter', $data);
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



    public function cariDatacenter()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('bidang', $keyword);
        $this->db->or_like('tahun', $keyword);
        $this->db->or_like('bulan', $keyword);
        $this->db->or_like('judul', $keyword);
        return $this->db->get('datacenter')->result_array();
    }


    public function getData($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('bulan', $keyword);
            $this->db->or_like('tahun', $keyword);
            $this->db->or_like('bidang', $keyword);
            $this->db->or_like('judul', $keyword);
        }
        return $this->db->get('datacenter', $limit, $start)->result_array();
    }

    public function countData()
    {
        return $this->db->get('datacenter')->num_rows();
    }


    
}
