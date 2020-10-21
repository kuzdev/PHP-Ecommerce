<?php
class Rangking extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_member');
    }
    function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_rangking');
        $this->load->view('admin/templates/footer');
    }

}