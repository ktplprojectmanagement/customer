<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emaildemo extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('common_model');
	}
public function setemail()
{
$email="demo.appraisel@gmail.com";
$subject="some text";
$message="some text";
$this->sendEmail($email,$subject,$message);
}
public function sendEmail($email,$subject,$message)
    {

    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'employee.kritva@gmail.com', 
      'smtp_pass' => 'kritva@123', 
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );


          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('employee.kritva@gmail.com');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);
            //$this->email->attach('C:\Users\xyz\Desktop\images\abc.png');
          if($this->email->send())
         {
          echo 'Email send.';
         }
         else
        {
         show_error($this->email->print_debugger());
        }

    }
}
?>