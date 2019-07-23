<?php
/*
Template Name:home
*/
get_header();
?>

<!-- HERO -->
<section id ="hero">
  <div class="overlay"></div>
  <video id="heroVideo" autoplay muted loop width="1280" height="720" poster="<?php echo get_stylesheet_directory_uri()?>/media/img/vid-poster.png">
        <source type="video/mp4"  src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.mp4">
        <source type="video/webm" src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.webm">
        <source type="video/ogg" src="<?php echo get_stylesheet_directory_uri()?>/media/video/pin-ball.ogv">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center"> 
      <div class="w-100 text-white">

        <img  class="display-3" src="<?php echo get_stylesheet_directory_uri()?>/media/img/logo.png" alt="Beauty-Uncorked">
      </div>
    </div>
  </div>
</section>
<!-- END HERO -->

<!-- IMAGES GRID  -->
<section id="image-grid">
  <div class="container-fluid">
      <div class="row title"> 
          <h2 class="title">Professional Gallery</h2>
      </div>
      <div class="border-line">
								<span class="border-box"></span>
      </div>
    <div class="row"> 
      <div class="column">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/3.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/4.jpg">
      </div>
      <div class="column">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/5.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/6.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg">
      </div>  
      <div class="column">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/9.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/11.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg">
      </div>
      <div class="column">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg" >
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/2.jpg">
        <img src="<?php echo get_stylesheet_directory_uri()?>/media/img/grid/1.jpg">
      </div>
    </div>
  </div>
</section>
<!-- END IMAGES GRID


<!-- FEATURING -->
<section class="page-section" id="featuring">
      <div class="container">
        <div class="wow fadeIn text-center">
          <h2 class="title">Featuring</h2>
          <div class="border-line">
								<span class="border-box"></span>
						</div>
          <p class="featuring-desc">Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum </p>
        </div>
     
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

<!-- CLASSES-->
<section id="classes" class="pricing section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Our <span> Pricing</span></h2>
							<div class="border-line">
								<span class="border-box"></span>
							</div>
						
						</div>
					</div>
        </div>
        
				<div class="row ">
        <div class="col-md-4 price-col">
            <div class="single-pricing-box wow">
							<h4>Naturally Fresh</h4>
							<div class="single-pricing-data">
                <p>This class teaches you how to achieve a fresh-faced every day look, 
                  perfect for the office and running errands but also suitable for happy hour
                   and a dinner date. Learn how to create flawless skin, a soft glow, and a neutral toned eye that is 
                   guaranteed to turn some heads!</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$52 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>
          
          
          <div class="col-md-4">
            <div class="single-pricing-box wow">
							<h4>Ladies Night Out</h4>
							<div class="single-pricing-data">
                <p>Learn how to achieve the ultimate cocktail party and girls night look. The class focuses on everything from smokey eyes & glittered glam to bold lips and lashes to die for.</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$60 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>

          <div class="col-md-4">
            <div class="single-pricing-box wow">
							<h4>Black Tie Affair</h4>
							<div class="single-pricing-data">
                <p>This class is perfect for learning a red carpet ready look that will be the talk of any party. The class focuses on flawless skin, elegant eyes, and a contour/highlight that cameras will love.</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$60 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>
        </div>
        
      
				<div class="row pricing-row">
        <div class="col-md-4 price-col">
            <div class="single-pricing-box wow">
							<h4>Vegan Vixen</h4>
							<div class="single-pricing-data">
                <p>Cruelty free and no animal byproducts? No problem! This class works from skincare to color and everything in between. Learn vegan alternatives to popular luxury products and which brands support your beauty vision.</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$52 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>
          
          
          <div class="col-md-4">
            <div class="single-pricing-box wow">
							<h4>Bridal Glam</h4>
							<div class="single-pricing-data">
                <p>Learn how to create a look guaranteed to make more than just the groom shed a tear! This class walks step-by-step through the process of achieving the perfect bridal glam. Don’t worry bridesmaids! There are two looks mixed into this class, making it perfect for the entire bride squad.</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$60 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>

          <div class="col-md-4">
            <div class="single-pricing-box wow">
							<h4>Tis the Season</h4>
							<div class="single-pricing-data">
                <p>This class discusses everything holiday and seasonally trending, so deck the halls and prepare to look fabulously festive! The glamorous look is perfect for holiday parties and gift giving too.</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$60 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>
        </div>


        <div class="row pricing-row">
        <div class="col-md-4 offset-md-4 price-col">
            <div class="single-pricing-box wow">
							<h4>Luxury for Less  </h4>
							<div class="single-pricing-data">
                <p>Tight budget? No problem! This class goes in depth on cost effective, drugstore alternatives to luxury cosmetics to provide the ultimate “look for less”! Learn which products are actually worth the splurge and which products are frugally fabulous.</p>
							</div>
							<div class="single-pricing-content">
								<ul>
                  <li>Champagne or Wine</li>
                  <li>Step by Step Instruction to achieve<br>full- face look</li>
                  <li>Artistry Tips</li>
                  <li>Product Recommendations</li>
                  <li>Ingredient Discussion</li>
                  <li>Free Gift Bag</li>
									<li>Raffle</li>
								</ul>
              </div>
              <p class="price">$60 
                <span class="per-person">/ per-person<span></p>
							<a href="/contactus/" class="pricing-box-bt">Book NOW</a>
						</div>
          </div>
        </div>



        



			</div>
    </section>
  <!-- END CLASSES -->



<?php get_footer(); ?>


