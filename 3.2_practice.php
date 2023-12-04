<?php
// Display page

 include '3_practice.php';

 $display = $connect->query("SELECT * from `practice3`");
 $rows = $display->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="3.1_practice.php">
    <button>Create</button>
  </a>
  <table >

    <thead>
      <tr>       
        <th>Id</th>
        <th>Name</th>
        <th>Blog</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</body>
</html>