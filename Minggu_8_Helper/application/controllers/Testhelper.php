<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Author Faiz Muazzam
 */
class Testhelper extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'security', 'html', 'file');
	}

	public function index()
	{
		$this->load->view('view_helper');
	}
}
 ?>