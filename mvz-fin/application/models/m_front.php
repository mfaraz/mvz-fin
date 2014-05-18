<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public function check_Login($user, $pass)
	{
		$sql = 	" select * from m_user where 1=1 and username = '".$user."' and password = '".$pass."' limit 0,1";
		
		$query = $this->db->query($sql);
		
		//$result = $query->result_array(); //return data array list
		//$result = $query->result(); //return data as 1 value
		$result = $query->num_rows(); //return number of rows
		
		return $result;
	}
	
	
}