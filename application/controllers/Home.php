<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/home_page.php');
		$this->load->view('layout/footer.php');
	}

	public function directory()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/directory.php');
		$this->load->view('layout/footer.php');
	}

	public function timeline()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/timeline.php');
		$this->load->view('layout/footer.php');
	}

	public function favourites()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/favorites.php');
		$this->load->view('layout/footer.php');
	}

	public function profile()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/profile.php');
		$this->load->view('layout/footer.php');
	}

	public function todo_list()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/todo_list.php');
		$this->load->view('layout/footer.php');
	}

	public function user_detail()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/user_detail.php');
		$this->load->view('layout/footer.php');
	}

	public function login()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/login.php');
		$this->load->view('layout/footer.php');
	}

	public function article($comment)
	{
		
		$data['comment'] = $comment;
		$this->load->view('layout/header.php');
		$this->load->view('User/article', $data);
		$this->load->view('layout/footer.php');
	}

	public function search_result()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/search_result.php');
		$this->load->view('layout/footer.php');
	}

	public function sign_up()
	{
		$this->load->view('layout/header.php');
		$this->load->view('User/sign_up.php');
		$this->load->view('layout/footer.php');
	}
}
