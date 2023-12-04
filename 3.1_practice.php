<?php
  include '3_practice.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Page</title>
</head>
<body>
  <form action="3.1_practice.php" method="post"> 
    <input type="number" name="id" placeholder="ID"><br>
    <input type="text" name="name3" placeholder="Name"><br>
    <textarea name="blog3" cols="30" rows="10" placeholder="Blog"></textarea><br>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>