<?php

/**
* A Simple Category Template
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
				<h1 class="section-title"><?php single_cat_title( '', true );?></h1>
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
										<span class="color-green">Пол:</span>
										<span><?php echo carbon_get_the_post_meta('gender');?></span>
									</div>
									<div class="parents">
										<span class="color-green">Награды:</span>
										<span><?php echo carbon_get_the_post_meta('awards');?></span>
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
