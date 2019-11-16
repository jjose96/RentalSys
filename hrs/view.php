<?php
include('php/tensess.php');
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

#customers tr{background-color:white;}

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
  <a href="logout.php" style="float:right;">Logout</a>
  <a href="view.php" style="float:right;"><?php echo $row['t_name'] ?></a>
</div>

<div id="mySidenav" class="sidenav">
    <a href="modern.html" id="about">Modern</a>
    <a href="trad.html" id="blog">Traditional</a>
    <a href="banglw.html" id="projects">Banglaws</a>
    <a href="apartment.html" id="contact">Apartments</a>
  </div>
<table id="customers">
<th>S.I</th>
<th>Title</th>
<th>Description</th>
<th>Location</th>
<th>Published By</th>
<th>Contact Info</th>
<?php
$sql="SELECT * FROM `infos`,`landlord` where landlord.land_id=infos.land_id";
$ex=$db->query($sql);
$count=0;
while($fet=mysqli_fetch_array($ex)){
  $count=$count+1;
  echo "<tr><td>".$count."</td>";
  echo "<td>".$fet['h_name']."</td>";
  echo "<td>".$fet['description']."</td>";
  echo "<td>".$fet['h_address']."</td>";
  echo "<td>".$fet['l_name']."</td>";
  echo "<td>".$fet['l_phone']."</td></tr>";
}
?>
</table>
</body>
</html>