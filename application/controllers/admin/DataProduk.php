<?php
class dataProduk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('login');
			redirect($url);
		};

		$this->load->model('m_produk');
        $this->load->helper('text');
        $this->load->helper('date');
	}
	function index()
	{
			$this->load->view('admin/templates/header');
			$this->load->view('admin/v_dataProduk');
			$this->load->view('admin/templates/footer');

			redirect('login');
	}