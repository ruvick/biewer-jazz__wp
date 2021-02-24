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
    ) );
