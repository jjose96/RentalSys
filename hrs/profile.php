<?php
include('php/lordsess.php');
$name=$row['l_name'];
    $zac="SELECT * FROM landlord where land_id=$landid";
    $que=$db->query($zac);
    $row=mysqli_fetch_array($que);
if(!empty($_POST)){
   $lname=htmlentities(mysqli_real_escape_string($db,$_POST['lname']));
   $lphone=htmlentities(mysqli_real_escape_string($db,$_POST['lphone']));
   $sql="UPDATE `landlord` SET `l_name`='$lname',`l_phone`='$lphone' WHERE land_id='$landid'";
   $check=$db->query($sql);
   if($check){
    $msg="Profile Updated Successfully";
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
  <a href="dashboard.php" style="float:right;"><?php echo $name?></a>
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
     <tr><h3>Edit Profile</h3></tr>
       <tr> 
    <td><label for="First Name"><b>Name:</b></label></td>
    <td><input type="text" name="lname" placeholder="Name" class="email" value="<?php echo $row['l_name'] ?>" /></td>
        </tr>
        <tr> 
    <td><label for="First Name"><b>Phone number:</b></label></td>
    <td><input type="text" name="lphone" placeholder="Phone" class="email" value="<?php echo $row['l_phone'] ?>" /></td>
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