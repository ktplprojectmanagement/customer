<?php
class Demo extends CI_Controller {

    public function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

    function index()
    {
        echo "hi";die();
        
        
        
    }
}
?>