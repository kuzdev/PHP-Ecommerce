<?php
class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_kategori');
    }

    function index()
    {
        $x['data'] = $this->m_kategori->get_kategori();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_kategori', $x);
        $this->load->view('admin/templates/footer');
    }
    
    function save() 
    {
        $nama_kategori = strip_tags($this->input->post('nama_kategori'));
        $data = array(
            'id_kategori' =>NULL,
            'nama_kategori'   => $nama_kategori
        );
        
        $this->m_kategori->input_data($data, 'kategori');
        echo " <script>
        alert('Berhasil membuat kategori');
        window.location='" . site_url('admin/kategori') . "';
    </script>";
    
    }

    function delete($id)  //delete kategori
    {
        $where = array('id_kategori' => $id);
        $this->m_kategori->delete_data($where, 'kategori');
        redirect('admin/kategori');
    }

    function update($id)
    {
        $data = array(
            'id_kategori' =>$id,
            'nama_kategori'   => $nama_kategori
        );
        $nama_kategori = strip_tags($this->input->post('nama_kategori'));
        $where = array('id_kategori' => $id);
        
        $this->m_kategori->update_data($data, 'kategori');
    }
}
