<!-- <style>
fieldset {
  background-color: #eeeeee;
}
</style> -->
<?php
include_once('connection.php');
$userdata=new DB_con();
if(isset($_POST['submit']))
{
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$uemail=$_POST['email'];
$pasword=md5($_POST['password']);
$sql=$userdata->registration($fname,$uname,$uemail,$pasword);
if($sql)
{
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    


    <link href="assests/style.css" rel="stylesheet">
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
 <script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data){
  $("#usernameavailblty").html(data);
  }
  });

}
</script>
<style>
  .new-user{
  padding: 40px !important;
}


</style>
</head>
<body>

        <main style="position: relative;">




            <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4"> 
                  


                </div>


                 <div class="col-sm-4 col-md-4 col-lg-4"> <br>
                    <div class="card ">

              

                   <div class="col-12 new-user">
 <center><img style="border-radius: 100%;" ></center>
                     
 <form class="" action='' method="POST" >
           <div class=>
            <div class="icon1">
          
<fieldset align="center" >
<form class="" action='' method="POST" >

    <div id="legend" align="center">
      
  
<center> <h1 style="color: #ff0066;"><b style="color: #ff9900"
>L</b>og in</h1></center>
     

<legend></legend>
    </div>
<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username">Fullname</label>
      <div class="controls">
        <input type="text" id="username" name="fullname" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
<input type="text" id="username" name="username" onblur="checkusername(this.value)" class="input-xlarge" required="true">
          <span id="usernameavailblty"></span>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="email" id="email" name="email" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>

    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit" id="submit" name="submit">Register</button>
      </div>
    </div>

 <div class="control-group">
      <div class="controls">
       Already registered <a href="signin.php">Signin</a>
      </div>
    </div>


     
            </div><br>
          </form>
          



               </div>






  
</body>
</html>