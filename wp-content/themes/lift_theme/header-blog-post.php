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
      <nav class="navbar navbar-expand-lg fixed-top" style="background: #333;">
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
              <li class="nav-item" <?php if(is_page('lift-theme')) echo 'class="current-menu-item"'; ?>>
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
      <div class="landing" style="display: none;">
        <div class="home-wrap">
          <div class="home-inner" style="  background:
    url(<?php echo get_template_directory_uri().''; ?>) no-repeat center center/cover;
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

        </h1>
        <h3
          class="os-animation"
          data-animation="animate__animated animate__fadeInUp"
          data-delay=".8s"
        >
        
        </h3>
        <a
          href="#features"
          class="btn btn-outline-light btn-lg rounded-0 os-animation"
          data-animation="animate__animated animate__fadeInUp"
          data-delay="1s"
          ></a
        >
      </div>
      <!-- End Landing Page Caption -->
    </div>
    <!-- End Home Section -->

     