 <?php 

/*
Template Name: Шаблон Страницы Выставки
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

     <div class="exhibitions__row">
      <div class="exhibitions__item exhibitions__item-img">
        <?php echo get_the_post_thumbnail();?>
      </div>

      <div class="exhibitions__item exhibitions__item-video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Hd_58_zUYeg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="exhibitions__description">
      <?php the_content(); ?>
    </div>

  </div>

</section>

</main>

<?php get_footer(); ?>  

