<?php
class member_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
        $this->checklogin();
    }
    
    public function checklogin()
    {
        redirect('login');
    }

}
