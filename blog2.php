<?php
include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>create</title>
</head>

<body>
  <div class="container mt-5">
    <form method="GET">
      <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-cente">
      <textarea class="form-control bg-dark text-white my-3" name="content" id="" cols="30" rows="10"></textarea>
      <button class="btn btn-dark" name="new_post">Add post</button>
    </form>

  </div>


  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>