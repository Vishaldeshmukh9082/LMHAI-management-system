<?php
session_start();
include('header.php');
?>
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
<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="../images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>
                    
                    <div class="col-md-6 col-sm-4" >
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text"  class="form-control" id="txtname" name="txtname" placeholder="Full Name" value="<?php echo"$name";?>" required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="pid">Pid No:</label>
                                        <input type="text"  class="form-control" id="txtpid" name="txtpid"  fixed value="<?php echo"$pid";?>" required readonly>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Your Email" value="<?php echo"$email";?>" required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control" id="txtage" name="txtage" placeholder="Your Age" required >
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date"  name="txtdate" value="" class="form-control" required >
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Doctors</label>
                                        <select class="form-control"name="dr" required>
                                        <option>------select------</option>
                                             <option name="dr" value="Dr.Kishor Shinde">Dr.Kishor Shinde</option>
                                             <option name="dr" value="Dr.Anilraje Nimbalkar">Dr.Anilraje Nimbalkar</option>
                                             <option name="dr" value="Dr.Makrand Dombale">Dr.Makrand Dombale</option>
                                             <option name="dr" value="Dr.Vinit Butiyani">Dr.Vinit Butiyani</option>
                                             <option name="dr" value="Dr.vision raval">Dr.vision raval</option>
                                             <option name="dr" value="Dr.Gaikwad deepak">Dr.Gaikwad deepak</option>
                                             <option name="dr" value="Dr.Ganesh Dani">Dr.Ganesh Dani</option>
                                             <option name="dr" value="Dr.Raman chandrashekhar">Dr.Raman chandrashekhar</option>
                                             <option name="dr" value="Dr.kogekar srikant">Dr.kogekar srikant</option>
                                             <option name="dr" value="Dr.Shingare vilas">Dr.Shingare vilas</option>
                                             <option name="dr" value="Dr.Shende deepak">Dr.Shende deepak</option>
                                             <option name="dr" value="Dr.Surana Sandesh">Dr.Surana Sandesh</option>
                                             <option name="dr" value="Dr.Nigde Niranjan">Dr.Nigde Niranjan</option>
                                        </select>
                                   </div>
                                   

                                        <div class="col-md-6 col-sm-6"name="gen">
                                        <label for="select">Select your gender</label>
                                        <select class="form-control"name="gen" required>
                                        <option value="<?php echo"$name";?>">  <?php echo"$gender";?>  </option>
                                        <option name="gen" value="male">male</option>
                                        <option name="gen" value="female">female</option>
                                        <option name="gen" value="other">other</option>
                                       </select></div>

                                        <div class="col-md-6 col-sm-6"name="blood">
                                        <label for="select">Select blood group</label>
                                        <select class="form-control"name="blood" required>
                                        <option>------select------</option>
                                        <option name="blood" value="A+">A+</option>
                                        <option name="blood" value="A-">A-</option>
                                        <option name="blood" value="B+">B+</option>
                                        <option name="blood" value="B-">B-</option>
                                        <option name="blood" value="o+">O+</option>
                                        <option name="blood" value="o-">O-</option>
                                        <option name="blood" value="AB+">AB+</option>
                                        <option name="blood" value="AB-">AB-</option>
                                             
                                        </select>
                                   </div>


                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="mobile" class="form-control" id="txtnumber" name="txtnumber" placeholder="Phone No" value="<?php echo"$mobileno";?>" required>
                                        
                                       <!-- <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>-->
                                        <input type="submit" class="form-control"style="background-color:#a5c422;" id="cf-submit" name="submit" value="Book Appoitnment">
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
          $pid=$_POST['txtpid'];
          $name= $_POST['txtname'];
          $age= $_POST['txtage'];
         $email=$_POST['txtemail'];
	    $date= $_POST['txtdate'];
         $doctor=$_POST['dr'];
         $gen=$_POST['gen'];
         $bloodgroup=$_POST['blood'];
         $mobileno=$_POST['txtnumber'];

    include('connection.php');
	 $q = "insert into appointment values('$pid','$name','$mobileno','$age','$email','$gender','$bloodgroup','$date','$doctor')";
     mysqli_query($cn,$q);
     mysqli_close($cn);
     echo"<script>alert('book appoitnment sucessfully')</script>";
     echo"<script>window.location='index.php'</script>";
     }
     ?>
     <?php   
include('footer.php');
?>
