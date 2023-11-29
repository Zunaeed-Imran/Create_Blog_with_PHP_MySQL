<?php

$connect = new mysqli('localhost', 'root', '', 'packetcode-test');


if($connect){
  if(isset($_REQUEST['submit'])){
    $title1 = $_REQUEST['title1'];
    $content1 = $_REQUEST['content1'];

    $sql = "INSERT into practice1 (title1, content1) VALUES ('$title1', '$content1')";

    mysqli_query($connect, $sql);

    header('location:1.2_practice.php');
  }
}
?>