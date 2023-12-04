<?php
include '2_practice.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Project</title>
</head>
<body>
  <form action="2.2_practice.php" method="get">
    <input type="text" name="name1" placeholder="Write the name"><br>
    <textarea name="blog"cols="30" rows="10" placeholder="write the blog"></textarea><br> // i was forgot to name name1 
    <button type="submit" name="submit">submit</button>    // first i got forgot to set name in button
  </form>
</body>
</html>