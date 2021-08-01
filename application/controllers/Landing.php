<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Website';

        $data['datacenter'] = $this->Data_model->getAllUser();


        if ($this->input->post('keyword')) {
            $data['datacenter'] = $this->Data_model->cariDatacenter();
        }

        // PAGINATION
        $this->load->library('pagination');



        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }


        // config
        $this->db->like('bulan', $data['keyword']);
        $this->db->or_like('tahun', $data['keyword']);
        $this->db->or_like('bidang', $data['keyword']);
        $this->db->or_like('judul', $data['keyword']);
        $this->db->from('datacenter');

        $config['total_rows'] = $this->db->count_all_results();

        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // $config['num_links'] = 5; untuk menampilkan berapa halaman page numbernya

        // config
        $config['base_url'] = 'http://localhost/datacenter/landing/index/';
        // $config['num_links'] = 5; untuk menampilkan berapa halaman page numbernya

        // styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        // inisialisasi
        $this->pagination->initialize($config);



        // PAGINATION
        $data['start'] = $this->uri->segment(3);
        $data['datacenter'] = $this->Data_model->getData($config['per_page'], $data['start'], $data['keyword']);




        $this->load->view('templates/headerlanding', $data);
        $this->load->view('templates/topbarlanding', $data);
        $this->load->view('landing/index', $data);
        $this->load->view('templates/footer');
    }
}
