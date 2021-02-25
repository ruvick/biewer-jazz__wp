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
