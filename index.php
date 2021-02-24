<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dog
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <section class="about" id="about">
      <div class="container">
        <h2 class="section-title">О питомнике</h2>
        <?php echo wpautop(carbon_get_theme_option('dog_about'));?>
      </div>
    </section>
    <section class="articles">
      <div class="container">
        <div class="article-item">
          <a href="#">
            <div class="article-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-1.jpg)"></div>
            <h3 class="article-item__title">Кавалер кинг-чарльз-спаниель</h3>
          </a>
          <div class="article-item__text">
            собака домашняя, и она определенно станет любимчиком семьи. Любит находиться в центре внимания, очень общителен. Кавалер-кинг-чарльз-спаниель просто боготворит людей и не чает души в детях. Лает охотно, для них это самый первый способ заявить о хорошем настроении.
          </div>
          <a href="<?php echo get_permalink(9);?>" class="button button-green">Подробнее</a>
        </div>
        <div class="article-item">
          <a href="">
            <div class="article-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog-2.jpg)"></div>
            <h3 class="article-item__title">Бишон фризе</h3>
          </a>
          <div class="article-item__text">
            французская маленькая порода собак из группы бишонов (болонок); от 15 до 30 см в длину и от 15 до 30 см в высоту, отличается кучерявой, густой, длинной и шелковистой шерстью, только белого цвета, бежевые или рыжеватые (ржавые) пятна допускаются только у щенков.
          </div>
          <a href="<?php echo get_permalink(7);?>" class="button button-green">Подробнее</a>
        </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
