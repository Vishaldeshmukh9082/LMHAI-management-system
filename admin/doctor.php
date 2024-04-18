<?php
include('header.php');
?>

<section id="appointment" data-stellar-background-ratio="3">
     <!-- doctors data start-->

<div class="container">
  <h2 align="center">Doctors Details</h2>
            
  <table class="table table-striped">
    
      <tr>
      <th>Photo</th>
      <th>Reg No.</th> 
      <th>Name</th>
        <th>Education</th>
        <th>Specialization</th>
        <th style="color:red;">Delete</th> 
      </tr>
    
    <?php

include('connection.php');

$q="select * from doctors";
$rs=mysqli_query($cn,$q);
$i=1;
while($a=mysqli_fetch_array($rs))
{
    extract($a);
?>    
    
      <tr>
        <td><div class="stories-image"><img src="../images/<?php echo"$photo";?>" class="img-responsive" alt=""></div></td>
        <td><?php echo"$regno";?></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$education";?></td>
        <td><?php echo"$specialization";?></td>
        <td ><?php echo"<a href=docdel.php?reg=$regno>Delete</a>";?></td>
      </tr>
   
    <?php 
    $i++;
}
?>
  </table>
</div>
<!-- doctors data end-->

     <div class="container">
       
          <div class="row">

               
                    
               <div class="col-md-12 col-sm-4" style="border:2px solid black;">
               <!--php code to fill add doctors data -->
               <form id="appointment-form" method="post" enctype="multipart/form-data" >
               <center>
               <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Add Doctors</h2>
                </div></center>


               <div class="wow fadeInUp">

                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Reg No:-</h3>
                         <input type="text" class="form-control" id="regno" name="txtregno" placeholder="Enter Reg no." required >
                    </div>

                    <div class="col-md-12 col-sm-6">
                         <h3 align="left">Name:-</h3>
                         <input type="text"  class="form-control" id="name" name="txtname" placeholder="Enter Name" required>
                   </div>

                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Education:-</h3>
                         <input type="text" class="form-control" id="education" name="txteducation" placeholder="Enter Education" required>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Specialization:-</h3>
                         <input type="text" class="form-control" id="specialization" name="txtspecialization" placeholder="Enter Specialization" required >
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Profile:-</h3>
                         <input type="file" class="form-control" id="profile" name="profile" required >
                    </div>
     
                    <div class="col-md-6 col-sm-6">
                         <h3 align="left">Password:-</h3>
                         <input type="password" class="form-control" id="password" name="txtpassword" placeholder="Enter password" required >
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
$name=$_POST['txtname'];
$education=$_POST['txteducation'];
$specialization=$_POST['txtspecialization'];
$regno=$_POST['txtregno'];
$password=$_POST['txtpassword'];

$fn=$_FILES['profile']['name'];
$s=$_FILES['profile']['size'];
$tnm=$_FILES['profile']['tmp_name'];
$ptr1=fopen($tnm,"r");
$ptr2=fopen("../images/$fn","w");


$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);



include('connection.php');
$q = "insert into doctors(photo,name,education,specialization,regno,password) values('$fn','$name','$education','$specialization','$regno','$password')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('patient data succesfully added')</script>";
echo"<script>window.location='doctor.php';</script>";

}
?>
<?php
include('footer.php');
?>