<?php
session_start();
 include('header.php');
 $email=$_SESSION["email"];
 $cn=mysqli_connect("localhost","root");
 $db=mysqli_select_db($cn,"flmhai");

 $q="select * from registration where email='$email'";
 $rs=mysqli_query($cn,"$q");
 
 if($a=mysqli_fetch_array($rs))
 
 {
      $photo=$a['photo'];
       $name=$a['name'];
       $email=$a['email'];
       
     
 ?>  

<!-- FEEDBACK -->
<section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <!-- <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div> -->
                    
                    <div class="col-md-12 col-sm-4" >
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <center>
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Give Your Feedback</h2>
                              </div>
                              <img style="border-radius:100px;width:200px;height:200px;Border:2px solid gray" src="../img/<?php echo "$photo";?>" class="img-responsive" alt="">
                              </center>
                              <?php
                          
                              ?>

                              <div class="wow fadeInUp" data-wow-delay="0.2s"><br><br>
                              


                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text"  class="form-control" id="txtname" name="txtname" placeholder="Full Name" value="<?php echo"$name";?>" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Your Email" value="<?php echo"$email";?>" required>
                                   </div>

                                   

                                   <div class="col-md-12 col-sm-12" >
                                        
                                       <textarea class="form-control" rows="5" id="message" name="feedback" placeholder="Enter Feedback" required ></textarea>
                                        <input type="submit" style="background-color:#a5c422;" class="form-control" id="cf-submit" name="submit" value="Send">
                                   </div>
                              </div>
                        </form>
                    </div>
                    

               </div>
          </div>
     </section>
     <?php
                    }
     ?>
     
    <?php
     if(isset($_POST['submit']))
         {	
          $name= $_POST['txtname'];
         $email=$_POST['txtemail'];
	    $image= $photo;
        $feedbacktext=$_POST['feedback'];
       

     include('connection.php');
	 $q = "insert into feedback values('$image','$name','$email','$feedbacktext')";
     mysqli_query($cn,$q);
     mysqli_close($cn);
     echo"<script>alert('thank you for your feedback ')</script>";
     echo"<script>window.location='index.php';</script>";
    
     }
     ?>


     <?php
 include('footer.php');
 ?>