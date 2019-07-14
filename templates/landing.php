<?php
/*
Template Name:landing
*/
get_header();
?>

<!-- HERO -->
<section id="hero">
  <video autoplay muted loop width="1280" height="720">
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

<!-- FEATURING -->
<section class="page-section" id="featuring">
      <div class="container">
        <div class="wow fadeIn text-center">
          <h1>Services</h1>
          <p class="mb-0">Vitality is the perfect theme for a freelance professional or an agency.</p>
        </div>
        <hr class="colored">
        <div class="row text-center">
          <div class="col-md-4">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" >
              <i class="fa fa-code fa-4x"></i>
              <h3>Turotiral Parties</h3>
              <p class="mb-0">Unleash the power and flexibility of the newly released Bootstrap 4 when you choose Vitality! One framework, every device.</p>
            </div>
          </div>
          <div class=" col-md-4">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" >
              <i class="fa fa-edit fa-4x"></i>
              <h3>1 on 1 lessons</h3>
              <p class="mb-0">Vitality is easy to edit and customize and includes SASS and LESS versions for deeper customization.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100">
              <i class="fa fa-tablet fa-4x"></i>
              <h3>Makeup Artistry</h3>
              <p class="mb-0">In today's world where devices come in every shape and size, Vitality will responsively adapt to look great on any screen!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- END FEATURING -->







<?php get_footer(); ?>


