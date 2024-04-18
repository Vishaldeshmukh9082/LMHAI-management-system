<?php
$reg=$_GET['reg'];
include("connection.php");
$q="delete from doctors where regno='$reg'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Record deleted');</script>";
echo"<script>window.location='doctor.php';</script>";
?>