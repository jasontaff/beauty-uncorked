<?php
/*
Template Name:home
*/
get_header();
?>

<!-- HERO -->
<section id="hero">
  <video id="heroVideo" autoplay muted loop width="1280" height="720" poster="<?php echo get_stylesheet_directory_uri()?>/media/img/vid-poster.png">
        <source type="video/mp4"  src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.mp4">
        <source type="video/webm" src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.webm">
        <source type="video/ogg" src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.ogv">
  </video>
  <div class="overlay"></div>
  <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto text-center text-white">
             <img  src="<?php echo get_stylesheet_directory_uri()?>/media/img/logo.png" alt="Beauty-Uncorked">
            <!-- <div class="masthead-title">Beauty-Uncorked</div>
                <hr class="colored">
            <div class="masthead-subtitle">Lindsay Bierman Taff</div> -->
          </div> 
        </div>
    </div>
</section>
<!-- END HERO -->

<!-- IMAGES GRID  -->
<section id="image-grid">
<div class="container-fluid">
    <div class="row title"> 
        <h2>Professional Gallery</h2>
       
    </div>
    <hr class="colored">
    <div class="row"> 
  <div class="column">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/3.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/4.jpg" style="width:100%">
  </div>
  <div class="column">
  <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/5.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/6.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg" style="width:100%">
  </div>  
  <div class="column">
  <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/9.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/11.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg" style="width:100%">
  </div>
  <div class="column">
  <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/2.jpg" style="width:100%">
    <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg" style="width:100%">
  </div>
</div>
</div>



</section>
<!-- Photo Grid -->


<!-- END IMAGES GRID


<!-- FEATURING -->
<section class="page-section" id="featuring">
      <div class="container">
        <div class="wow fadeIn text-center">
          <h2>Featuring</h2>
          <p class="featuring-desc">Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum </p>
        </div>
        <hr class="colored">
        <div class="row text-center feature-row">
          <div class="col-md-4">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" >
              <i class="fa fa-code fa-4x"></i>
              <h3>Turotiral Parties</h3>
              <p class="mb-0">Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
            </div>
          </div>
          <div class=" col-md-4">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" >
              <i class="fa fa-edit fa-4x"></i>
              <h3>1 on 1 lessons</h3>
              <p class="mb-0">Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100">
              <i class="fa fa-tablet fa-4x"></i>
              <h3>Makeup Artistry</h3>
              <p class="mb-0">Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- END FEATURING -->







<?php get_footer(); ?>


