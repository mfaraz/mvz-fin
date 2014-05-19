<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_loginlogout extends CI_Controller {

	function Form()
	{
		parent::Controller();   
	}

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('m_back');
		$this->load->helper('template');
	}
	
	public function index()
	{
		$data['title'] = "Login";
		$data['status'] = $this->session->userdata('status');
		$data['nama'] = $this->session->userdata('nama');
		$data['message'] = "";
		
		if(!($data['status']))
		{
			loadViewLogin($data,'v_login');
		}
		else
		{
			redirect('/home', 'refresh');
		}
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$name = $this->m_back->check_Login($username,$password);
		
		$data = "";
		
		if($name != null)
		{
			$this->session->set_userdata(array(
							'name' 		=> $name,
							'status' 	=> TRUE
					));
			redirect('/home', 'refresh');
		}
		else 
		{
			$data['message'] = "Login Failed !";
			loadViewLogin($data,'v_login');
		}
		
		
	}
	
	public function logout()
	{	
		$data['message'] = "";
		$this->session->sess_destroy();
		
		redirect('/', 'refresh');
		//loadViewLogin($data,'v_login');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */