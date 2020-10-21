<?php
class Beranda extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('login');
			redirect($url);
		};

		$this->load->model('m_member');
        $this->load->helper('text');
        $this->load->helper('date');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			// $x['data'] = $this->m_alternatif->get_alternatif_active();
			$this->load->view('admin/templates/header');
			$this->load->view('admin/v_dashboard');
			$this->load->view('admin/templates/footer');
		} else {
			redirect('login');
		}
	}


	// function edit($id_produk)
    // {

    //     if ($this->input->post('submit') == true) {
    //         $this->load->library('upload');
    //         $dataInfo = array();
    //         // $files = $_FILES;
    //         // $cpt = count($_FILES['fotoproyek']['name']);

    //         $config['upload_path'] = './uploads/produk/'; //path folder
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    //         $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
    //         $config['max_size']     = 5024; // 3MB

    //         $where = array(
    //             'id_proyek' => $id_proyek
    //         );

    //         $produk = $this->m_alternatif->show_data($where, 'alternatif_proyek')->get()->row_array();

    //         for ($i = 1; $i <= 5; $i++) {
    //             if (!empty($_FILES["fotoproyek$i"]['name'])) {
    //                 $config["file_name"] = "Foto$i" . "_" . date("Y_m_d_") . time() . "." . strtolower(pathinfo($_FILES["fotoproyek$i"]['name'], PATHINFO_EXTENSION));
    //                 $this->upload->initialize($config);
    //                 $this->upload->do_upload("fotoproyek$i");
    //                 $fotoproyek[$i] = $this->upload->data()["file_name"];

    //                 @unlink("./uploads/produk/" . $produk["fotoproyek$i"]);
    //             } else {
    //                 $fotoproyek[$i] = $produk["fotoproyek$i"];
    //             }
    //         }


    //         $nama_proyek = strip_tags($this->input->post('nama_proyek'));
    //         $judul_proyek = strip_tags($this->input->post('judul_proyek'));
    //         $deskripsi_proyek = strip_tags($this->input->post('deskripsi_proyek'));
    //         $sertifikat_proyek = strip_tags($this->input->post('sertifikat_proyek'));
    //         $provinsi_proyek = strip_tags($this->input->post('provinsi_proyek'));
    //         $kabupaten_proyek = strip_tags($this->input->post('kabupaten_proyek'));
    //         $luastanah_proyek = strip_tags($this->input->post('luastanah_proyek'));
    //         $harga_m_proyek = strip_tags($this->input->post('harga_m_proyek'));
    //         $lebar_depan_proyek = strip_tags($this->input->post('lebar_depan_proyek'));
    //         $harga_total_proyek = strip_tags($this->input->post('harga_total_proyek'));
    //         $jarak_proyek = strip_tags($this->input->post('jarak_proyek'));
    //         $fasilitas_proyek = strip_tags($this->input->post('fasilitas_proyek'));
    //         $nama_pengelola = strip_tags($this->input->post('nama_pengelola'));
    //         $nama_kantor = strip_tags($this->input->post('nama_kantor'));
    //         $nomor_hp = strip_tags($this->input->post('nomor_hp'));

    //         $data = array(
    //             'nama_proyek'     => $nama_proyek,
    //             'judul_proyek'     => $judul_proyek,
    //             'deskripsi_proyek'     => $deskripsi_proyek,
    //             'sertifikat_proyek'    => $sertifikat_proyek,
    //             'provinsi_proyek'     => $provinsi_proyek,
    //             'kabupaten_proyek'    => $kabupaten_proyek,
    //             'luastanah_proyek'     => $luastanah_proyek,
    //             'harga_m_proyek'    => $harga_m_proyek,
    //             'lebar_depan_proyek'     => $lebar_depan_proyek,
    //             'harga_total_proyek'    => $harga_total_proyek,
    //             'jarak_proyek'     => $jarak_proyek,
    //             'fasilitas_proyek'    => $fasilitas_proyek,
    //             'nama_pengelola'     => $nama_pengelola,
    //             'nama_kantor'    => $nama_kantor,
    //             'nomor_hp'     => $nomor_hp,
    //             'fotoproyek1' => $fotoproyek[1],
    //             'fotoproyek2' => $fotoproyek[2],
    //             'fotoproyek3' => $fotoproyek[3],
    //             'fotoproyek4' => $fotoproyek[4],
    //             'fotoproyek5' => $fotoproyek[5],
    //         );

    //         if ($this->m_alternatif->update_data($where, $data, 'alternatif_proyek')) {
    //             echo " <script>
    //          alert('Data Alternatif Berhasil diperbarui');
    //          window.location='" . site_url('admin/dashboard') . "';
    //      </script>";
    //         } else {
    //             echo "<script>
    //                 alert('Error !!!! Data Alternatif Gagal untuk diubah');
    //                 window.location='" . site_url('admin/dashboard') . "';
    //             </script>";
    //         }
    //     } else {
    //         echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Ada data yang salah</div>');
    //     }
    // }
	
	
}
