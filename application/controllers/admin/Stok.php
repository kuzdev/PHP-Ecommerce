<?php
class Stok extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('M_Stok');
    }
    function index(){

        $x['data'] = $this->M_Stok->cari();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_stok', $x);
        $this->load->view('admin/templates/footer');
    }  

    


    
}

?>