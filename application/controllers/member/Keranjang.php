<?php
class Keranjang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_keranjang');
    }
    function index()
    {
        $x['data'] = $this->m_keranjang->get_keranjang();
        $this->load->view('member/templates/header');
        $this->load->view('member/pages/v_keranjang', $x);
        $this->load->view('member/templates/footer');
    }

}