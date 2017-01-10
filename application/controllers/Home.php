<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
    
	public function index()
	{
		$member = $this->session->userdata('member');
        print_r($member);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */