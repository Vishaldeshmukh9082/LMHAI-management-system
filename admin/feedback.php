<?php
include('header.php');
?>
<!-- schedule start-->

<div class="container">
  <h2 align="center">Feedbacks</h2>
            
  <table class="table table-striped">
    
      <tr>
      <th>Photo</th>
      <th>name</th>
        <th>Email Id</th>
        <th>Feedback Text</th>
        <th style="color:red;">Delete</th> 
      </tr>
    
    <?php

include('connection.php');

$q="select * from feedback";
$rs=mysqli_query($cn,$q);
$i=1;
while($a=mysqli_fetch_array($rs))
{
    extract($a);
?>    
    
      <tr>
        <td><div class="stories-image"><img src="../img/<?php echo"$image";?>" class="img-responsive" alt=""></div></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$email";?></td>
        <td><?php echo"$feedbacktext";?></td>
        <td ><?php echo"<a href=del.php?email=$email>Delete";?></td>
      </tr>
   
    <?php 
    $i++;
}
?>
  </table>
</div>
<!-- schedule end-->
<?php
include('footer.php');
?>