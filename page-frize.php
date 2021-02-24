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
        <div class="entry-dog-content__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
        <div class="entry-dog-content__text">
          Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ведущими запятых там продолжил рыбного подзаголовок необходимыми рыбными путь заголовок, домах lorem предложения алфавит запятой раз наш языком собрал обеспечивает!
          <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Путь все взобравшись букв, правилами лучше, жаренные сбить большого коварных единственное грустный обеспечивает пояс проектах скатился океана строчка однажды грамматики?</p>
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
