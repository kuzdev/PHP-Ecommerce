<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    function index()
    {
        $this->load->view('v_login');
    }
    function auth()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('username', TRUE)));
        $password = strip_tags(str_replace("'", "", $this->input->post('password', TRUE)));

        $cekpengguna = $this->m_login->cekpengguna($username, $password);
        $cekmember = $this->m_login->cekmember($username, $password);
        echo json_encode($cekpengguna);
        if ($cekpengguna->num_rows() > 0) {
            
            $pengguna = $cekpengguna->row_array();
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $username);
            if ($pengguna['level'] == '1') {
                $this->session->set_userdata('akses', '1');
                $this->session->set_userdata('idadmin', $pengguna['id_admin']);
                $this->session->set_userdata('nama', $pengguna['nama_admin']);
                redirect('admin/beranda');
         
            } 
            // elseif ($pengguna['level'] == '2') {
            //     $this->session->set_userdata('akses', '2');
            //     $this->session->set_userdata('idadmin', $pengguna['id_pengguna']);
            //     $this->session->set_userdata('nama', $pengguna['nama_pengguna']);
            //     redirect('pengelola/dashboard');
           
            // }
        } elseif ($cekmember->num_rows() > 0) {
            $member = $cekmember->row_array();
            $this->session->set_userdata('akses','3');
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $username);
            $this->session->set_userdata('idmember', $member['id_member']);
            $this->session->set_userdata('nama',  $member['nama_member']);
            redirect('member/beranda');
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    function logout_member()
    {
        $this->session->sess_destroy();
        redirect('member/beranda');
    }
}