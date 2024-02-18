<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
        $this->another_js = "<script src='" . base_url() . "assets/js/login.js'></script>";
        $this->parser->parse('login', $this->data);
	}
}
