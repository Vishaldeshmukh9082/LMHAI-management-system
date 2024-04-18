<?php
session_start();

include("header.php");


?>  <center>
<section id="news" data-stellar-background-ratio="2.5">
            <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Your Profile</h2>
                         </div>
                    </div>
                    <?php
                    $email=$_SESSION["email"];
                    $cn=mysqli_connect("localhost","root");
                    $db=mysqli_select_db($cn,"flmhai");
                   
                    $q="select * from registration where email='$email'";
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
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         
                              <div class="news-info">
                                   
                                   <h3><a href="news-detail.html">About your treatments</a></h3>
                                   
                                   <p></p>
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
                              ?> <h3 class="form-control"style="background-color:#a5c422;" ><a href="updatep.php">Update profile"</a></h3>
                              <h3 align="center"><div class="col-md-6 col-sm-4">
                                <div class="col-md-6 col-sm-6">
                                  
                                   
                              </div>
                              </div></h3><br>
                              <h3><a href="news-detail.html">Treatment details</a></h3>
                              

                              <?php
$_SESSION['email']=$email;
$cn=mysqli_connect("localhost","root");
$db=mysqli_select_db($cn,"flmhai");
$q="select * from patientdata where pid='$pid'";
$rs=mysqli_query($cn,"$q");

while($a=mysqli_fetch_array($rs))
{
     $no=$a['treatmentno'];
     $date=$a['date'];
     $disease=$a['disease'];
     $pres=$a['priscription'];
     $report=$a['report'];
     $advise=$a['advise'];
     $name=$a['drname'];
?>
                             

                             


                              <div class="news-info">
                                   <span><?php echo"$date";?></span>
                                   <h3 style="color:#35c9f6">Treatment No-<?php echo"$no";?></h3>
                                   <p>YOUR ALL TREATMENT DETAILS ARE HERE</p>
                                   <div class="stories-image">
                                        
                                        <div class="author-info">
                                         <h5>Disease:-<?php echo"$disease";?></h5>
                                             <h5>Prescription:-<?php echo"$pres";?></h5>
                                             <h5>reports:-<?php echo"$report";?></h5>
                                             <h5>Dr.Name:-<?php echo"$name";?></h5>
                                             <h4>Advises:-<?php echo"$advise";?></h4>
                                        </div>
                                   </div>
                              </div>
                             
                <?php
}
?>
 <center> <div class="btn btn-link">
<button  class="form-control" style="background-color:#a5c422;"><a href="report.php">Print Report</a></center>
                         </div>
</div>
                   
                     
                </div>  
            </div> 
            

</section>  </center>
                    <?php
                    include('footer.php');
                    ?>