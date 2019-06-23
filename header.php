<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php wp_title('')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
   
    <?php wp_head(); ?>

</head>
<body>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<header id="header">
   
</header>

