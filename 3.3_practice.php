<?php
// Delete page

include '3_practice.php';


$sql = "DELETE from `practice3` where id = {$_REQUEST['id']}";

if($connect->query($sql)){
  header('location:3.2_practice.php');
}



?>