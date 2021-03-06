<?php
if(!defined('ABSPATH')) {
    exit();
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make( 'theme_options', 'as_theme_options', 'Настройки темы' )
    ->add_tab('Главная', array(
        Field::make('rich_text', 'dog_about', 'Текст О нас'),
    ))
    ->add_tab('Соцсети', array(
        Field::make('text', 'soc_vk', 'Ссылка ВК'),
        Field::make('text', 'soc_insta', 'Ссылка Инстаграм'),
        Field::make('text', 'soc_facebook', 'Ссылка Facebook'),
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон 2' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );
Container::make('post_meta', 'single_porodi_post', 'Доп поля')
->show_on_template('single-porodi.php') 
->add_fields(array( 
  Field::make('text', 'gender', 'Пол')
  ->set_width(30),
  Field::make('text', 'awards', 'Награды')
  ->set_width(30),
));
Container::make('post_meta', 'single_shenki_post', 'Доп поля')
->show_on_template('single-shenki.php') 
->add_fields(array( 
  Field::make('text', 'dad', 'Папа')
  ->set_width(30),
  Field::make('text', 'mother', 'Мама')
  ->set_width(30),
));