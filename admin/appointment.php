<?php
session_start();
$nm=$_SESSION["name"];
include('header.php');
?>
<!-- schedule start-->

<div class="container">
  <h2 align="center">Appoinments</h2>
            
  <table class="table table-striped">
    
      <tr>
        <th>PID</th>
      <th>Name</th>
        <th>Contact No</th>
        <th>email</th>
        <th>Gender</th>
        <th>Blood Group</th>
        <th>Date</th>
        <th>Doctor</th>
        
        
         
      </tr>
    
    <?php

include('connection.php');

$q="select * from appointment";
$rs=mysqli_query($cn,$q);
$i=1;
while($a=mysqli_fetch_array($rs))
{
    extract($a);
?>    
    
      <tr>
      <td><?php echo"$pid";?></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$mobileno";?></td>
        <td><?php echo"$email";?></td>
        <td><?php echo"$gender";?></td>
        <td><?php echo"$bloodgroup";?></td>
        <td><?php echo"$date";?></td>
        <td><?php echo"$doctor";?></td>
        
        
        
      </tr>
   
    <?php $i++;
}
?>
  </table>
</div>
<!-- schedule end-->
<?php
include('footer.php');
?>