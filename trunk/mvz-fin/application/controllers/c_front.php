<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_front extends CI_Controller {

	function Form()
	{
		parent::Controller();   
	}

	function __construct()
	{
		parent::__construct();
		
		//$this->load->model('m_login');
		$this->load->helper('template');
	}

	public function index()
	{
		$data['session'] = $this->session->userdata('status');;
		
		if(!($data['session'])){ redirect('/', 'refresh'); }
		else
		{
			loadView($data,'v_home');
		}
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */