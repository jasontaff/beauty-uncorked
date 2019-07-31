<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Beatuy-Uncorked</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri()?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <?php wp_head(); ?>

</head>
<body> 


<header>
    <?php get_template_part('partials/navbar'); ?>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    
<?php endif; ?>
 
