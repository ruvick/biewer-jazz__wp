<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Статьи
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
      <div class="article-blog-item">
        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog.jpg)"></div>
        <div class="article-blog-item__content">
          <h2 class="section-title">Заголовок строки</h2>
          <div class="article-blog-item__excerpt">
            Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Раз не взгляд ручеек жаренные запятых вскоре, заглавных страну осталось над точках толку силуэт буквоград рукописи страна сих злых несколько.
          </div>
          <a href="#" class="button button-green">Подробнее</a>
        </div>
      </div>
      <div class="article-blog-item">
        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog.jpg)"></div>
        <div class="article-blog-item__content">
          <h2 class="section-title">Заголовок строки</h2>
          <div class="article-blog-item__excerpt">
            Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Раз не взгляд ручеек жаренные запятых вскоре, заглавных страну осталось над точках толку силуэт буквоград рукописи страна сих злых несколько.
          </div>
          <a href="#" class="button button-green">Подробнее</a>
        </div>
      </div>
      <div class="article-blog-item">
        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog.jpg)"></div>
        <div class="article-blog-item__content">
          <h2 class="section-title">Заголовок строки</h2>
          <div class="article-blog-item__excerpt">
            Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Раз не взгляд ручеек жаренные запятых вскоре, заглавных страну осталось над точках толку силуэт буквоград рукописи страна сих злых несколько.
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
