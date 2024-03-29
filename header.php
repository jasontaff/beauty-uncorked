<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Beatuy-Uncorked</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri()?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145053284-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145053284-1');
    </script>

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
 
