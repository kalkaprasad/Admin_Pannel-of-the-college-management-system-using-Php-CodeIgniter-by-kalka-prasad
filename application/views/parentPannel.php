<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sbsstc college</title>

  <link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assests/css/parent.css") ?>">
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url("assests/script/bootstrap.min.js")  ?>"></script>
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
        <li><a href="#"data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
       
        <li><a href="#"class="active">
          <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Parent pannel</span>
          </a></li>

           <li><a href="<?php echo base_url();?>index.php/manage/dashboard">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Student pannel</span></a></li>
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

  <!--  bootrap container -->
    <div class="container">
    <!--  row -->
<div class="row">
  <div class="col-4">
    <!-- New Admition -->
<div class="card" id="card1"style="width: 18rem;">
  <div class="card-body"data-toggle="modal" data-target="#parentadd">
  <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center>
   <center><p class="card-text">Add Gurdian</p></center> 
    
  </div>
</div>

  </div>

<!--  Show Students -->
<a href="<?php  echo base_url();?>index.php/manage/showparents">
    <div class="col sm-4">
<div class="card"id="card2" style="width: 18rem;">
  <div class="card-body">
   <center> <img src="<?php echo base_url("assests/image/show.png")?>"id="imgIcon"></center>
   <center> <p class="card-text">Show Gurdian</p></center>
  </div>

</div>

  </div>
  </a>
<!-- student registred -->
    <div class="col sm-4">
<div class="card"id="card3" style="width: 18rem;">
  <div class="card-body"data-toggle="modal" data-target="#sendnotificaton">
 <center> <img src="<?php echo base_url("assests/image/notification.png")?>"id="imgIcon"></center>
   <center> <p class="card-text"style="">Send Notification</p></center>

  </div>
</div>

  </div>

  <div class="divider"></div>

</div>

    </div>
  </div>
</div>

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

<!-- add teacher model start -->

<!-- Modal -->
<div class="modal fade" id="parentadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add parents Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<!-- 
     form start -->
        <form method="post"action="<?php echo base_url();?>index.php/manage/parentregi">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
   <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student name</label>
    <input type="text" name="studentname" class="form-control" id="exampleInputPassword1"required>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1"required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">phone</label>
    <input type="Number"name="phone"  class="form-control" id="exampleInputPassword1"required>
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Occupation</label>
    <input type="text" name="occupation" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sallery</label>
    <input type="Number" name="sallery" class="form-control" id="exampleInputPassword1"required>
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
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputPassword1"required>
  </div>

<center> <button type="submit" class="btn btn-primary">Submit</button></center>

 </form>
<!--  form end -->
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
    
      </div>
    </div>
  </div>
</div>
<!-- 
user model end -->

<!-- add teacher model end -->


<!-- send the parents notification start  -->



<div class="modal fade" id="sendnotificaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Send Notification.</h5>
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
             <input class="form-control"id="name" type="text" placeholder="Your name "required>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            
        <label style="margin-top: 10px;">Email</label>
          </div>
          <div class="col-8"style="margin-top: 10px;">
             <input class="form-control" id="email"type="text" placeholder="Your Email"required>
          </div>
        </div>
            <div class="row">
          <div class="col-4">
            
        <label style="margin-top: 10px;">Message</label>
          </div>
          <div class="col-8"style="margin-top: 10px;">
           <textarea rows="4"class="form-control" id="message"cols="50" name="comment" form="usrform"required>
</textarea>
          </div>
        </div>

<div class="row">  
   <div class="col-8">
        <center>
          <button type="button" id="send" class="btn btn-success"style="margin-top: 10px">Send</button>
        </center>

        <p id="status"></p>
        
        </div>

<div class="progress" style="margin: 20px;">
  
</div>
      <!--   <div class="spinner-grow"id="loader" style="width: 3rem; height: 3rem;margin-top: 10px" role="status">
  <span class="sr-only">Loading...</span>

</div> -->
</div>

<script type="text/javascript">
          
$(document).ready(function()
{
  $('#loader').hide();

$('#send').click(function()
{
  var name=$('#name').val();
  var email=$('#email').val();
  var message=$('#message').val();

 // $('#loader').css('display','all')
  if(name=='')
  {

    alert('Please fill Name fields');
  }
  else if(email=='')
  {

    alert('Please fill email fields');
  }  
  else if(message=='')
  {

    alert('Please fill message  fields');
  }

  else
  {
 

     
     // $('.loader').show();
    //ajax start 
   $.ajax({
        type:'ajax',
        url:'<?php echo base_url();?>index.php/manage/sendMail', 
        async:false,  
        dataType:'json',
        type:'post',
        data:{'name':name,'email':email,'message':message},
        success:function(data)  
        {
          if(data=="success")
          {
$('#status').html('successfully email sent');
$('#status').css('margin-top','10px','color','blue');
// alert('successfully');

            
          }
          else{

           $('#status').html('Email sending faild');
           $('#status').css('margin-top','10px','color','red');
 
           alert('faild');
          }
        
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });

   // ajax stop

  }
  
});

});
        </script>

   </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
      
      </div>
    </div>
  </div>
</div>


<!--  end -->












</body>
</html>