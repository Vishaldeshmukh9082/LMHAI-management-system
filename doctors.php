<?php
include('header.php')
?>
<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <?php
                    include('connection.php');
                     $q="select * from doctors";
                      $rs=mysqli_query($cn,$q);
       
                     while($a=mysqli_fetch_array($rs))
       
                       {
                        $ph=$a['photo'];
                        $name=$a['name'];
                        $edu=$a['education'];
                        $spe=$a['specialization'];
                        $reg=$a['regno'];
                        
                        ?>     


                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/<?php echo"$ph";?>" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Dr.<?php echo"$name";?></h3>
                                        <p><?php echo"$edu";?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php echo"$spe";?></p>
                                             <!-- <p><i class="fa fa-envelope-o"></i> <a href="#"><?php echo"$reg";?></a></p> -->
                                        </div>
                                        <!-- <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul> -->
                                   </div>

                         </div>
                    </div>
                    <?php
              }
              ?>
                    
               </div>
          </div>
     </section>

     <!-- schedule start-->

<div class="container">
  <h2 align="center">External Doctor's Schedule</h2>
  <p>Externals specialist Doctors visit to our hospital  to take treatment see the schedule and book appoitnment</p>            
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Sr.No</th>
        <th>Name</th>
        <th>Specialization</th>
        <th>Time</th>
      </tr>
    </thead>
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
    <tbody>
      <tr>
        <td><?php echo"$i";?></td>
        <td><?php echo"$name";?></td>
        <td><?php echo"$spe";?></td>
        <td><?php echo"$time";?></td>
      </tr>
    </tbody>
    <?php $i++;
}
?>
  </table>
</div>
<!-- schedule end-->
<?php
include('footer.php')
?>

