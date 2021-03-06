<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sbsstc college</title>

  <link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assests/css/fees.css") ?>">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
       <li><a href="#"data-toggle="modal"data-target="#exampleModalCenter">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
       
           <li><a href="<?php echo base_url();?>index.php/manage/dashboard">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Student pannel</span></a></li>


        <li><a href="<?php echo base_url()?>index.php/manage/parentPannel"class="active">
          <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Parent pannel</span>
          </a></li>

        <li><a href="<?php echo base_url();?>index.php/manage/teacherPannel">
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
    <div class="container"style="overflow-x: auto;
    white-space: nowrap;width:2500px;left: 0;
    right: 0;
    top: 0;">
    <!--  row -->

    <div class="row">
  <b> <label> Teacher's details: </label></b>
<table class="table table-striped"style="margin-top: 20px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">name</th>
      <th scope="col">Father name</th>
      <th scope="col">Email</th>
         <th scope="col">Phone</th>
          <th scope="col">Class Assign</th>
           <th scope="col">Teach Subject</th>
           <th scope="col">Qulification</th>
           <th scope="col">Address</th>
           <th scope="col">State</th>
           <th scope="col">Gender</th>
             <th scope="col">Action</th>
    </tr>
  </thead>
    <?php 
    foreach($teacherdata as $row)
     {
      echo "<tr>";
       echo "<th scope ='row'>".$row->id."</th>";
        echo "<th>".$row->name."</th>";
        echo "<th>".$row->fathername."</th>";
              echo "<th>".$row->email."</th>";
                echo "<th>".$row->phone."</th>";
                  echo "<th>".$row->classAssign."</th>";
                    echo "<th>".$row->teachSubject."</th>";
                      echo "<th>".$row->qulification."</th>";
                      echo "<th>".$row->address."</th>";
                        echo "<th>".$row->state."</th>";
                          echo "<th>".$row->gender."</th>";
                        echo "<th>";
                       echo "<href=''> <i class='fa fa-edit'title='update'></i></a>";
                       echo "<a href='deleteteacher?id=".$row->id."'> <i class='fa fa-1x fa-trash'style='color:red;'title='Delete'></i></a>";
                        echo "</th>";
                        echo "</tr>";

    }
    ?>
    
</table>
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
</body>
</html>