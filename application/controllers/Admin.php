<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Upload_model');
        $this->load->model('Data_model');
        $this->load->library('form_validation');

        is_logged_in();
    }



    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->model('Admin_model');
        $data['total_user'] = $this->Admin_model->total_rows();
        $data['total_datacenter'] = $this->Admin_model->total_rows2();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    // USER
    public function mUser()
    {
        $data['title'] = 'Management Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/opsim', $data);
        $this->load->view('templates/footer');
    }

    // OPSIM
    public function opsim()
    {
        $data['title'] = 'Management User';
        $data['user'] = $this->Admin_model->semuaUser();

        $this->load->model('Admin_model');
        $data['total_user'] = $this->Admin_model->total_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/v_user', $data);
        $this->load->view('templates/footer');
    }


    // HAPUS USER
    public function hapusUser($id)
    {
        $this->Admin_model->hapusDatauser($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">User successfully deleted!</div>');
        redirect('admin/opsim');
    }



    public function mData()
    {
        $data['title'] = 'DATA CENTER';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datacenter'] = $this->Admin_model->getAllUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/mdata', $data);
        $this->load->view('templates/footer');
    }

    // TAMBAH DATA
    public function formTambah()
    {
        $data['title'] = 'Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['datacenter'] = $this->Upload_model->all();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add_data', $data);
        $this->load->view('templates/footer');
    }
    public function simpanData()
    {

        $config['upload_path'] = './assets/fileupload/';
        $config['allowed_types'] = 'docx|pdf';
        $config['max_size'] = 6000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {

            $file = $this->upload->data();
            $file = $file['file_name'];
            $tahun = $this->input->post('tahun', true);
            $bulan = $this->input->post('bulan', true);
            $bidang = $this->input->post('bidang', true);
            $judul = $this->input->post('judul', true);

            $data = [
                'tahun' => $tahun,
                'bulan' => $bulan,
                'bidang' => $bidang,
                'judul' => $judul,
                'file' => $file,
            ];

            $this->db->insert('datacenter', $data);
            redirect('admin/mData');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            echo "Gagal upload !!";
        }


        // $this->Data_model->inputData();
        // redirect('user/tampilkanData');
    }


    // EDIT DATA
    public function formEdit($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datacenter'] = $this->Admin_model->dapatData($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/e_data', $data);
        $this->load->view('templates/footer');
    }
    public function ubahData()
    {


        $config['upload_path'] = './assets/fileupload/';
        $config['allowed_types'] = 'docx|pdf';
        $config['max_size'] = 6000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {

            $file = $this->upload->data();
            $file = $file['file_name'];
            $tahun = $this->input->post('tahun', true);
            $bulan = $this->input->post('bulan', true);
            $bidang = $this->input->post('bidang', true);
            $judul = $this->input->post('judul', true);

            $data = [
                'tahun' => $tahun,
                'bulan' => $bulan,
                'bidang' => $bidang,
                'judul' => $judul,
                'file' => $file,
            ];

            $this->db->replace('datacenter', $data);
            redirect('admin/mData');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            echo "Gagal upload !!";
        }


        // $this->Data_model->updateData();
        // redirect('user/tampilkanData');
    }


    // HAPUS DATA
    public function hapus($id)
    {
        $this->Admin_model->hapusData($id);
        redirect('admin/mData');
    }



    public function profil()
    {
        $data['title'] = 'PROFIL ADMIN';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/v_profil', $data);
        $this->load->view('templates/footer');
    }



    public function editProfil()
    {
        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/e_profil', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');


            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size']     = '5048';
                $config['upload_path'] = './assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Your profile has been updated!</div>');
            redirect('admin/profil');
        }
    }


    // ROLE
    public function role()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] =  $this->db->get('user_role')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function addrole()
    {
        $this->Admin_model->inputData();


        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">New role has been added!</div>');
        redirect('admin/role');
    }
    public function formeditRole($id)
    {
        $data['user_role'] = $this->Admin_model->idRole($id);

        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/editRole', $data);
        $this->load->view('templates/footer');
    }
    public function ubahRole()
    {
        $this->Admin_model->updateRole();


        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Role has been updated!</div>');
        redirect('admin/role');
    }
    public function hapusRole($id)
    {
        $this->Admin_model->hapusDataRole($id);


        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Role has been deleted!</div>');
        redirect('admin/role');
    }



    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] =  $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templates/footer');
    }




    public function changeAccess()
    {

        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }


        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Access Changed!</div>');
    }
}
