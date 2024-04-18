<?php
session_start();
include('header.php');
?>
                    <?php
                    $eml=$_SESSION["email"];
                    $cn=mysqli_connect("localhost","root");
                    $db=mysqli_select_db($cn,"flmhai");
                   
                    $q="select * from registration where email='$eml'";
                    $rs=mysqli_query($cn,"$q");
                    
                    if($a=mysqli_fetch_array($rs))
                    
                    {
                         
                          $pid=$a['pid'];
                          $name=$a['name'];
                          $email=$a['email'];
                          $address=$a['address'];
                          $gender=$a['gender'];
                          $mobileno=$a['mobileno'];
                          $pass=$a['password'];
                        
                        ?>
<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <!-- <div class="col-md-6 col-sm-6">
                         <img src="../images/appointment-image.jpg" class="img-responsive" alt="">
                    </div> -->
                    
                    <div class="col-md-6 col-sm-4">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" >

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>update your Profile</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text"  class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo"$name";?>">
                                   </div>
                                   
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">patient id</label>
                                        <input type="email" class="form-control" id="em" name="em" placeholder="Your Email" value="<?php echo"$pid";?>"readonly>
                                   </div>
                                   <!-- <div class="col-md-6 col-sm-6">
                                        <label for="photo">photo</label>
                                        <input type="file" name="file1" class="input" placeholder="patient photo" value="<?php echo"$photo";?>" required>
                                   </div> -->
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">password</label>
                                        <input type="text" name="pass" class="input" placeholder="enter password"  value="<?php echo"$pass";?>"required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">gender</label>
                                        <input type="text" name="gen" class="input" placeholder="enter password"  value="<?php echo"$gender";?>"required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Mobile no.</label>
                                        <input type="number" name="mob" class="input" placeholder=" mob no"  value="<?php echo"$mobileno";?>"required>
                                    </div>
                                   <div class="col-md-12 col-sm-6">
                                        <label for="name">Address</label>
                                        <textarea type="text" name="add" class="form-control border-white p-3" placeholder="enter your address" required><?php echo"$address";?></textarea>
                                   </div>
                                   <input type="submit" class="form-control"style="background-color:#a5c422;" id="cf-submit" name="submit" value="update profile">
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
          
          $name= $_POST['name'];
         $pass= $_POST['pass'];
         $gen=$_POST['gen'];
         $mobileno=$_POST['mob'];
        $add=$_POST['add'];

//         $fn=$_FILES['file1']['name'];
//      $s=$_FILES['file1']['size'];
//      $tnm=$_FILES['file1']['tmp_name'];
//      $ptr1=fopen($tnm,"r");
//      $ptr2=fopen("img/$fn","w");


// $data=fread($ptr1,$s);
// fwrite($ptr2,$data);
// fclose($ptr1);
// fclose($ptr2);

    $cn=mysqli_connect("localhost","root");
     $db=mysqli_select_db($cn,"flmhai");
	 $q = "update registration set name='$name',password='$pass',address='$add',gender='$gen',mobileno='$mobileno' where email`='$eml'";
      
     mysqli_query($cn,$q);
     mysqli_close($cn);
     echo"<script>alert('update information sucessfully')</script>";
     echo"<script>window.location='profile.php'</script>";
     }
     ?>
     <?php   
include('footer.php');
?>
