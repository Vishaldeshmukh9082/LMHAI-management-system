<?php
include('header.php');
?>
<!-- schedule start-->

<div class="container">
  <h2 >External Doctor's Schedule</h2>
  <p>Externals specialist Doctors visit to our hospital  to take treatment see the schedule and book appoitnment</p>            
  <table class="table table-striped">
    
      <tr>
      <th>Sr.No</th>
        <th>Name</th>
        <th>Specialization</th>
        <th>Time</th>
      </tr>
   
    <?php
    
include('connection.php');
$q="select * from Schedule";
$rs=mysqli_query($cn,$q);
$i=1;
while($a=mysqli_fetch_array($rs))
{
$name=$a['name'];
$spe=$a['specialization'];
$time=$a['time'];


?>    
   
      <tr>
        <td><?php echo"$i";?></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$spe";?></td>
        <td><?php echo"$time";?></td>
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