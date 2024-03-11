<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketControl extends CI_Controller {

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
	
	public function ticControl() {
        $this->another_js = "<script src='" . base_url() . "assets/js/ticketControl.js'></script>";
        $this->render_view('view_ticketControl');

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
        $result = $this->curPostRequest('Ticket_control/show_data', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiAccept()
    {
        $result = $this->curPostRequest('Ticket_control/accept_ticket', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiCancel()
    {
        $result = $this->curPostRequest('Ticket_control/cancel_ticket', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveEquip()
    {
        $result = $this->curPostRequest('Ticket_control/save_equipment', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveJobtype()
    {
        $result = $this->curPostRequest('Ticket_control/save_jobtype', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveProblem()
    {
        $result = $this->curPostRequest('Ticket_control/save_problem', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiSaveInspection()
    {
        $result = $this->curPostRequest('Ticket_control/save_inspection', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveTrobles()
    {
        $result = $this->curPostRequest('Ticket_control/save_trobles', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveRequired()
    {
        $result = $this->curPostRequest('Ticket_control/save_required', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveAnalyze()
    {
        $result = $this->curPostRequest('Ticket_control/save_analyze', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSavePrevention()
    {
        $result = $this->curPostRequest('Ticket_control/save_prevention', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveDelivery()
    {
        $result = $this->curPostRequest('Ticket_control/save_delivery', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSaveWorker()
    {
        $result = $this->curPostRequest('Ticket_control/save_worker', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }

    public function callApiSubmitTicket()
    {
        $result = $this->curPostRequest('Ticket_control/submit_ticket', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }


    public function test()
    {
           echo $this->session->userdata('userName');
            // $this->session->set_userdata('perMissionGroup', $login->permis_id);
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


    public function imgUpload()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uploadDirectory = "assets/img/upload/problem/";
    
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
    
            // Check if 'images' key exists and is not null
            if (isset($_FILES['images']) && is_array($_FILES['images'])) {
                // Loop through each uploaded file
                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    // Check if the current file has a valid name
                    if (isset($_FILES['images']['name'][$key])) {
                        $originalFileName = $_FILES['images']['name'][$key];
                        
                        // Generate unique filename with timestamp
                        $timestamp = time();
                        $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
                        $newFileName = $timestamp . '_' . $originalFileName;
                        
                        $uploadedFile = $uploadDirectory . basename($newFileName);
    
                        // ... (rest of the PHP code remains the same)
    
                        if (move_uploaded_file($tmp_name, $uploadedFile)) {
                            echo  json_encode($newFileName);
                            // $result = $this->curPostRequest('Issue_Ticket/save_issue', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
                        } else {

                        }
                    }
                }
            } else {

            }
        }
    }
    

    public function imgUpload2()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uploadDirectory = "assets/img/upload/inspection/";
    
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
    
            // Check if 'images' key exists and is not null
            if (isset($_FILES['images']) && is_array($_FILES['images'])) {
                // Loop through each uploaded file
                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    // Check if the current file has a valid name
                    if (isset($_FILES['images']['name'][$key])) {
                        $originalFileName = $_FILES['images']['name'][$key];
                        
                        // Generate unique filename with timestamp
                        $timestamp = time();
                        $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
                        $newFileName = $timestamp . '_' . $originalFileName;
                        
                        $uploadedFile = $uploadDirectory . basename($newFileName);
    
                        // ... (rest of the PHP code remains the same)
    
                        if (move_uploaded_file($tmp_name, $uploadedFile)) {
                            echo  json_encode($newFileName);
                            // $result = $this->curPostRequest('Issue_Ticket/save_issue', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
                        } else {
                            
                        }
                    }
                }
            } else {
                
            }
        }
    }

    public function imgUpload3()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uploadDirectory = "assets/img/upload/trouble/";
    
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
    
            // Check if 'images' key exists and is not null
            if (isset($_FILES['images']) && is_array($_FILES['images'])) {
                // Loop through each uploaded file
                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    // Check if the current file has a valid name
                    if (isset($_FILES['images']['name'][$key])) {
                        $originalFileName = $_FILES['images']['name'][$key];
                        
                        // Generate unique filename with timestamp
                        $timestamp = time();
                        $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
                        $newFileName = $timestamp . '_' . $originalFileName;
                        
                        $uploadedFile = $uploadDirectory . basename($newFileName);
    
                        // ... (rest of the PHP code remains the same)
    
                        if (move_uploaded_file($tmp_name, $uploadedFile)) {
                            echo  json_encode($newFileName);
                            // $result = $this->curPostRequest('Issue_Ticket/save_issue', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
                        } else {
                            
                        }
                    }
                }
            } else {
                
            }
        }
    }

    public function imgUpload4()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uploadDirectory = "assets/img/upload/analyz/";
    
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
    
            // Check if 'images' key exists and is not null
            if (isset($_FILES['images']) && is_array($_FILES['images'])) {
                // Loop through each uploaded file
                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    // Check if the current file has a valid name
                    if (isset($_FILES['images']['name'][$key])) {
                        $originalFileName = $_FILES['images']['name'][$key];
                        
                        // Generate unique filename with timestamp
                        $timestamp = time();
                        $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
                        $newFileName = $timestamp . '_' . $originalFileName;
                        
                        $uploadedFile = $uploadDirectory . basename($newFileName);
    
                        // ... (rest of the PHP code remains the same)
    
                        if (move_uploaded_file($tmp_name, $uploadedFile)) {
                            echo  json_encode($newFileName);
                            // $result = $this->curPostRequest('Issue_Ticket/save_issue', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
                        } else {
                            
                        }
                    }
                }
            } else {
                
            }
        }
    }
}

