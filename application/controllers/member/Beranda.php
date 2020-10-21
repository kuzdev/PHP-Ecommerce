<?php
class Beranda extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model('m_artikel');
                $this->load->model('m_produk');
                $this->load->helper('text');
                $this->load->helper('date');
        }


        function index()
        {
                $x['data'] = $this->m_produk->get_produk_page();
                $x['query'] = $this->m_artikel->get_artikel_page();
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_beranda', $x);
                $this->load->view('member/templates/menuBar');
                $this->load->view('member/templates/footer');
        }
        
     
}
