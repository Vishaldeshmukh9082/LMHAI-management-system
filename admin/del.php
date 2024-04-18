<?php
$id=$_GET['email'];
include("connection.php");
$q="delete from feedback where email='$id'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Record deleted');</script>";
?>