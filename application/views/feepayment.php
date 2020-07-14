<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sbsstc college</title>

  <link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assests/css/fees.css") ?>">
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assests/script/jquery.js'); ?>"></script>
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
       
        <li><a href="<?php echo base_url()?>index.php/manage/parentPannel">
          <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Parent pannel</span>
          </a></li>

           <li><a href="<?php echo base_url();?>index.php/manage/dashboard">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Student pannel</span></a></li>
        <li><a href="<?php echo base_url();?>index.php/manage/teacherPannel">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Teacher pannel</span>
          </a></li>
        <li><a href="<?php echo base_url() ?>index.php/manage/feepayment"class="active">
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
  <div class="card-body"data-toggle="modal" data-target="#feesadd">
  <center> <img src="<?php echo base_url("assests/image/collectfee.png")?>"id="imgIcon"></center>
   <center><p class="card-text">Accept fees</p></center> 
    
  </div>
</div>

  </div>

<!--  Show Students -->

    <div class="col sm-4">
<div class="card"id="card2" style="width: 18rem;">
  <div class="card-body"data-toggle="modal" data-target="#checkfees">
   <center> <img src="<?php echo base_url("assests/image/question.png")?>"id="imgIcon"></center>
   <center> <p class="card-text">check Fees</p></center>
  </div>

</div>

  </div>
<!-- student registred -->
<a href="<?php echo base_url(); ?>index.php/manage/showfeesdetails">
    <div class="col sm-4">
<div class="card"id="card3" style="width: 18rem;">
  <div class="card-body">
 <center> <img src="<?php echo base_url("assests/image/paysallery.jpg")?>"id="imgIcon"></center>
   <center> <p class="card-text"style="">show Accepted payment</p></center>

  </div>
</div>

  </div>
</a>

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
<div class="modal fade" id="feesadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Aceept college fee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



     
       
<!-- 
     form start -->
        <form method="post"action="<?php echo base_url(); ?>index.php/manage/feeaccept">
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
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1"required>
  </div>

 

  <div class="form-group">
    <label for="exampleInputPassword1">phone</label>
    <input type="Number" name="phone" class="form-control" id="exampleInputPassword1"required>
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">class</label>
    <input type="text" name="class" class="form-control" id="exampleInputPassword1"required>
  </div>


 <div class="form-group">
    <label for="exampleInputPassword1">payment refNo.</label>
    <input type="text" name="refNo"value="<?php $random =rand(); $ref=$random; echo "Pay";echo $ref; ?>" class="form-control" id="exampleInputPassword1"readonly>
  </div>


    <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputPassword1"required>
  </div>

 <div class="form-group">
    <label for="exampleInputPassword1">feeAmout</label>
    <input type="number" name="feeamount" class="form-control" id="exampleInputPassword1"required>
  </div>



 
<center> <button type="submit" class="btn btn-primary">Submit</button></center>

 </form>


 
  
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



<!-- check fees model start -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="checkfees" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Check fees details. </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-12">
            <div class="form-group">
             
                
                <input class="form-control mr-sm-2" type="search" id="regino" placeholder="Enter Student Email id" aria-label="Search"required>

            </div>
          </div>
        </div>
       
<!-- search btn -->
        <div class="form-group">
          <center>
            <button type="button" id="search"class="btn btn-primary">Search</button>
          </center>  
          </div>
         <!--  search btn close -->

<!-- jquery with ajax start for fetch data -->
         <div class="row">
           <div class="col-4">
           <b> <p>Name</p></b>
             
           </div>
           <div class="col-4">
              <p id="name"></p>
           </div>
         </div>  

         
         <div class="row">
           <div class="col-4">
           <b> <p>Father Name</p></b>
             
           </div>
           <div class="col-4">
              <p id="father"></p>
           </div>
         </div> 
         <div class="row">
           <div class="col-4">
           <b> <p>Payment RefNumber</p></b>
             
           </div>
           <div class="col-4">
              <p id="pay"></p>
           </div>
         </div> 
         <div class="row">
           <div class="col-4">
           <b> <p>Amount</p></b>
             
           </div>
           <div class="col-4">
              <p id="amount"></p>
           </div>
         </div> 
         <div class="row">
           <div class="col-4">
           <b> <p>Status</p></b>
             
           </div>
           <div class="col-4">
             <b> <p id="Status"></p></b>
           </div>
         </div> 
         


<script type="text/javascript">

$(document).ready(function(){


 

    // $('#search').click();
   
// if($("#search").trigger('click')){

//       alert('alert');
//      } 

    
     
//   }

function kptech(){


 setTimeout(function(){
        $('#search').trigger('click');
    },1000);

}

// main code
  $('#search').click(function()
  {

  var regno=  $('#regino').val();
  // if(regno=='')
  // {

  //   alert('value is empty');
  // }
  kptech();

var urls='<?php echo base_url();?>index.php/manage/checkfees';
setInterval(urls,100);

   $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'post',
        data:{id:regno},
        success:function(data)  
        {
          $("#name").html(data[0]['name']); 
             $("#father").html(data[0]['fathername']); 
              $("#pay").html(data[0]['paymentRefno']); 
               $("#amount").html(data[0]['feeAmount']);
               var dv= data[0]['feeAmount'];
               if(dv=='')
               {
                $("#amount").html('0');
                 $("#Status").html('Pending');
                  $("#Status").css("color","red","font-weight","100");
                  $("#amount").css("color","red","font-weight","100");
               }

               else
               {
                 $("#Status").html('Paid');
                  $("#Status").css("color","blue","font-weight","100");
               }
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
  });

});



</script>

<!-- jquery with ajax  -->




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- check fees model end -->
</body>
</html>