<?php
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_laporan');
    }

    function index()
    {
        $x['data'] = $this->m_laporan->get_laporan();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_laporan', $x);
        $this->load->view('admin/templates/footer');
    }
    

}
