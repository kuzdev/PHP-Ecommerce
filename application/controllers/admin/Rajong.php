<?php
class rajong extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_rajong');
    }

    function index()
    {
        $x['data'] = $this->m_rajong->get_rajong();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_rajong', $x);
        $this->load->view('admin/templates/footer');
    }

    function setting()
    {
        

    }

    private $api_key = "dd3860ac942d7decc45bda9517199980";
    function prov()
    {

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: $api_key"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }




}