<?php

$connect = new mysqli('localhost', 'root', '', 'packetcode-test');


if ($connect) {
  if (isset($_REQUEST['submit'])) {
    $name1 = $_REQUEST['name1'];
    $blog = $_REQUEST['blog'];

    $sql = "INSERT into practice2 (name1, blog) VALUES ('$name1', '$blog')";

    mysqli_query($connect, $sql);

    header('location:2.2_practice.php');
  }
}
