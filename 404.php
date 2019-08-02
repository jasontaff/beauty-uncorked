<?php get_header(); ?>

<section>

<div class="container">
<div class="row">
<div class="col-md-12 text-center">
    <h3>Sorry! Page not found!</h3>
    <h3> It seems you're looking for something that isn't here!</h3>
    <br/>
                    <?php if( get_page_by_path('/about') ) : ?>
                        <a href="/about/">Read about Beauty-Uncorked</a><br/><br/>
                    <?php endif; ?>
                    <?php if( get_page_by_path('classes') ) : ?>
                        <a href="/classes/">Check out our classes!</a><br/><br/>
                    <?php endif; ?>
                    <?php if( get_page_by_path('faq') ) : ?>
                        <a href="/faq/">Read our FAQ</a><br/><br/>
                    <?php endif; ?>
                    <?php if( get_page_by_path('contact-us') ) : ?>
                        <a href="/contact-us/">Submit a message</a><br/><br/>
                    <?php endif; ?>

    <a href="/"">Click here</a> to go back to homepage

</div>
</div>
</div>

</section>
<?php get_footer(); ?>