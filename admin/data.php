<?php

include("header.php");
session_start();
$pid=$_GET['pid'];

$nm=$_SESSION["name"];
?>  <center>
<section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" >
                              <h2>Your Profile</h2>
                         </div>
                    </div>
                    <?php
                    
                   include('connection.php');
                    $q="select * from registration where pid='$pid'";
                    $rs=mysqli_query($cn,"$q");
                    
                    if($a=mysqli_fetch_array($rs))
                    
                        {
                         $photo=$a['photo'];
                          $pid=$a['pid'];
                          $name=$a['name'];
                          $email=$a['email'];
                          $address=$a['address'];
                          $gender=$a['gender'];
                          $mobileno=$a['mobileno'];
                        
                        ?>
                    
                     <div class="col-md-12 col-sm-4">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" >
                               
                              <div class="news-info">
                                   
                                   <h3><a href="news-detail.html">About your treatments</a></h3>
                                   
                                   <div class="stories-image">
                                        <img src="../img/<?php echo "$photo";?>" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h3>P.ID:-<?php echo "$pid";?></h3>   
                                             <h3>Personal info</h3>
                                             <h5>Name:-<?php echo "$name";?></h5>
                                             <h5>E-mail:-<?php echo "$email";?></h5>
                                             <h5>Address:-<?php echo "$address";?></h5>
                                             <h5>Gender:-<?php echo "$gender";?></h5>
                                             <h5>Mobile:-<?php echo "$mobileno";?></h5>
                                            
                                        </div>
                                   </div>
                                   
                              </div>
                              <?php
                              }
                              ?>


                     <!--php code to show patient data -->
                              <h3><a href="news-detail.html">Treatment details</a></h3>
                              

                              <?php

include('connection.php');
$q="select * from patientdata where pid='$pid'";
$rs=mysqli_query($cn,"$q");

while($a=mysqli_fetch_array($rs))
{
     
     $treatmentno=$a['treatmentno'];
     $date=$a['date'];
     $disease=$a['disease'];
     $pres=$a['priscription'];
     $report=$a['report'];
     $advise=$a['advise'];
     $name=$a['drname'];
?>
                             

                             


                              <div class="news-info">
                                   
                                   
                                   
                                   
                                   <h3 style="color:#35c9f6">Treatment No-<?php echo"$treatmentno";?></h3>
                                   <span>Date:-<?php echo"$date";?></span>
                                   <div class="stories-image">
                                        
                                        <div class="author-info">
                                         <h5>Disease:-<?php echo"$disease";?></h5>
                                             <h5>Prescription:-<?php echo"$pres";?></h5>
                                             <h5>Dr.Name:-<?php echo"$name";?></h5>
                                             <h5>reports:-<?php echo"<a href=view.php?report=$report>View</a>";?></h5>
                                             <h4>Advises:-<?php echo"$advise";?></h4>
                                        </div>
                                   </div>
                              </div>
                              <?php
                               }
                              ?>

                          <!--php code to fill patient data -->
                    <form id="appointment-form" method="post" enctype="multipart/form-data">

                                   


<div class="wow fadeInUp">

     <div class="col-md-6 col-sm-6">
          <h3 align="left">Pid:-</h3>
          <input type="text" class="form-control" id="pid" name="txtid" placeholder="Enter Pid" value="<?php echo"$pid";?>" required>
     </div>

     <div class="col-md-12 col-sm-6">
          <h3 align="left">treatmentno:-</h3>
          <input type="text"  class="form-control" id="treatmentno" name="treatmentno" placeholder="Enter Treatment No" required >
    </div>

     <div class="col-md-6 col-sm-6">
          <h3 align="left">Disease:-</h3>
          <input type="text" class="form-control" id="disease" name="disease" placeholder="Enter Disease" required>
     </div>

     <div class="col-md-6 col-sm-6">
          <h3 align="left">Doctor:-</h3>
          <input type="text" class="form-control" id="drname" name="drname" placeholder="Enter Doctor" value="<?php echo "$nm";?>" required>
     </div>

     <div class="col-md-12 col-sm-6">
          <h3 align="left">Advise:-</h3>
          <input type="text" class="form-control" id="advise" name="advise" placeholder="Enter Advise">
     </div>
     

    
     <div class="col-md-6 col-sm-6">
          <h3 align="left">Report:-</h3>
          <input type="file" class="form-control" id="txt" name="txt" required>
     </div>
     <div class="col-md-6 col-sm-6">
          <h3 align="left">Date:-</h3>
          <input type="date" class="form-control" id="date" name="date" required >
     </div>

     <div class="col-md-12 col-sm-12">
          <h3 align="left">Priscription:-</h3>
          <textarea class="form-control" rows="5" id="priscription" name="priscription" placeholder="Enter Priscription" required></textarea><br>
          <input type="submit" style="background-color:#a5c422;" class="form-control" id="submit" name="submit" >
    </div>
</div>
</form>


</div>


</div> 
</div>

 
<?php
if(isset($_POST['submit']))
{	
$id=$_POST['txtid'];
$treatmentno=$_POST['treatmentno'];
$date=$_POST['date'];
$disease=$_POST['disease'];
$priscription=$_POST['priscription'];

$advise=$_POST['advise'];
$drname=$_POST['drname'];


$fn=$_FILES['txt']['name'];
$s=$_FILES['txt']['size'];
$tnm=$_FILES['txt']['tmp_name'];
$ptr1=fopen($tnm,"r");
$ptr2=fopen("../img/$fn","w");


$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);



$cn=mysqli_connect("localhost","root");
$db=mysqli_select_db($cn,"flmhai");
$q = "insert into patientdata(pid,treatmentno,date,drname,disease,priscription,advise,report) values('$id','$treatmentno','$date','$drname','$disease','$priscription','$advise','$fn')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('patient data succesfully added')</script>";
echo"<script>window.location='patient.php';</script>";

}
?>
   </section>     
</center>
                   
<?php
 include('footer.php');
?>