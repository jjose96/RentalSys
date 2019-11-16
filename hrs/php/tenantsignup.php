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
else{
    $msg="";
}
?>