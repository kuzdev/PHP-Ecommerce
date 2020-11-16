<?php
class Checkout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        // $this->load->model('m_checkout');
    }
    function index()
    {
        // $x['data'] = $this->m_keranjang->get_keranjang();
        $this->load->view('member/templates/header');
        $this->load->view('member/pages/v_checkout');
        $this->load->view('member/templates/footer');
    }

}