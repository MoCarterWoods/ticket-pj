<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session');

        $this->data["base_url"] = base_url();

        $result['base_url'] = base_url();
        $result['site_url'] = site_url();
    }

    public function login()
    {
        $this->another_js = "<script src='" . base_url() . "assets/js/login.js'></script>";
        $this->parser->parse('login', $this->data);
    }




    public function callApiLogin()
    {

        $result = $this->curPostRequest('Api_Controller/chk_login', array('data' => serialize($_POST)));
        $login =  $result;
        if (isset($login) && $login->result == 1) {
            $this->session->set_userdata('userId', $login->emp_id);
            $this->session->set_userdata('userName', $login->emp_code);
            $this->session->set_userdata('firstname', $login->emp_name);
            $this->session->set_userdata('perMissionGroup', $login->permis_id);
            $this->session->set_userdata('perMissionGroupName', $login->permis_group);
            $this->session->set_userdata('log_login', $login->log_login);
        }
        echo json_encode($result);
    }


    public function callApiDropDown()
    {
        $result = $this->curPostRequest('Api_Controller/show_Menu',  array('data' => serialize($_POST), 'session' => serialize($this->session->userdata('perMissionGroup'))));
        echo json_encode($result);
    }

    public function callApiPermis()
    {
        $result = $this->curPostRequest('Api_Controller/show_Menu', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('perMissionGroup'))));
        echo json_encode($result);
    }

    public function logout()
    {
        $result = $this->curPostRequest('Api_Controller/logout', array('data' => serialize(array('log_login' => $this->session->userdata('log_login')))));
        if ($result->result == 1) {
            $this->session->sess_destroy();
        }
        echo json_encode($result);
    }

    function curPostRequest($enpoint, $param_data, $is_array = true, $associative = false)
    {
        /* Endpoint */
        $url = 'http://127.0.0.1/api/' . $enpoint;

        /* eCurl */
        $curl = curl_init($url);

        /* Data */
        $data = (array) $param_data;

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        /* Set JSON data to POST */
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        /* Define content type */
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        /* Return json */
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        /* make request */
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            echo 'cURL error: ' . curl_error($curl);
            exit;
        }

        /* close curl */
        curl_close($curl);

        return $is_array ? json_decode($result, $associative) : $result;
    }
}
