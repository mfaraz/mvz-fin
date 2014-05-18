<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function loadViewLogin($data, $view)
	{
		$CI =& get_instance();
		
		$CI->load->view('v_all_top_login',$data);
		$CI->load->view($view,$data);
		$CI->load->view('v_all_bot_login',$data);
	}
	
	function loadView($data, $view)
	{
		$CI =& get_instance();
		
		$CI->load->view('v_all_top',$data);
		$CI->load->view($view,$data);
		$CI->load->view('v_all_bot',$data);
	}
	
	function checkSession($data, $view)
	{
	
	}
	
?>