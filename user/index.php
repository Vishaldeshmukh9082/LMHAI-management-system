<?php
include('header.php');
?>

<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Aenean luctus lobortis tellus</h3>
                                             <h1>New Lifestyle</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Pellentesque nec libero nisi</h3>
                                             <h1>Your Health Benefits</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


    <!-- ABOUT -->
    <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Lonand Multispeciality <i class="fa fa-h-square"></i>ospital And I.C.U</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Is a Multi-Specialty Hospital offering a full range of advanced medical services to the Loanad. This Hospital was established with an aim to provide quality medicare and emergency facilities at affordable rates.
                                   They are assisted by excellent team of panel doctors/medical specialists looking after different streams of healthcare.This is further complemented by team of highly trained nurses and paramedical people.</p>
                                   <p>LMHAI adheres to best standards of clinical care, safe environment, medication safety, respect for patient rights and privacy and infection control.The Hospital has fully equipped I.C.U.. Spacious Operation Theaters,C- Arm (Image Intensifier), separate Labour Recovery Room, Pathological Lab, X-Ray and Ultrasound, E.C.G., Physiotherapist, In house 24 Hrs.
                                   Pharmacy with round the clock ambulance service.Hospital has its own power backup, canteen and comfortable lounge along with the different kinds of room’s available for the patients.
                                   we have tie-ups with corporate clients and provide various flexible health schemes and operative packages</p>
                              </div>
                              
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


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
                              <img src="../images/<?php echo"$ph";?>" class="img-responsive" alt="">

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


  <!-- NEWS -->
  <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Helath Tips</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <iframe width="350" height="315" src="https://www.youtube.com/embed/oRW_ZhlZHzg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <!-- <a href="news-detail.html">
                                   <img src="images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div  class="news-info">
                                   <span>March 08, 2018</span>
                                   <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                                   <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jeremie Carlson</h5>
                                             <p>CEO / Founder</p>
                                        </div>
                                   </div>
                              </div> -->
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <iframe width="350" height="315" src="https://www.youtube.com/embed/izCScP4HL3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
                              <!-- <div class="news-info">
                                   <span>February 20, 2018</span>
                                   <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                                   <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jason Stewart</h5>
                                             <p>General Director</p>
                                        </div>
                                   </div>
                              </div> -->
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <iframe  width="350" height="315" src="https://www.youtube.com/embed/4egM_a_nmKk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                             <!-- <a href="news-detail.html">
                                   <img src="images/news-image3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>January 27, 2018</span>
                                   <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                                   <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Andrio Abero</h5>
                                             <p>Online Advertising</p>
                                        </div>
                                   </div>
                              </div> -->
                         </div>
                    </div>

               </div>
          </div>
     </section>
 <!-- GOOGLE MAP -->
 <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>
<?php 
include('footer.php');
?>