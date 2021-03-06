<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Бишон Фризе
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dog
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
          <div class="entry-dog-content__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-2-2.jpg)"></div>
          <div class="entry-dog-content__text">
            <p>
              Бишон-фризе отличается превосходным характером. Это идеальная собака-компаньон: дружелюбная, преданная, 
              обожающая общение со своей человеческой семьей. Привязанность к людям заставляет бишон-фриза находиться преимущественно в помещении. 
              Бишон-фризе всегда готов поиграть, погулять или просто полежать возле вас. Позитивный настрой делает эту собаку идеальным другом 
              как для молодежи, так и для пожилых людей. Это милое существо обожает быть центром внимания и удивительно легко усваивает 
              специальные навыки.
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
