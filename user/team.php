<?php
include('header.php');
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
                        $photo=$a['photo'];
                        $name=$a['name'];
                        $edu=$a['education'];
                        $spe=$a['specialist'];
                        $reg=$a['regno'];
                        
                        ?>     


                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/<?php echo"$photo";?> class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Dr.<?php echo"$name";?></h3>
                                        <p><?php echo"$edu";?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php echo"$spe";?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php echo"$reg";?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    <?php
              }
              ?>
                    
               </div>
          </div>
     </section>
<?php
include("footer.php");
?>