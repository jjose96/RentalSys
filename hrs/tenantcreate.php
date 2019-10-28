<?php
include('config.php');
if(!empty($_POST))
{
$fname=mysqli_real_escape_string($db,$_POST['fname']);
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);

$sql="INSERT INTO tenant(`t_id`,`t_name`,`username`,`password`,`t_phone`) values (null,'$fname','$username','$password','$phone')";
$check=$db->query($sql);
if($check){
  $msg="Account Created";
}
else{
  $msg="Something wrong. Try Again";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>
    House Rental System
</title>
<link rel="stylesheet" href="css/signup.css">
</head>
<body>
<body>

<form method="POST">
  <div>
    <h1><center>Sign Up</center></h1><br>
    <fieldset><legend>Sign Up </legend>
      <div><center><img src="img/land.jpg" alt="land" width=250 heoght=250></center></div>
    <p>Please fill in this form to create an account.</p>
    <hr><center>
      <div></div>
    <label for="First Name"><b>Name:</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>
    <br><br>
    <label for="User Name"><b>User Name:</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required>
    <br><br>
    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
    <label for="User Name"><b>Phone number:</b></label>
    <input type="text" placeholder="Enter User Name" name="phone" required>
    <br><br>
    <label>
    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br><br>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div></center>
    <div><?php echo $msg ?>
  </div>
</form>

</body>
</html>
