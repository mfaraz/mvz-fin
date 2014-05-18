<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_back extends CI_Controller {

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
		$data['title'] = "Home";
		// echo '<pre>'; print_r($this->session->userdata('name')); echo '<pre/>';
		// die();
		
		//var_dump($this->session->userdata('name'));
		//die();
		
		$data['message'] = "";
		$data['personname'] = $this->session->userdata('name')->name;
		$data['data_in'] = $this->m_back->get_DataIncome();
		$data['data_bu'] = $this->m_back->get_DataBudget();
		$data['data_ex'] = $this->m_back->get_DataExpense();
		loadView($data,'v_home');
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */