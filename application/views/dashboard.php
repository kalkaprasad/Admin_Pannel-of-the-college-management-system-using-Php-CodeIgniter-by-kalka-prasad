<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sbsstc college</title>

	<link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url("assests/css/card.css") ?>">

	<script type="text/javascript" src="<?php echo base_url("assests/script/bootstrap.min.js")  ?>"></script>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/css/bootstrap.min.css")?>">
	<script src="<?php echo base_url("assests/font/font.js") ?>"></script>
	<script src="<?php echo base_url("assests/script/jquerymin.js")?>"></script>

	

</head>
<body>
<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("imgMinus");
			});
		});
	</script>
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">College Management</div>
      <ul>
        <li><a href="#">
          <i class="fas fa-search"></i></a></li>
        <li><a href="#">
          <i class="fas fa-bell"></i>
          </a></li>
        <li><a href="#"data-toggle="modal"data-target="#exampleModalCenter">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="#"class="active">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Student pannel</span></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/manage/parentPannel">
          <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Parent pannel</span>
          </a></li>
        <li><a href="<?php echo base_url(); ?>index.php/manage/teacherPannel">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Teacher pannel</span>
          </a></li>
        <li><a href="<?php echo base_url() ?>index.php/manage/feepayment">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Fees pannel</span>
          </a></li>
        <li><a href="<?php echo base_url() ?>index.php/manage/reportcard">
          <span class="icon"><i class="fa fa-list-alt"></i></span>
          <span class="title">Reportcard</span>
          </a></li>
    </ul>
  </div>
  
 <!--  main container -->
  <div class="main_container">

  <!-- 	bootrap container -->
    <div class="container">
    <!-- 	row -->
<div class="row">
  <div class="col-4">
  	<!-- New Admition -->
<div class="card" id="card1"style="width: 18rem;"data-toggle="modal" data-target="#exampleModalLong">
  <div class="card-body">
  <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center>
   <center><p class="card-text">New Admition</p></center> 
    
  </div>
</div>

  </div>

<!--  Show Students -->

    <div class="col sm-4">
<div class="card"id="card2" style="width: 18rem;">
  <a href="<?php echo base_url()?>index.php/manage/showstudents">
<div class="card-body">
   <center> <img src="<?php echo base_url("assests/image/show.png")?>"id="imgIcon"></center>
   </a>

   <center> <p class="card-text">Show Students</p></center>
  </div>

    
</div>

  </div>
<!-- student registred -->
    <div class="col sm-4">
<div class="card"id="card3" style="width: 18rem;">
  <div class="card-body">
   <center>    <h6 class="card-subtitle mb-2 "style="margin-top: 30px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;"> <?php echo $kalka;?></h6></center>
   <center> <p class="card-text"style="margin-top: 35px">Registred students</p></center>

  </div>
</div>

  </div>

</div>

    </div>
  </div>
</div>


<!-- model  for user -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Admin details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="row">
          <div class="col-4">
              <label>Name</label> 
          </div>
          <div class="col-8">
             <input class="form-control" type="text" placeholder="Your name ">
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            
        <label style="margin-top: 10px;">Email</label>
          </div>
          <div class="col-8"style="margin-top: 10px;">
             <input class="form-control" type="text" placeholder="Your Email">
          </div>
        </div>

<div class="row">
  
   <div class="col-8">
        <center>
          <button type="button" class="btn btn-success"style="margin-top: 10px">update</button>
        </center>
        
        </div>
</div>
       
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
       <a href="<?php echo base_url(); ?>index.php/manage/logout">  <button type="button" class="btn btn-primary"data-dismiss="model">Logout</button></a>
      </div>
    </div>
  </div>
</div>
<!-- 
user model end -->

<!-- new admition model -->


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>
 -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h5 class="modal-title" id="exampleModalLongTitle">New Admition form</h5></center> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- admition form -->

      <form method="post"action="<?php echo base_url() ?>index.php/upload/newAdmitiondata">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
   <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Father name</label>
    <input type="text" name="fathername" class="form-control" id="exampleInputPassword1"required>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Mother Name</label>
    <input type="text" name="mothername" class="form-control" id="exampleInputPassword1"required>
  </div>

 <div class="form-group">
    <label for="exampleInputPassword1">Registration Number</label>

<?php
// echo(rand() . "<br>");
$randomvalue=rand();

?>

    <input type="text" class="form-control" name="registredId"value="<?php echo $randomvalue=rand(); ?>"id="exampleInputPassword1"readonly>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">phone</label>
    <input type="Number" name="phone" class="form-control" id="exampleInputPassword1"required>
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1"placeholder="optional"required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Class</label>
      <select class="form-control form-control-sm" name="class"required>
        <?php  
          foreach ($classdata as $row) {
            echo "<option>".$row->class."</option>";


          }
        ?>
</select>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address"class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">State</label>
    <input type="text" name="state" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">City</label>
    <input type="text" name="city" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="Number"name="age" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="form-group">

<label for="exampleInputPassword1">Gender</label>
    <select class="form-control form-control-sm" name="gender"required>
  <option>Male</option>
   <option>Female</option>
    <option>other</option>
</select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select class="form-control form-control-sm"name="category"required>
  <option>Genral</option>
   <option>OBC</option>
    <option>ST/SC</option>
</select>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Photo</label>
  <input type="file" class="form-control-file" id="exampleFormControlFile1"accept="image/*"required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- admition form end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- new admition model end -->

	
</body>
</html>