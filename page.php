<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
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
      <?php the_content();?>
    </div>
  </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
