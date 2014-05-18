<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_back extends CI_Model {

	public function check_Login($user, $pass)
	{
		$sql = 	" 	select name
					from m_user 
					where 1=1 
						and username = ? 
						and password = ? 
					limit 0,1
				";
		
		$query = $this->db->query($sql, array($user, $pass));
		
		if($query->num_rows() > 0)
        {
			//return $query->result_array(); //returns the query result as a pure array
			//return $query->result(); //returns the query result as an array of objects
			return $query->row(); //returns a single result row
			//return $query->num_rows(); //return number of rows
			//return $query->num_fields(); //return number of fields
        }
        else
        {
            return false;
        }
	}
	
	public function get_DataIncome()
	{
		$sql = 	" 	select a.Nominal, b.Name, b.Color
					from t_income a 
						left join m_category_in b on a.id_category = b.id
				";
		
		$query = $this->db->query($sql);
		
		if($query->num_rows() > 0)
        {
			return $query->result_array(); //returns the query result as a pure array
			//return $query->result(); //returns the query result as an array of objects
			//return $query->row(); //returns a single result row
			//return $query->num_rows(); //return number of rows
			//return $query->num_fields(); //return number of fields
        }
        else
        {
            return null;
        }
	}
	
	public function get_DataBudget()
	{
		$sql = 	" 	select a.Nominal, b.Name, b.Color
					from t_budget a 
						left join m_category_out b on a.id_category = b.id
				";
		
		$query = $this->db->query($sql);
		
		if($query->num_rows() > 0)
        {
			return $query->result_array(); //returns the query result as a pure array
			//return $query->result(); //returns the query result as an array of objects
			//return $query->row(); //returns a single result row
			//return $query->num_rows(); //return number of rows
			//return $query->num_fields(); //return number of fields
        }
        else
        {
            return null;
        }
	}
	
	public function get_DataExpense()
	{
		$sql = 	" 	select a.Nominal, b.Name, b.Color
					from t_expense a 
						left join m_category_out b on a.id_category = b.id
				";
		
		$query = $this->db->query($sql);
		
		if($query->num_rows() > 0)
        {
			return $query->result_array(); //returns the query result as a pure array
			//return $query->result(); //returns the query result as an array of objects
			//return $query->row(); //returns a single result row
			//return $query->num_rows(); //return number of rows
			//return $query->num_fields(); //return number of fields
        }
        else
        {
            return null;
        }
	}
}