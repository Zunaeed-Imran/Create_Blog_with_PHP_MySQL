<?php

$conn = new mysqli('localhost', 'root', '', 'pocketcode-test');

if($conn){
  if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $blog = $_REQUEST['blog'];

    $sql = "INSERT into `practice2` (name, blog) values ('$name', '$blog')";

    mysqli_query($conn, $sql);
    header('location:2.2_practice.php');
  }
}

