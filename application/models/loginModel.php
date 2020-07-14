<?php


/**
 * 
 */
class loginModel extends CI_model
{
	
	public function checklogin($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$value = $this->db->get('admin');

		return $value->num_rows();
	}
	
}

?>