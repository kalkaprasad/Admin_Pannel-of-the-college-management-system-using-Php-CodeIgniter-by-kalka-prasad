<?php

/**
 * 
 */
class upload extends CI_controller
{
	
	public function newAdmitiondata()
	{
	$name=$this->input->post('name');
	$fathername=$this->input->post('fathername');
	$mothername=$this->input->post('mothername');
	$registrationid=$this->input->post('registredId');
	$phone=$this->input->post('phone');
	$email =$this->input->post('email');
	$class=$this->input->post('class');
	$address=$this->input->post('address');
	$state=$this->input->post('state');
	$city=$this->input->post('city');
	$age=$this->input->post('age');
	$gender=$this->input->post('gender');
	$category=$this->input->post('category');

	$data =array("name"=>$name,"fathername"=>$fathername,"mothername"=>$mothername,"registration_number"=>$registrationid,"phone"=>$phone,"email"=>$email,"class"=>$class,"address"=>$address,"state"=>$state,"city"=>$city,"age"=>$age,"gender"=>$gender,"category"=>$category);
	$this->load->model('mainModel');
	$status= $this->mainModel->newAdmitondata($data);

	if($status==true)
	{
$token=1;
$status=$this->session->set_flashdata('status',$token);

  redirect(base_url().'index.php/manage/dashboard');
  

	}
	else
	{

		echo "failed";
	}
	


	}
	


}


?>