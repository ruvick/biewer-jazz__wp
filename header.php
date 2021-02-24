<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png" type="image/png">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="order-modal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
          <h2>Обратный звонок</h2>
          <form action="">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="button button-green uniSendBtn">Отправить</a>
          </form>
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
  <div id="page" class="site">
    <?php if(is_home() || is_front_page()):?>
        <header class="header">
    <?php else:?>
        <header class="header header-page" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header-bg.jpg)">
    <?php endif;?>
      <div class="header-top">
        <div class="container">
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class="header-phone"><?php echo carbon_get_theme_option('as_phone');?></a>
        </div>
      </div>
      <nav class="header-nav">
        <div class="container">
          <a href="<?php echo home_url('/');?>" class="logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/Biewer_logo.svg)"></a>
          <div class="hamburger">
            <span class="hamburger-top"></span> 
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
          </div>
          <?php main_menu();?>
        </div>
      </nav>
      <?php if(is_home() || is_front_page()):?>
      <div class="header-slider">
        <div class="header-slider__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog.jpg)">
          <div class="container">
            <div class="header-slider__item-title">Biewer <br> Jazz</div>
            <div class="header-slider__item-descr">
              kennel РКФ/FCI
            </div>
            <a href="#" class="button popup-content" data-formid="Заявка со слайдера" data-mailmsg="Заявка со слайдера">Задать вопрос</a>
          </div>
        </div>
        <div class="header-slider__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dog.jpg)">
          <div class="container">
            <div class="header-slider__item-title">Biewer <br> Jazz</div>
            <div class="header-slider__item-descr">
              kennel РКФ/FCI
            </div>
            <a href="#" class="button popup-content" data-formid="Заявка со слайдера" data-mailmsg="Заявка со слайдера">Задать вопрос</a>
          </div>
        </div>
      </div>
      <?php endif;?>
    </header>

    <div id="content" class="site-content">
