<?php
include('php/lordsess.php');
if(is_numeric($_GET['id'])){
    $id= mysqli_real_escape_string($db,$_GET['id']);
    $sql="DELETE FROM `infos` where h_no=$id and land_id=$landid";
    $db->query($sql);
    header("Location: dashboard.php");
}

?>