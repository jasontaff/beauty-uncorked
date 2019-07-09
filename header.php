<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Beatuy-Uncorked</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>

    <?php wp_head(); ?>

</head>
<body> 

<?php get_template_part('partials/navbar'); ?>



<header id="video-container" class="masthead">
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

</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<section id="image-collage">

</section>