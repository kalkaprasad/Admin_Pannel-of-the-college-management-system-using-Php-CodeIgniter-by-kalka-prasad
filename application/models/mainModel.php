<?php

/**
 * 
 */
class mainModel extends CI_model
{
	
	// fetch the class details...
	public function getClassdetails()
	{

		$value= $this->db->get("class");

		return $value->result();

	}

	//   insert the new data of admiton form

	public function newAdmitondata($data)

	{

	$status=$this->db->insert("studentdetails",$data);
	return $status;

	}


	// for fetch the total number of student refistred.

	public function totalregistredstudent()
	{
$total=$this->db->count_all('studentdetails');

return $total;


	}

	// fetching the all details from the database...


	public function fetchregistredstudents()
	{

		$data=$this->db->get("studentdetails");
		return $data->result();// result function return the all data into array form
	}


//delete student
	public function deletestudent($regId)
	{$this->db->where('registration_number',$regId);
		$deldata= $this->db->delete("studentdetails");
		return $deldata;
	}


	/// parendts details add..


	public function parentsadd($parentdata)
	{


$status=$this->db->insert('gurdiandetails',$parentdata);
return $status;

	}

	// teacher addd

	public function teacheradd($teacherdata){


$status=$this->db->insert('teacherdetails',$teacherdata);

return $status;


	}



	// fee payment accept

	public function feeaccept($feedata)
	{
$status=$this->db->insert('feepayment',$feedata);


return $status;


	}
///

	/// repoercard add details


	public function reportcardadd($reportdata)
	{

$status=$this->db->insert('report_card',$reportdata);

return $status;
	}


	// fetch data of parents

	public function fetchparent()
	{


		$data =$this->db->get('gurdiandetails');

		return $data->result();
	}

	// delete data of parent


	public function deleteparent($id)
	{

$this->db->where('id',$id);
$check=$this->db->delete('gurdiandetails');
return $check;

	}


// delete data from the parentdetails table


	//fetch teacher data

public	function  fecthTeacherdata()
{

$data=$this->db->get('teacherdetails');
return $data->result();
}

// delete teacher

public function deleteteacherdata($id)
{
$this->db->where('id',$id);

$check= $this->db->delete('teacherdetails');
return $check;

}

// fetch data of the fees details
public function fetchfeedata()
{

$data=$this->db->get('feepayment');
return $data->result();
}

///end

// delete the  feedata

public function deletefeedata($id)
{

$this->db->where('id',$id);
$check= $this->db->delete('feepayment');
return $check;
}

// end

public function fetchreportdata()
{

$data=$this->db->get('report_card');
return $data->result();
}

// end


public function deletereport($id)
{

$this->db->where('id',$id);
$check= $this->db->delete('report_card');
return $check;
}


// end


public function checkfeess($email)
{

	$this->db->where('email',$email);
	$data = $this->db->get('feepayment');
	return $data->result();
}



}

?>