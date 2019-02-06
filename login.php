<?php 
include('dbconnect.php');
session_start();
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $pwd = $_POST['pwd'];
  $login = mysqli_query($conn,"select * from login where (email = '$username' OR mobile = '$username' ) AND password = '$pwd'");
 
 
    foreach ($login as $doc)
    {
      if($doc['type'] == 'seller')
      {
      $_SESSION['email']= $doc['email'];
      
      header('Location: opts/seller/index.php');
    }
    else if($doc['type'] == 'catalog')
    {
      $_SESSION['email']= $doc['email'];
      
      header('Location: opts/catalog/index.php');

      # code...
    }
    else if($doc['type'] == 'buyer')
    {
      $_SESSION['email']= $doc['email'];
      
      header('Location: main.php');
    }
    }
  

}


?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background:blue;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom,#0AAFF1,#0584F2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom,#0AAFF1,#0584F2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#0584F2;}
.login-sec .copy-text a{color:#0584F2;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #0584F2;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #0584F2; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
</style>
</head>
<body>



<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
        <form class="login-form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" name="username" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" name="pwd" placeholder="">
  </div>
  
  
    <div class="form-check">
    
    <button type="submit" name="login" value="login" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>
<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://biinsights.in">Biinsights.in</a></div>
    </div>
    <div class="col-md-8 banner-sec">         
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      
        <div class="banner-text">
            <h2><button type="submit" class="btn btn-success">Register</button></h2>
            
        </div>  

    </div>
   
   
               
        
   
  </div>
</div>
</section>




</body>
</html>
