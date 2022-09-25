<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['title'] = 'NEP-MEWA';
		$data['content'] = $this->load->view('home', $data, true);
		$this->load->view('master', $data);
		//$this->load->view('welcome_message');
	}
	
	public function about()
	{
		$data = array();
		$data['title'] = 'About NEP-MEWA';
		$data['content'] = $this->load->view('about', $data, true);
		$this->load->view('master', $data);
	}
	
	public function courses()
	{
		$data = array();
		$data['title'] = 'Available Courses';
		$data['content'] = $this->load->view('courses', $data, true);
		$this->load->view('master', $data);
	}
	
	public function contact()
	{
		$data = array();
		$data['title'] = 'Contact Us';
		$data['content'] = $this->load->view('contact', $data, true);
		$this->load->view('master', $data);
	}
	
	public function coursefee()
	{
		$data = array();
		$data['title'] = 'Course Fees';
		$data['content'] = $this->load->view('coursefees', $data, true);
		$this->load->view('master', $data);
	}
	
	public function downloadfeestructure() 
	{
		$path = file_get_contents(base_url()."downloads/feestructure");
		$name = "fees2022.jpg";
		force_download($name,$path);
	}
}
