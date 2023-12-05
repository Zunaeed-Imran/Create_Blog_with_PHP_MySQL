<?php
// Delete page

include '3_practice.php';

$sql = "DELETE from `practice3` where id = {$_REQUEST['id']}";

?>