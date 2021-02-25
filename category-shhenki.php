<?php

/**
* A Simple Category Template
*/

get_header(); ?>

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

				<h1 class="section-title"><?php single_cat_title( '', true );?></h1>
				<?php 
				if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) : the_post(); ?>

						<div class="article-blog-item article-dog-item">
							<div class="article-blog-item__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'large');?>)"></div>
							<div class="article-blog-item__content">
								<h2 class="section-title"><?php the_title();?></h2>
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
								<a href="<?php echo get_permalink();?>" class="button button-green">Подробнее</a>
							</div>
						</div>

					<?php endwhile;  

					else: ?>
						<p>В категории нет постов</p>
					<?php endif; ?>

					<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

				</div>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
