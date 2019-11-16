<?php
include('php/lordsess.php');
if(!empty($_POST)){
   $hname=htmlentities(mysqli_real_escape_string($db,$_POST['hname']));
   $description=htmlentities(mysqli_real_escape_string($db,$_POST['description']));
   $address=htmlentities(mysqli_real_escape_string($db,$_POST['address']));
   $sql="INSERT INTO `infos`(`land_id`, `h_name`, `h_no`, `h_address`, `description`) VALUES ('$landid','$hname',null,'$address','$description')";
   $check=$db->query($sql);
   if($check){
    $msg="Submitted";
  }
  else{
    $msg="Something wrong. Try Again";
  }
  }
  else{
      $msg="";
  }

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
  <a href="display.php" id="abut">Available</a>
  <a href="add.php" id="abut">Add New</a>
  <a href="logout.php" style="float:right;">Logout</a>
  <a href="dashboard.php" style="float:right;"><?php echo $row['l_name'] ?></a>
</div>

<div id="mySidenav" class="sidenav">
    <a href="modern.html" id="about">Modern</a>
    <a href="trad.html" id="blog">Traditional</a>
    <a href="banglw.html" id="projects">Banglaws</a>
    <a href="apartment.html" id="contact">Apartments</a>
  </div>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<div>
    <center>
      <form method="POST" style="background-color:white;">
      <br>
     <b style="color:red;"> <?php echo $msg ?></b>
     <table>
     <tr><h3>Add New House Details</h3></tr>
       <tr> 
    <td><label for="First Name"><b>House Name:</b></label></td>
    <td><input type="text" name="hname" placeholder="House Name" class="email" /></td>
        </tr>
        <tr> 
    <td><label for="First Name"><b>Description:</b></label></td>
    <td><textarea class="email" name="description"></textarea></td>
        </tr>
        <tr> 
    <td><label for="First Name"><b>Address:</b></label></td>
    <td><textarea class="email" name="address"></textarea></td>
        </tr>
        <tr>
        <td><input type="submit" class="btn" value="Submit"></td>
      </tr>
       
        </table> 
    <br><br>

    </center>
    <div>
</form>
</div> 
      </div>
</body>
</html>