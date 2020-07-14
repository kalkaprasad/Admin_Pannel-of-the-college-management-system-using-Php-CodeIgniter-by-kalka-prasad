<?php

/**
 * 
 */
class manage extends CI_Controller
{

	public function index()

	{
		if($this->session->userdata('username')!==null)
		{
			redirect(base_url().'index.php/manage/dashboard');

		}
		else{
			$this->load->view('index');
		}
		
	}


public function logincheck()
{
$email=$this->input->post('email');
$password=$this->input->post('password');

$this->load->model('loginModel');
$token =$this->loginModel->checklogin($email,$password);
if($token)
{

 $session_data = array('username' =>$email);
 $this->session->set_userdata($session_data);

redirect(base_url().'index.php/manage/dashboard');
}
else
{
 redirect(base_url().'index.php/manage/index');

}




}

	public function dashboard()
	{

if($this->session->userdata('username')!==null)	
{
	$check =$this->session->flashdata('status');

	if($check==1)
	{
		echo "<script>alert('data inserted');</script>";
	}
   $this->load->model('mainModel');
   $value= $this->mainModel->getClassdetails();
   $total= $this->mainModel->totalregistredstudent();
   // echo"<script> alert('$total');</script>";

  $data = array(
    'classdata' => $value,
    'kalka' => $total,
  
);
   $this->load->view('dashboard',$data);


}	
else
{

	redirect(base_url().'index.php/manage/index');
}

   

	}



	public function parentPannel()
	{

		if($this->session->userdata('username')!=null)
		{

			$this->load->view('parentPannel');
		}
		else
		{

			redirect(base_url().'index.php/manage/index');
		}



	}

	public function teacherPannel()
	{

		if($this->session->userdata('username')!=null)
		{

			$this->load->view('teacherPannel');
		}
		else
		{

			redirect(base_url().'index.php/manage/index');
		}

		
	}

	public function feepayment()
	{

		if($this->session->userdata('username')!=null)
		{

			$this->load->view('feepayment');
		}
		else
		{

redirect(base_url().'index.php/manage/index');

		}

		
	}


	public function reportcard()
	{

		if($this->session->userdata('username')!=null)
		{


			$this->load->view('reportcard');
		}
		else
		{

			redirect(base_url().'index.php/manage/index');
		}

		
	}

	/// for show students details
	public function showstudents()

	{
		$this->load->model('mainModel');
	$data=$this->mainModel->fetchregistredstudents();
	$fetchdata=array(
		'studata'=>$data);
		$this->load->view('showstudents',$fetchdata);
	}

	// delete students...


	public function deleteStudent()
	{

	$regisId= $this->input->get('regsid');
	$this->load->model('mainModel');
	$status=$this->mainModel->deletestudent($regisId);
	if($status==true)
	{
		echo "<script>window.location.href='showstudents'</script>";
	}
	else
	{
echo "error";
	}


	}


	// parent registered.



	public function parentregi()
	{

$name=$this->input->post('name');
$studentname=$this->input->post('studentname');
$email=$this->input->post('email');
$phone=$this->input->post('phone');
$occupation=$this->input->post('occupation');
$sallery=$this->input->post('sallery');
$gender=$this->input->post('gender');
$address=$this->input->post('address');

$this->load->model('mainModel'); // load main model

$data=array('name'=>$name,
'studentname'=>$studentname,
'email'=>$email,
'phone'=>$phone,
'occupation'=>$occupation,
'sallery'=>$sallery,
'gender'=>$gender,
'address'=>$address
);
 $status =$this->mainModel->parentsadd($data);

 if($status==true)
 {

 	echo "<script>window.location.href='parentPannel'</script>";
 }
 else{

 	echo "failed";
 }


	}

