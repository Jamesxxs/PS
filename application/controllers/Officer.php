<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Officer extends CI_Controller
{

    
    public function dash()
    {
        $this->load->view('Officer/officer_header.php');
		$this->load->view('Officer/officer_home.php');
		$this->load->view('layout/footer.php');
    }

    public function manage_Survey()
    {
        $this->load->view('Officer/officer_header.php');
		$this->load->view('Officer/survey_manage.php');
		$this->load->view('layout/footer.php');
    }

    public function edit_topic()
    {
        $this->load->view('Officer/officer_header.php');
		$this->load->view('Officer/topic_edit.php');
		$this->load->view('layout/footer.php');
    }

    public function topic_officer()
    {
        $this->load->view('Officer/officer_header.php');
		$this->load->view('Officer/topic.php');
		$this->load->view('layout/footer.php');
    }

    public function manage_user()
    {
        $this->load->view('Officer/officer_header.php');
		$this->load->view('Officer/user_manage.php');
		$this->load->view('layout/footer.php');
    }
}
