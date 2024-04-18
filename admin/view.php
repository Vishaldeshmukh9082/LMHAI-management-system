<?php
$report=$_GET['report'];
// include('connection.php');
// $q="select * from patientdata where report='$report'";
// $rs=mysqli_query($cn,"$q");

// while($a=mysqli_fetch_array($rs))
// {
//     extract($a);
//     echo "../img/$report";
// }
$pdf->output('$report','I');
?>