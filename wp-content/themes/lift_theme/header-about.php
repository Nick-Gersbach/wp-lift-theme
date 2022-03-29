<!DOCTYPE html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lift | WP Theme</title>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">
    <!-- Start Home Section -->
    <div id="home">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a href="<?php echo site_url('') ?>" class="navbar-brand">Lift Theme</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
          >
            <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="<?php echo site_url('') ?>" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('/about') ?>" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('/blog') ?>" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('/contact') ?>" class="nav-link">Contact</a>
              </li>
              <li class="nav-item nav-cta">
                <a href="#" class="nav-link">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navigation -->

      <!-- Start Landing Page Image -->
      <div class="landing">
        <div class="home-wrap">
          <div class="home-inner" style="background: linear-gradient(rgba(20, 20, 20, 0.9), rgba(20, 20, 20, 0.9)),
    url(<?php echo get_template_directory_uri().'/images/about-header-bg.jpg'; ?>) no-repeat center center/cover;
  position: fixed;
  height: 100%;
  width: 100%;
  background-size: cover;
  background-position: center center;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  will-change: transform;
  display: table;"></div>
        </div>
      </div>
      <!-- End Landing Page Image -->

      <!-- Start Landing Page Caption -->
      <div class="caption text-center text-light text-uppercase">
        <h1
          class="font-weight-bold os-animation"
          data-animation="animate__animated animate__fadeInUp"
          data-delay=".6s"
        >
       About Us
        </h1>
        <p
          class="os-animation"
          data-animation="animate__animated animate__fadeInUp"
          data-delay=".8s"
        >
           Lift Theme Established 2012
        </p>
   
      </div>
      <!-- End Landing Page Caption -->

      <!-- Start Bouncing Down Arrow -->
      <a href="#contact-info" class="down-arrow text-center">
        <div class="arrow d-none d-md-block">
          <i class="fas fa-angle-down fa-2x"></i>
        </div>
      </a>
      <!-- End Bouncing Down Arrow -->
    </div>
    <!-- End Home Section -->

  