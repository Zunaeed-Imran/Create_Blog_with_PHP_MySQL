<?php

$connect = new mysqli('localhost', 'root', '', 'packetcode-test');


if($connect){
  if(isset($_REQUEST['submit'])){
    $title_1 = $_REQUEST['title_1'];
    $content_1 = $_REQUEST['content_1'];

    $sql = "INSERT into practice1 (title_1, content_1) VALUES ('$title_1', '$content_1')";

    mysqli_query($connect, $sql);

    header('location:1.2_practice.php');
  }
}
?>