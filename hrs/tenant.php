<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT t_id FROM tenant WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>
    House Rental System
</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
        <div><center>
        <h1>Please signin</h1></center>
        </div>
        <form method="POST"><fieldset><legend>Sign in </legend>
        <div><center><img src="land.jpg" alt="land" width=250 heoght=250></center></div>
        <br>
        <br>
        <div><center>
        <label for="inputusername">USER NAME : </label>
        <input type="text" id="inputusername" placeholder="User name" required autofocus name="username">
        <br><br>
        <label for="inputPassword" >PASSWORD : </label>
        <input type="password" id="inputPassword" placeholder="Password" required name="password">
        <br><br>
        <input type="checkbox" value="remember-me"> Remember me
        <br><br>
        <input type="submit" value="login">
        </center></div>
        <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; House Rental System</p>
        -->
        </fieldset>
      </form>
      <br><br>
      <div><center><label for="inputusername">Sign Up : </label>
        <input type="submit" value="Create New Account">
      </div></center>
    </body>
  </html>
