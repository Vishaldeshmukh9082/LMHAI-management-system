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

                          
                                   
<section id="appointment" data-stellar-background-ratio="3">
     <div class="container">
          <div class="row">

               
                    
            <div class="col-md-12 col-sm-4" style="border:2px solid black;">
            <!--php code to fill patient data -->
            <form id="appointment-form" method="post" enctype="multipart/form-data">
                <center>
                <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2>Add Schedule</h2>
                </div>
                </center>


               <div class="wow fadeInUp">               
                    <div class="col-md-12 col-sm-6">
                         <h3 align="left">Name:-</h3>
                         <input type="text"  class="form-control" id="txtname" name="txtname" placeholder="Enter Name" required>
                   </div>

                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Specialization:-</h3>
                         <input type="text" class="form-control" id="txtspecialization" name="txtspecialization" placeholder="Enter Specialization" required >
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Time:-</h3>
                         <input type="text" class="form-control" id="txttime" name="txttime" placeholder="Enter Time" required >
                    </div>  

                    <div class="col-md-12 col-sm-12">
                    <br><br> 
                         <input type="submit" style="background-color:#a5c422;" class="form-control" id="submit" name="submit" >
                   </div>
               </div>
            </form>
            </div>
          </div> 
     </div>
</section>

 
<?php
if(isset($_POST['submit']))
{	
$txtname=$_POST['txtname'];
$txtspe=$_POST['txtspecialization'];
$txttime=$_POST['txttime'];


$cn=mysqli_connect("localhost","root");
$db=mysqli_select_db($cn,"flmhai");
$q = "insert into schedule (name,specialization,time) values('$txtname','$txtspe','$txttime')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('patient data succesfully added')</script>";
echo"<script>window.location='schedule.php';</script>";

}
?>

<?php
include('footer.php');
?>