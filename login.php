<?php
session_start();
include('header.php');
?>
<div class="loginform">
         <h2 align="center">Log In</h2>
    <div class="upperbutton">
            
        <div id="b1"></div>
    
            <button type="button" class="logbtn" onclick="login()">Patient</button> 
            <button type="button" class="logbtn" onclick="doctor()">Doctor</button>
           
        </div>
        <form id="login" class="inputgroup" method="post">
            <input name="uemail" type="email" class="input" placeholder=" Patient email" required>
            <input name="upass" type="password" class="input" placeholder=" Enter password" required>
            <span>forget password<a href="#">Password</a></span><br>
            <span>click here for new register<a href="register.php">New register</a></span><br><br><br>
            <input type="submit" name="usub" class="btnsubp" value="Log-In">
        </form>

               
            <?php 
                 if(isset($_POST['usub']))
                 {	 
             
	         $uemail= $_POST['uemail'];
             $upass=$_POST['upass'];
             include('connection.php');
	         $q ="select email,password from registration where email='$uemail' and password='$upass';";
             
             
             $rs=mysqli_query($cn,$q);
             if(mysqli_num_rows($rs)==1)
             {
             mysqli_close($cn);
            
                 $_SESSION['email']=$uemail;
                 
                   echo"<script>alert('Welcome,$uemail');</script>";
                   echo"<script>window.location='user/index.php';</script>";
             }
             else{
                echo "<script>alert('invalid email and password');</script>";
             }
          
                 }
                 
             ?>

        <form id="doctor" class="inputgroup" method="post">
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
            <input name="drpass" type="password" class="input" placeholder=" Enter password" required>
            <input type="checkbox" class="check-box"><span>I agree terms and condition</span>
            <input type="submit" name="asub" class="btnsubd" value="Log-In">
        </form>
    </div>
                </div>
             <?php 
             if(isset($_POST['asub']))
             {	 
             
	         $drname= $_POST['dr'];
             $drpass=$_POST['drpass'];
             include('connection.php');
	         $q ="select * from doctors where name='$drname' and password='$drpass';";
             $rs=mysqli_query($cn,$q);
             if(mysqli_num_rows($rs)==1)
             {
             mysqli_close($cn);
           
             $_SESSION['name']=$dr;
             echo"<script>alert('Welcome');</script>";
             echo"<script>window.location='admin/index.php';</script>";
               }
               else{
               echo "<script>alert('invalid username and password');</script>";
               }
         
                 }
        
             ?>
        
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("doctor");
        var z = document.getElementById("b1");
        function doctor()
        {
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";

        }
        function login()
        {
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
            
        }
      
        var a = document.getElementsByClassName("btnsubd");
        function btnd()
        {
            window.location='dpatient.html';
        }
        var b = document.getElementsByClassName("btnsubp");
        function btnp()
        {
            window.location='bookappoitnment.html';
        }
    
    </script>
<?php
include('footer.php');
?>