<?php
class member_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
        $this->checklogin();
    }
    
    public function checklogin()
    {
        if($this->uri->segment(1) == 'login')
        {
            
        }
        else
        {
             redirect('login');
        }
       
    }

}