	// teacher add

public function teacheradd(){

$this->load->model('mainModel');

$name=$this->input->post('name');
$fathername=$this->input->post('fathername');
$email=$this->input->post('email');
$phone=$this->input->post('phone');
$assignclass=$this->input->post('assignclass');
$teachingsubject=$this->input->post('teachingsubject');
$qualification=$this->input->post('qualification');
$gender=$this->input->post('gender');
$state=$this->input->post('state');
$address=$this->input->post('address');

$data=array(
'name'=>$name,
'email'=>$email,
'phone'=>$phone,
'gender'=>$gender,
'state'=>$state,
'address'=>$address,
'qulification'=>$qualification,
'classAssign'=>$assignclass,
'teachSubject'=>$teachingsubject,
'fathername'=>$fathername);

$status=$this->mainModel->teacheradd($data);
if($status==true)
{

	echo "<script>window.location.href='teacherPannel'</script>";
}
else
{

	echo "failed";
}

}



// feepayment  


public function feeaccept()
{


$this->load->model('mainModel');

$name=$this->input->post('name');
$fathername=$this->input->post('fathername');
$email=$this->input->post('email');
$phone=$this->input->post('phone');
$class=$this->input->post('class');
$refNo=$this->input->post('refNo');
$addres=$this->input->post('address');
$feeamount=$this->input->post('feeamount');

$data= array(
'name'=>$name,
'fathername'=>$fathername,
'email'=>$email,
'phone'=>$phone,
'class'=>$class,
'paymentRefno'=>$refNo,
'feeAmount'=>$feeamount,
'address'=>$addres
);

$check=$this->mainModel->feeaccept($data);
if($check==true)
{

	echo "<script>window.location.href='feepayment'</script>";
}
else
{
	echo "failed";
}

}

//feeamount end
// reportcar details add start


public function reportcardadd()
{

$this->load->model('mainModel');

$name=$this->input->post('name');
$fathername=$this->input->post('fathername');
$mothername=$this->input->post('mothername');
$class=$this->input->post('class');
$rollno=$this->input->post('rollno');
$totalmark=$this->input->post('totalmark');
$obtainmark=$this->input->post('obtainmark');
$Percentage=$this->input->post('Percentage');
$data=array(
'name'=>$name,
'class'=>$class,
'roll_no'=>$rollno,
'whole_mark'=>$totalmark,
'obtent_mark'=>$obtainmark,
'percentage'=>$Percentage,
'fathername'=>$fathername,
'mothername'=>$mothername
);
$check=$this->mainModel->reportcardadd($data);
if($check==true)
{

	echo "<script>window.location.href='reportcard'</script>";
}
else
{
	echo "something error";
}

}
// reportcar details add end 


// show parents 

public function showparents()
{

$this->load->model('mainModel');

 $data['parentdata']= $this->mainModel->fetchparent();

$this->load->view('showparents',$data);
}

// end show parents..


/// delet parents 
	public function deleteparentdata()
	{

$id=$this->input->get('id');
$this->load->model('mainModel');
$status=$this->mainModel->deleteparent($id);
if($status==true)
{

echo "<script>window.location.href='showparents'</script>";
}
else
{

echo "failed";
}

	}


// delete parent end


	// show teacher start

public function fetchteacherdata()
{

$this->load->model('mainModel');
$data['teacherdata']=$this->mainModel->fecthTeacherdata();

$this->load->view('showteachers',$data);

}

// end show teacher data

// start method for delete the data

public function deleteteacher()
{

$id=$this->input->get('id');
$this->load->model('mainModel');
$statu=$this->mainModel->deleteteacherdata($id);
if($statu==true)
{

echo "<script>window.location.href='fetchteacherdata'</script>";
}
else
{
	echo "failed";
}

}

// end delete data from the teacher..

public function showfeesdetails()
{
	$this->load->model('mainModel');

	$data['feesdata']=$this->mainModel->fetchfeedata();

	$this->load->view('showfeespay',$data);
}
/// end


public function delerefeedata()
{
$this->load->model('mainModel');
$id=$this->input->get('id');
$status= $this->mainModel->deletefeedata($id);
if($status==true)
{

	echo "<script>window.location.href='showfeesdetails'</script>";
}
else
{

	echo "failed";
}
}
//end

public function fetchreportcarddata()
{
$this->load->model('mainModel');
$data['resultdata']=$this->mainModel->fetchreportdata();
	$this->load->view('showreportcard',$data);
}

// end


public function deletereporcard()
{

	$this->load->model('mainModel');
	$id=$this->input->get('id');

	$status= $this->mainModel->deletereport($id);
	if($status==true)
	{

		echo "<script>window.location.href='fetchreportcarddata'</script>";
	}
	else
	{

		echo "failed";
	}

}

// check feess

public function checkfees()
{

	$email=$this->input->post('id');
	$this->load->model('mainModel');
	$data =$this->mainModel->checkfeess($email);
	echo json_encode($data);



}

// parent email


public function sendMail()
{

$useremail=$this->input->post('email');
$username=$this->input->post('name');
$usermesssage=$this->input->post('message');
	$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'ab@gmail.com',
    'smtp_pass' => '',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Email form the School</h1>';
$htmlContent .= '<p>  Dear parents "<?php echo $usermesssage  ?>" </p>';

$this->email->to($useremail);
$this->email->from('ab@gmail.com','Sbs college');
$this->email->subject('Message from the Sbs college');
$this->email->message($htmlContent);

//Send email
$check=$this->email->send();

if($check==true)
{
	$status="success";
	echo json_encode($status);
}
else{
	$status="failed";
	echo json_encode($status);
}

}



//for logout  


public function logout()
{
$this->session->sess_destroy();

        redirect(base_url().'index.php');
}

/////////////////////////////$this->load->library('encrypt');///////////to avoid spamming of mail////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////CHANGE SETTINGS IN GOGLE ACCOUNTS/////
////MY ACCOUNT>SIGNING IN TO GOOGLE(under sign in & security)/////
////SWITCH OFF 2 STEP VERIFICATION/////
////IN CONNECTED APPS N SITES>SWITCH ONN---"ALLOW LESS SECURE APPS"----/////



}


?>