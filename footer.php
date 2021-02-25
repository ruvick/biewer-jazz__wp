<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dog
 */

?>

</div><!-- #content -->

<footer class="footer">
  <div class="container">
    <div class="logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/Biewer_logo.svg)"></div>
    <div class="social-block">
      <ul class="ul-clean">
        <?php if(carbon_get_theme_option('soc_vk')):?>
          <li><a href="<?php echo carbon_get_theme_option('soc_vk');?>" target="_blank" style="background-image: url(<?php echo get_template_directory_uri();?>/img/vk.svg)"></a></li>
        <?php endif;?>
        <?php if(carbon_get_theme_option('soc_insta')):?>
        <li><a href="<?php echo carbon_get_theme_option('soc_insta');?>" target="_blank" style="background-image: url(<?php echo get_template_directory_uri();?>/img/inst.svg)"></a></li>
        <?php endif;?>
        <?php if(carbon_get_theme_option('soc_facebook')):?>
        <li><a href="<?php echo carbon_get_theme_option('soc_facebook');?>" target="_blank" style="background-image: url(<?php echo get_template_directory_uri();?>/img/f.svg)"></a></li>
        <?php endif;?>
      </ul>
    </div>
    <div class="footer-block-menu">
      <?php main_menu();?>
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class="footer-phone"><?php echo carbon_get_theme_option('as_phone');?></a>
      <a href="#" class="button popup-content" data-formid="Заявка с подвала сайта" data-mailmsg="Заявка с подвала сайта">Задать вопрос</a>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
