<?php
class Dashboard extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                if ($this->session->userdata('masuk') != TRUE) {
                    $url = base_url('login');
                    redirect($url);
                };
        }


        function index()
        {
            if ($this->session->userdata('akses') == '3') {
                $this->load->view('member/templates/v_header');
                $this->load->view('member/pages/v_dashboard');
                $this->load->view('member/templates/v_footer');
            } else {
                redirect('login');
            }
        }
}
