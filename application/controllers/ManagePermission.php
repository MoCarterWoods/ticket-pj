<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagePermission extends CI_Controller
{
    private $another_css;
    public $another_js;
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

        $this->data = $result;
		$this->top_navbar_data = $result;
		$this->left_sidebar_data = $result;
		$this->footer_data = $result;


		if (!$this->session->userdata('userId')) {
            redirect(base_url() . 'Login/login');

        }
	}

	protected function render_view($path)
    {
        $this->data['another_css'] = $this->another_css;
        $this->data['another_js'] = $this->another_js;
		$this->data['topbar'] = $this->parser->parse('page/top_navbar', $this->top_navbar_data, TRUE);
		$this->data['left_sidebar'] = $this->parser->parse('page/left_sidebar', $this->left_sidebar_data, TRUE);
		$this->data['footer'] = $this->parser->parse('page/footer', $this->footer_data, TRUE);
        $this->data['page_content'] = $this->parser->parse($path, $this->data, TRUE);
        $this->parser->parse('page/pagecontent', $this->data);
    }
    public function mngPermis()
    {
        $this->another_js = "<script src='" . base_url() . "assets/js/managePermisDetail.js'></script>";
        $this->render_view('manage_permis_detail');
    }

    public function callApi()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }




    public function callApiShowData()
    {
        $result = $this->curPostRequest('Manage_permis_detail/show_group', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiShowTable()
    {
        $result = $this->curPostRequest('Manage_permis_detail/show_tb', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiUpdateStatus()
    {
        $result = $this->curPostRequest('Manage_permis_detail/update_flg', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiShowdrop_main()
    {
        $result = $this->curPostRequest('Manage_permis_detail/drop_main', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiAddPermiss()
    {
        $result = $this->curPostRequest('Manage_permis_detail/insert_permiss', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }
    
    
    

    function curPostRequest($enpoint, $param_data, $is_array = true, $associative = false){
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