<?php
include('header.php');
?>
<!-- schedule start-->

<div class="container">
  <h2 align="center">Registration</h2>
            
  <table class="table table-striped">
    
      <tr>
      <th>photo</th>
      <th>pid</th>
        <th>Name</th>
        <th>email</th>
        <th>Address</th>
        <th>mobileno</th>
        <th>Gender</th>
         
      </tr>
    
    <?php

include('connection.php');
$q="select * from registration";
$rs=mysqli_query($cn,$q);
$i=1;
while($a=mysqli_fetch_array($rs))
{
    extract($a);
?>    
    
      <tr>
        <td><div class="stories-image"><img src="../img/<?php echo"$photo";?>" class="img-responsive" alt=""></div></td>
        <td><?php echo"$pid";?></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$email";?></td>
        <td><?php echo"$address";?></td>
        <td><?php echo"$mobileno";?></td>
        <td><?php echo"$gender";?></td>
        
       
        
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