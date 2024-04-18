<?php
include('header.php');
?>
   

    <div class="registerform">
        <!-- <div class="upperbutton">
            <div id="b1"></div>

            <button type="button" class="btnreg" onclick="register()">Register</button>
           
        </div> --><br>
        <center><a href="login.php" style="padding:10px 10px;background-color:white">Cancel</a></center>
        <h2 align="center">Register</h2>
        <form id="register" class="inputgroup1" method="post" enctype="multipart/form-data">
            Image:<input type="file" name="file1" class="input" placeholder="patient photo" >

            <input type="text"name="txtname" class="input" placeholder="patient name" required>
            
            <input type="email" name="txtemail" class="input" placeholder="email-id" required>
            
            <input type="password" name="txtpass" class="input" placeholder="enter password" required>
            
            <textarea type="text" name="txtadd" class="form-control border-white p-3" placeholder="enter your address" fixed required></textarea>
            
            <select class="input"name="gen" required>
                <option>------gender------</option>
                <option name="gen" value="male">male</option>
                <option name="gen" value="female">female</option>
                <option name="gen" value="other">other</option>
            </select>
            
            <input type="number" name="txtmob" class="input" placeholder=" mob no" required>
            
            <input type="checkbox" class="check-box" required><span>I agree terms and condition</span>
            
            <input type="submit" name="txtsub" class="btnsub" value="Register">
            
        </form>
    </div>
    
<?php 
         if(isset($_POST['txtsub']))
         {	 
     
	 $nm= $_POST['txtname'];
     $em=$_POST['txtemail'];
	 $pass= $_POST['txtpass'];
     $add=$_POST['txtadd'];
     $gen=$_POST['gen'];
     $mob=$_POST['txtmob'];
     

     $fn=$_FILES['file1']['name'];
     $s=$_FILES['file1']['size'];
     $tnm=$_FILES['file1']['tmp_name'];
     $ptr1=fopen($tnm,"r");
     $ptr2=fopen("img/$fn","w");


$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);
     include('connection.php');
	 $q = "insert into registration(photo,name,email,password,address,gender,mobileno)values('$fn','$nm','$em','$pass','$add','$gen','$mob')";
     mysqli_query($cn,$q);
     mysqli_close($cn);
     echo"<script>alert('reegister sucessfully');</script>";
     echo"<script>window.location='login.php';</script>";
     }
     ?>


<?php
include('footer.php');
?>