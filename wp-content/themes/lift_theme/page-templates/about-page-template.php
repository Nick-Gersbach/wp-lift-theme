<?php 

/*
Template Name: About Page
*/

?>

<!-- About Page Header -->
<?php get_header('about'); ?>

<!-- Why Us -->
 <h2 class="text-bold text-center pt-5 pb-3">Why Choose Us?</h2>
 <div class="heading-underline"></div>

 <div class="container">

    <div class="row">

    <div class="card mx-auto col-lg-3 about-card os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
        <div class="card-body">
        <div class="card-title"><i class="fas fa-dumbbell fa-2x"></i></div>
        <h4 class="card-subtitle mb-2 text-muted">Modern Equipment</h4>
        <p class="card-text">Lift gym has the most modern cutting edge equipment in the valley. All our machines and freeweights are cleaned and maintained daily.</p>
        </div>
    </div>
    <div class="card mx-auto col-lg-3 about-card os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
        <div class="card-body">
        <div class="card-title"><i class="fas fa-store fa-2x"></i></div>
        <h4 class="card-subtitle mb-2 text-muted">Health Bar</h4>
        <p class="card-text">Need to get your protein fix? Visit our health bar and try our delicious preotein packed smoothies and our fluten free menu.</p>
        </div>
    </div>
    <div class="card mx-auto col-lg-3 about-card os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
        <div class="card-body">
        <div class="card-title"><i class="fas fa-hot-tub fa-2x"></i></div>
        <h4 class="card-subtitle mb-2 text-muted">Spa & Jacuzzi</h4>
        <p class="card-text">Soothe soar muscles and improve your recovery time by getting in our award spacious deluxe jacuzzis systems.</p>
        </div>
    </div>
    <div class="card mx-auto col-lg-3 about-card os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
        <div class="card-body">
        <div class="card-title"><i class="fas fa-users fa-2x"></i></div>
        <h4 class="card-subtitle mb-2 text-muted">Professional Staff</h4>
        <p class="card-text">Get top customer service from our account managers as well as expert fitness tips from our experienced top-notch personal trainers</p>
        </div>
    </div>
    </div>
   </div>

<!-- Trainers Section -->

<div class="trainers-wrapper">
 <h2 class="text-bold text-center pt-5 pb-3">Our Trainers</h2>
 <div class="heading-underline"></div>


 <div class="container">
     <div class="row">
       <div class="trainer-card os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
         <div class="trainer-img">
            <img src="<?php echo get_template_directory_uri().'/images/charles-davis.jpg'; ?>">
         </div>
         <div class="trainer-card-body">
           <h3>Charles Davis</h3>
            <div class="heading-underline"></div>
           <h4>Specialties</h4>
           <p>- Muscle Building</p>
           <p>- Strength Building</p>
           <p>- Cross Training</p>
          <div class="trainer-btn">
           <a href="#">Book Now</a>
         </div>
         </div>
       </div>
       <div class="trainer-card os-animation"   data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
         <div class="trainer-img">
            <img src="<?php echo get_template_directory_uri().'/images/cindy-wilson.jpg'; ?>">
         </div>
         <div class="trainer-card-body">
           <h3>Cindy Wilson</h3>
              <div class="heading-underline"></div>
           <h4>Specialties</h4>
           <p>- Endurance Training</p>
           <p>- Hot Yoga</p>
           <p>- Muscle Toning</p>
          <div class="trainer-btn">
           <a href="#">Book Now</a>
         </div>
         </div>
       </div>
       <div class="trainer-card os-animation"   data-animation="animate__animated animate__fadeInUp"
          data-delay=".4s">
         <div class="trainer-img">
            <img src="<?php echo get_template_directory_uri().'/images/trenton.jpg'; ?>">
         </div>
         <div class="trainer-card-body">
           <h3>Trent-Baldwin</h3>
            <div class="heading-underline"></div>
           <h4>Specialties</h4>
           <p>- Crossfit</p>
           <p>- Functional Training</p>
           <p>- Fat Loss</p>
          <div class="trainer-btn">
           <a href="#">Book Now</a>
         </div>
         </div>
       </div>
     </div>
 </div>
</div>
 <!-- CTA Showcase -->
      <div class="test-bg-section" style="background: linear-gradient(rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)),
    url(<?php echo get_template_directory_uri().'/images/about-cta-showcase.jpg'; ?>) no-repeat center center/cover;
  height: 100vh;
  width: 100%;
  background-size: cover;
  background-position: center center;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  will-change: transform;
  display: table;">
      <div class="bg-cta-text os-animation"  data-animation="animate__animated animate__fadeInUp"
          data-delay=".6s">
        <h2>Join Now For A Limited Time Discounted Rate</h2>
      <div> 
          <a class="about-cta-btn" href="#">Join Now</a>
      </div>
        
      </div>
     
      </div>


 <?php get_footer();?>

