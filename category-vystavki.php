<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">
	<div id="content" role="main">
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
				<div class="article-blog-item">
			        <div class="article-blog-item__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'large');?>)"></div>
			        <div class="article-blog-item__content">
			          <h2 class="section-title"><?php the_title();?></h2>
			          <div class="article-blog-item__excerpt">
			            <?php the_excerpt();?>
			          </div>
			          <a href="<?php echo get_permalink();?>" class="button button-green">Подробнее</a>
			        </div>
			    </div>
				 
				<?php endwhile; 
				 
				else: ?>
				<p>В категории нет постов</p>
				 
				 
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>