<?php
/*
Template Name:about
*/
get_header();
?>




<!-- ABOUT -->
<section id="about">
    <div class="container">
			<div class="row bio-row">
                <div  class="col-md-4">
                        <img class="selfie" src="<?php echo get_stylesheet_directory_uri()?>/media/img/bio.jpg" alt="Myself">
                </div>
                <div class="col-md-8">
                    <h2>BIO</>
                
                    <p>loreum ipsum loreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsum
                        vloreum ipsumloreum ipsumloreum ipsum
                        loreum ipsumloreum ipsumvloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumvloreumloreum ipsumloreum ipsumloreum ipsum
                        loreum ipsumloreum ipsumloreum ipsumloreum ipsumloreum ipsumvloreum ipsumloreum ipsum
                    </p>
                </div>
            </div>
            <div class="row logo-row">
                <div class="col-md-12 text-center">
                    <img  class="logo" src="<?php echo get_stylesheet_directory_uri()?>/media/img/logo.png" alt="Beauty-Uncorked">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                <video width="700" controls>
                    <source type="video/mp4"  src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.mp4">
                    <source type="video/webm" src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.webm">
                    <source type="video/ogg" src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.ogv">
                    </video>
                </div>
            </div>
    </div>
</section>
<!-- END ABOUT -->







<?php get_footer(); ?>


