<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'controllers/'.FWEB.'/Home.php');

class Download extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
	}

	public function index()
	{
		echo "Download";
	}

} // End Class