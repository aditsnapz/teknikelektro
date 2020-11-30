<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnnouncementModel');
    }

	public function index()
	{
		$from_email = "aditsnapzcz2@gmail.com"; 
		$to_email = "aditsnapzcz@gmail.com";

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => $from_email,
			'smtp_pass' => 'aditadit',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");   

		$this->email->from($from_email, 'adittama'); 
		$this->email->to($to_email);
		$this->email->subject('Test Pengiriman Email'); 
		$this->email->message('Coba mengirim Email dengan CodeIgniter.'); 
		
	
		if($this->email->send()){
			echo 'oke';
		}else {
				echo 'gagal'; 
		} 

	}
    

}
