<?php
 include('header.php');
 ?>

 
<div class="container">
  <h2 align="center">patients data</h2>
  <form id="appointment-form" role="form" method="post" >
 <div class="col-md-5 col-sm-4">
     <label for="name">Patient Id</label>
     <input type="text" class="form-control" id="name" name="pid" placeholder="Enter patient id">
     <input name="submit" type="submit" >
</div>
</form>
     
  <table class="table table-striped">
    
  <tr>
      <th>photo</th>
      <th>pid</th>
        <th>Name</th>
        <th>mobileno</th>
        <th>View</th>
         
      </tr>
    
 <?php
 include('connection.php');
    if(isset($_POST['submit']))
    {	
     $pid= $_POST['pid'];

$q="select * from registration where pid=$pid";
    }else
    {
      
      $q="select * from registration";
    }
$rs=mysqli_query($cn,$q);

while($a=mysqli_fetch_array($rs))
{
    extract($a);
?>    
    
    <tr>
        <td><div class="stories-image"><img src="../img/<?php echo"$photo";?>" class="img-responsive" alt=""></div></td>
        <td><?php echo"$pid";?></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$mobileno";?></td>
        <td><?php echo"<a href=data.php?pid=$pid>OPEN</a>";?></td>
        
       
        
      </tr>
   
    <?php
}
?>
  </table>
</div>

              
 <?php

 include('footer.php');
 ?>