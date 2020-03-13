<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function dash()
	{
		$this->load->view('layout/header.php');
		$this->load->view('Admin/home_page.php');
		$this->load->view('layout/footer.php');
    }

    public function officers_management()
	{
		$this->load->view('layout/header.php');
		$this->load->view('Admin/officers_management.php');
		$this->load->view('layout/footer.php');
    }
    
}
