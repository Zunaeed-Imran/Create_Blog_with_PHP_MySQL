<?php

$conn = mysqli_connect(
   "localhost",
   "homestead",
   "secret",
   "packetcode-test"
);

if (!$conn) {
   echo "<h3>not able establish database connect</h3>";
}
if (isset($_REQUEST["new_post"])) {
   $titl = $_REQUEST["title"];
   $content = $_REQUEST["content"];

   $sql = "INSERT INTO data(title, content) VALUES('$titl', '$content')";
   mysqli_query($conn, $sql);

   header("Location: blog.php");
   exit();
}
