<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Щенки
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
      <div class="article-blog-item article-dog-item">
        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
        <div class="article-blog-item__content">
          <h2 class="section-title">Щенки Бишон Фризе помет от 24.03.2019</h2>
          <div class="article-blog-item__excerpt">
            <div class="parents">
              <span class="color-green">Мама:</span>
              <span>ROYAL CURAZ GABRIELLA</span>
            </div>
            <div class="parents">
              <span class="color-green">Папа:</span>
              <span>ROYAL CURAZ KELWIN</span>
            </div>
          </div>
          <a href="#" class="button button-green">Подробнее</a>
        </div>
      </div>
      <div class="article-blog-item article-dog-item">
        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
        <div class="article-blog-item__content">
          <h2 class="section-title">Щенки Бишон Фризе помет от 24.03.2019</h2>
          <div class="article-blog-item__excerpt">
            <div class="parents">
              <span class="color-green">Мама:</span>
              <span>ROYAL CURAZ GABRIELLA</span>
            </div>
            <div class="parents">
              <span class="color-green">Папа:</span>
              <span>ROYAL CURAZ KELWIN</span>
            </div>
          </div>
          <a href="#" class="button button-green">Подробнее</a>
        </div>
      </div>
      <div class="article-blog-item article-dog-item">
        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
        <div class="article-blog-item__content">
          <h2 class="section-title">Щенки Бишон Фризе помет от 24.03.2019</h2>
          <div class="article-blog-item__excerpt">
            <div class="parents">
              <span class="color-green">Мама:</span>
              <span>ROYAL CURAZ GABRIELLA</span>
            </div>
            <div class="parents">
              <span class="color-green">Папа:</span>
              <span>ROYAL CURAZ KELWIN</span>
            </div>
          </div>
          <a href="#" class="button button-green">Подробнее</a>
        </div>
      </div>
    </div>
    </div>
  </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
