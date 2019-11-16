<?php
include('php/landsignup.php');
?>
<html>
   <head>
      <link rel="stylesheet" href="css/log.css">
      <link href="css/design.css" rel="stylesheet">

</head>
<body>
<div id="topnav" class="topnav">
  <a href="index.php" id="househome">Home</a>
  <a href="conta.html" id="conta">Contact</a>
  <a href="abut.html" id="abut">About</a>
</div>

<div id="mySidenav" class="sidenav">
    <a href="modern.html" id="about">Modern</a>
    <a href="trad.html" id="blog">Traditional</a>
    <a href="banglw.html" id="projects">Banglaws</a>
    <a href="apartment.html" id="contact">Apartments</a>
  </div>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<div class="test">
<div>
    <center>
      <div></div>
      <form method="POST" style="background-color:white;">
      <br>
      <b style="color:red"><?php echo $msg ?></b>
     <table>
     <tr><h3>LANDLORD SIGNUP</h3></tr>
       <tr> 
    <td><label for="First Name"><b>Name:</b></label></td>
    <td><input type="text" name="fname" placeholder="Full Name" class="email" /></td>
        </tr>
        <tr> 
    <td><label for="First Name"><b>Username:</b></label></td>
    <td><input type="text" name="username" placeholder="Username" class="email" /></td>
        </tr>
        <tr> 
    <td><label for="First Name"><b>Password:</b></label></td>
    <td><input type="password" name="password" placeholder="Password" class="email" /></td>
        </tr>
        <tr> 
    <td><label for="First Name"><b>Phone Number:</b></label></td>
    <td><input type="number" name="phone" placeholder="Phone Number" class="email" /></td>
        </tr>
        <tr>
        <td><input type="submit" class="btn" value="Sign Up"></td>
        <td><a href="landlord.php"><button type="button" id="btn2">Sign In</button></a></td>
      </tr>
       
        </table> 
    <br><br>

    </center>
    <div>
  </div>
</form>
</div> 
      </div>
</body>
</html>