<?php
class Slider extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_slider');
        $this->load->library('upload');
    }


    function index()
    {
        $x['data'] = $this->m_slider->get_slider();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_atur-slider', $x);
        $this->load->view('admin/templates/footer');
    }

    function save()
    {
        $config['upload_path'] = './uploads/slider/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
        $config['max_size']     = 3024; // 3MB
        $changeName= "Slider".date("Y_m_d_").time().".".strtolower(pathinfo($_FILES["foto_slider"]['name'], PATHINFO_EXTENSION));
        $config['file_name'] = $changeName;

        $this->upload->initialize($config);
        if (!empty($_FILES['foto_slider']['name'])) {
            if ($this->upload->do_upload('foto_slider')) {
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

                $foto_slider = $gbr['file_name'];

                $data = array(
                    'foto_slider'    => $foto_slider
                );

                $this->m_slider->input_data($data, 'slider');
                echo " <script>
				alert('Data slider Berhasil ditambahkan');
				window.location='" . site_url('admin/slider') . "';
			</script>";
            } else {
                echo " <script>
			alert('Error !!!! Data slider Gagal ditambahkan');
			window.location='" . site_url('admin/slider') . "';
		</script>";
            }
        } else {
            echo " <script>
			alert('Error !!!! Ada Data yang belum ditambahkan');
			window.location='" . site_url('admin/slider') . "';
		</script>";
        }
    }

    function update($id_slider)
    {

        $config['upload_path'] = './uploads/slider/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
        $config['max_size']     = 5024; // 3MB
        $changeName= "Slider".date("Y_m_d_").time().".".strtolower(pathinfo($_FILES["foto_slider"]['name'], PATHINFO_EXTENSION));
        $config['file_name'] = $changeName;

        $this->upload->initialize($config);
        if (!empty($_FILES['foto_slider']['name'])) {
            if ($this->upload->do_upload('foto_slider')) {
                $gbr = $this->upload->data();
              

                // $gbr['file_name'] = "slider_".date("Y_m_d_").time().".".strtolower(pathinfo($gbr['file_name'], PATHINFO_EXTENSION));
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
                $gambar=$this->input->post('gambar');
                $path='./uploads/slider/'.$gambar;
                unlink($path);

                $foto_slider = $gbr['file_name'];

                $data = array(
                    'foto_slider'    => $foto_slider
                );

                $where = array(
                    'id_slider' => $id_slider
                );
                $this->m_slider->update_data($where, $data, 'slider');
                echo " <script>
				alert('Data slider Berhasil ditambahkan');
				window.location='" . site_url('admin/slider') . "';
			</script>";
            } else {
                echo " <script>
			alert('Error !!!! Data slider Gagal ditambahkan');
			window.location='" . site_url('admin/slider') . "';
		</script>";
            }
         
    //     else {
    //         $judul_slider = strip_tags($this->input->post('judul_slider'));
    //             $isi_slider = strip_tags($this->input->post('isi_slider'));

    //             $data = array(
    //                 'judul_slider'     => $judul_slider,
    //                 'isi_slider'     => $isi_slider
    //             );

    //             $where = array(
    //                 'id_slider' => $id_slider
    //             );
    //             $this->m_slider->update_data2($where, $data, 'slider');
    //             echo " <script>
	// 			alert('Data slider Berhasil ditambahkan');
	// 			window.location='" . site_url('admin/slider/data_slider') . "';
    //             </script>";
    //     }
    // }


    // function delete($id)  //delete kriteria
    // {
    //     $where = array('id_slider' => $id);
    //     $this->m_slider->delete_data($where, 'slider');
    //     redirect('admin/slider/data_slider');
    // }
}