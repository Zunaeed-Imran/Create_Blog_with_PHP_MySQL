<?php
// connect page & data input php sql page

$connect = new mysqli('localhost', 'root', '', 'packetcode-test');



  if(isset($_REQUEST['submit'])){
    $id = $_REQUEST['id'];
    $name3 = $_REQUEST['name3'];
    $blog3 = $_REQUEST['blog3'];
    
    $insrt = "INSERT into `practice3` (id, name3, blog3) VALUES ('$id', '$name3', '$blog3')";
    
    $result = mysqli_query($connect, $insrt);

      header('location:3.2_practice.php');
  }
  
?>