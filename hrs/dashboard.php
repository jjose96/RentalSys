<?php
include('php/lordsess.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/nav.css">
<link href="css/design.css" rel="stylesheet">
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin-left:200px ;
  margin-top: 100px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

  </style>
</head>
<body>
<div id="topnav" class="topnav">
  <a href="index.php" id="househome">Home</a>
  <a href="conta.html" id="conta">Contact</a>
  <a href="abut.html" id="abut">About</a>
  <a href="display.php" id="abut">Available</a>
  <a href="add.php" id="abut">Add New</a>
  <a href="profile.php">Update your profile</a>
  <a href="logout.php" style="float:right;">Logout</a>
  <a href="dashboard.php" style="float:right;"><?php echo $row['l_name'] ?></a>

</div>

<div id="mySidenav" class="sidenav">
    <a href="modern.html" id="about">Modern</a>
    <a href="trad.html" id="blog">Traditional</a>
    <a href="banglw.html" id="projects">Banglaws</a>
    <a href="apartment.html" id="contact">Apartments</a>
  </div>
  <p style="text-align:center">
</p>
</table>
<table id="customers">
<th>S.I</th>
<th>Title</th>
<th>Description</th>
<th>Location</th>
<th>Published By</th>
<th>Contact Info</th>
<th>Edit Actions</th>
<th>Delete Actions</th>

<?php
$sql="SELECT * FROM `infos`,`landlord` where landlord.land_id=infos.land_id and landlord.land_id=$landid ";
$ex=$db->query($sql);
$count=0;
while($fet=mysqli_fetch_array($ex)){
  $count=$count+1;
  echo "<tr><td>".$count."</td>";
  echo "<td>".$fet['h_name']."</td>";
  echo "<td>".$fet['description']."</td>";
  echo "<td>".$fet['h_address']."</td>";
  echo "<td>".$fet['l_name']."</td>";
  echo "<td>".$fet['l_phone']."</td>";
  echo "<td><a href='edit.php?id=".$fet['h_no']."'>Edit</a></td>";
  echo "<td><a href='delete.php?id=".$fet['h_no']."'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>