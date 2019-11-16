<?php
   include("php/login.php");

?>
<html>
   <head>
      <link rel="stylesheet" href="css/log.css">
      <link href="css/design.css" rel="stylesheet">
      <style>
         .test{
            padding:200px;
         }
         </style>
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
<form method="post">
<div class="box">
<h1>Tenant Login</h1>

<input type="text" name="username" placeholder="Username" class="email" />
  
<input type="password" name="password" placeholder="Password" class="email" />
  
<input type="submit" class="btn" value="Sign In">
  
  </form>
<a href="tenantcreate.php"><div id="btn2">Sign Up</div></a>
</div> 
      </div>
</body>
</html>