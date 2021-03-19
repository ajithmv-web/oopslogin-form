<?php
session_start();
include_once('connection.php');
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
$uname=$_POST['username'];
$pasword=md5($_POST['password']);
$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['FullName'];
echo "<script>window.location.href='welcome.php'</script>";
}
else
{
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="css/jquery-1.11.1.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
</head>
<body>
  

<main style="position: relative;">




<div class="row">

    <div class="col-sm-4 col-md-4 col-lg-4"> 
     </div>
<div class="col-sm-4 col-md-4 col-lg-4"> <br>
       <div class="card "> <div class="col-12 new-user">

         
<form class="form-horizontal" action='' method="POST" >
<div class=>
<div class="icon1">

<form class="" action='' method="POST" >

<div id="legend" align="center">
<center> <h1 style="color: #ff0066;"><b style="color: #ff9900"
>S</b>ign up</h1></center>
<legend></legend>

</div>
<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="enter user nsme"  required="true">
      </div>
    </div>


    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="enter password"  required="true">
      </div>
    </div>
 

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit" name="signin">Signin</button>
      </div>
    </div>

 <div class="control-group">
      <!-- Button -->
      <div class="controls">
      Not Registered yet? <a href="index.php">Register Here</a>
      </div>
    </div>

 

  </div><br>
          </form>
          



               </div>


<script type="text/javascript">

</script>
</body>
</html>
