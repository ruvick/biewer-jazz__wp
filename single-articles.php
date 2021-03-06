 <?php 

/*
Template Name: Шаблон Записей Текстовая страница
Template Post Type: post
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<h1 class="section-title"><?php the_title();?></h1>
				<?php the_content(); ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();