<?php

/*
Template Name: Шаблон Порода Кавалер Кинг
Template Post Type: page
*/

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="entry-header">
      <div class="container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
      </div>
      <div class="container">
        <h1 class="section-title"><?php the_title();?></h1>
        <div class="entry-dog-content">
          <div class="entry-dog-content__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1-1.jpg)"></div>
          <div class="entry-dog-content__text">
            <p>
              Как и все спаниели, кинг чарльзы веселые и общительные собаки. Отличные компаньоны. Славятся своим хорошим отношением к детям. 
              К другим животным относятся положительно, общительны и дружелюбны при контакте с посторонними людьми. Легко поддаются дрессировкам и 
              беспрекословно слушаются хозяина.
            </p>
          </div>
        </div>
        <h2 class="section-title">Наши питомцы</h2>
        <div class="gods-gallery">
          <div class="gods-gallery__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
          <div class="gods-gallery__item gods-gallery__item-big" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-2.jpg)"></div>
          <div class="gods-gallery__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
          <div class="gods-gallery__item gods-gallery__item-big" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-2.jpg)"></div>
          <div class="gods-gallery__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
          <div class="gods-gallery__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-2.jpg)"></div>
        </div>
      </div>
    </div>
  </div>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
