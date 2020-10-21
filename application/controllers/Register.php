<?php
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_register');
    }
    function index()
    {
        $this->load->view('v_register');
    }
    
    
    function create_regis() 
    {
        $nama_member = strip_tags($this->input->post('nama_member'));
        $username_member = strip_tags($this->input->post('username_member'));
        $email = strip_tags($this->input->post('email'));
        $password_member = md5(strip_tags($this->input->post('password_member')));
        $alamat = strip_tags($this->input->post('alamat'));
    
        
        $data = array(
            'nama_member'     => $nama_member,
            'username_member'     => $username_member,
            'email'    => $email,
            'password_member'     => $password_member,
            'alamat'     => $alamat,
        );
        
        $this->m_register->input_data($data, 'member');
        echo " <script>
        alert('Berhasil membuat akun member');
        window.location='" . site_url('login') . "';
    </script>";
    
    }
    
   
}