<?php
class Produk extends CI_Controller
{
    function __construct()
    {
        
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
   
        $this->load->model('m_produk');
    }
    function index()
    {
        $x['combo'] = $this->m_produk->get_kategori()->result();
        $x['data'] = $this->m_produk->get_produk();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_produk', $x);
        $this->load->view('admin/templates/footer');
    }
    
    function save()
    {
        
        $config['upload_path'] = './uploads/produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
        $config['max_size']     = 3024; // 3MB
        $changeName= "Produk_".date("Y_m_d_").time().".".strtolower(pathinfo($_FILES["foto_produk"]['name'], PATHINFO_EXTENSION));
        $config['file_name'] = $changeName;

        $this->load->library('upload', $config);
        $nama_produk = $this->input->post('nama_produk');
        $id_kategori = strip_tags($this->input->post('id_kategori'));
        $foto_produk = strip_tags($this->input->post('foto_produk'));
        $harga = strip_tags($this->input->post('harga'));
        $diskon = strip_tags($this->input->post('diskon'));
        $deskripsi = strip_tags($this->input->post('deskripsi'));
        $berat_produk = strip_tags($this->input->post('berat_produk'));
    


        $this->upload->initialize($config);
        if (!empty($_FILES['foto_produk']['name'])) {
            if ($this->upload->do_upload('foto_produk')) {
                $gbr = $this->upload->data();

                
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 710;
                $config['height'] = 420;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $foto_produk = $gbr['file_name'];
                $nama_produk = strip_tags($this->input->post('nama_produk'));
                $id_kategori = strip_tags($this->input->post('id_kategori'));
                $harga = strip_tags($this->input->post('harga'));
                $diskon = strip_tags($this->input->post('diskon'));
                $deskripsi = strip_tags($this->input->post('deskripsi'));
                $berat_produk = strip_tags($this->input->post('id_kategori'));
               

                $data = array(
                    'nama_produk' => $nama_produk,
                    'id_kategori' => $id_kategori,
                    'foto_produk' => $foto_produk,
                    'harga'       => $harga,
                    'diskon'      => $diskon,
                    'deskripsi'   => $deskripsi,
                    'berat_produk'=> $berat_produk
                );
                $this->m_produk->input_data($data, 'produk');
                echo " <script>
                        alert('Data Produk Berhasil ditambahkan');
                        window.location='" . site_url('admin/produk/') . "';                                
                        </script>";
            } else {
                echo " <script>
                        alert('Error !!!! Data Produk Gagal ditambahkan');
                        window.location='" . site_url('admin/produk/') . "';
                </script>";
            }
        } else {
            echo " <script>
                        alert('Error !!!! Ada Data yang belum ditambahkan');
                        window.location='" . site_url('admin/produk') . "';
                </script>";
        }
    }

    function delete($id)  //delete produk
    {
        $where = array('id_produk' => $id);
        $this->m_produk->delete_data($where, 'produk');
        redirect('admin/produk');
    }
   
    function update($id_produk) //update
    {
        $nama_produk = strip_tags($this->input->post('nama_produk'));
        $id_kategori = strip_tags($this->input->post('id_kategori'));
        $foto_produk = strip_tags($this->input->post('foto_produk'));
        $harga = strip_tags($this->input->post('harga'));
        $diskon = strip_tags($this->input->post('diskon'));
        $deskripsi = strip_tags($this->input->post('deskripsi'));
        $berat_produk = strip_tags($this->input->post('berat_produk'));
    
        $data = array(
            'nama_produk' => $nama_produk,
            'id_kategori' => $id_kategori,
            'foto_produk' => $foto_produk,
            'harga'       => $harga,
            'diskon'      => $diskon,
            'deskripsi'   => $deskripsi,
            'berat_produk'=> $berat_produk
        );

        $where = array(
            'id_produk' => $id_produk
        );
        $this->m_produk->update_data( $where,$data, 'produk');
        // redirect('admin/produk');
    }
    
}
