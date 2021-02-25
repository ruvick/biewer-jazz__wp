 <?php 

/*
Template Name: Шаблон Текстовая страница
Template Post Type: page
*/

get_header(); ?>

<main id="main" class="site-main">

  <section class="exhibitions">
   <div class="container">

     <?php
     if ( function_exists('yoast_breadcrumb') ) {
       yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
     }
     ?>

     <h1 class="section-title"><?php the_title();?></h1>

    <div class="exhibitions__description">
      <?php the_content(); ?>
    </div>

  </div>

</section>

</main>

<?php get_footer(); ?>  

