<?php 

/*
Template Name: Contact Page
*/

?>

<!-- Contact Page Header -->
<?php get_header('contact'); ?>

<!-- Contact Pahge Heading -->
 <h2 class="text-bold text-center pt-5 pb-3">Contact Information</h2>
 <div class="heading-underline"></div>

 <!-- Contact Page Info Cards -->
<div class="contact-page-wrapper py-5">
  <div class="container">
    <div class="row mx-auto">
    <div class="card contact-card bg-light mb-3 mx-auto os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".6s">
      <div class="card-header">Address</div>
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-location-arrow fa-2x"></i></h5>
        <p class="card-text">198 West 21st Street, Phoenix AZ 85003</p>
      </div>
</div>
<div class="card contact-card bg-light mb-3 mx-auto os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".6s">
  <div class="card-header">Phone Number</div>
  <div class="card-body">
    <h5 class="card-title"><i class="fas fa-mobile-alt fa-2x"></i></h5>
    <p class="card-text">+123-456-7890</p>
  </div>
</div>
<div class="card contact-card bg-light mb-3 mx-auto os-animation" data-animation="animate__animated animate__fadeInUp"
          data-delay=".6s">
  <div class="card-header">Email</div>
  <div class="card-body">
    <h5 class="card-title"><i class="fas fa-envelope-open-text fa-2x"></i></h5>
    <p class="card-text">info@lifttheme.com</p>
  </div>
</div>
    </div>
  </div>
</div>
        
 <div class="contact-form text-center py-3 mx-auto os-animation" data-animation="animate__animated animate__fadeInUp" data-delay=".6s">                          
    <?php if(have_posts() ): while(have_posts() ): the_post();?>
    <?php the_content();?>
    <?php endwhile; else: endif;?> 
    </div> 
  </div>
</div>

<?php get_footer();?>
