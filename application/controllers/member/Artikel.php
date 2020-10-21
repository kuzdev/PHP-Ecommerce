<?php
class Artikel extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model('m_artikel');
                $this->load->helper('text');
        }


        function index()
        {       $x['data'] = $this->m_artikel->get_artikel();
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_artikel',$x);
                $this->load->view('member/templates/footer');
        }
        
        
        
        function detail_artikel($id)
        {
                $x['query'] = $this->m_artikel->artikel_detail($id);
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_detail-artikel',$x);
                $this->load->view('member/templates/footer');
        }
}
