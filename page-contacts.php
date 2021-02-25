 <?php 

/*
Template Name: Страница Контакты
Template Post Type: page
*/

get_header(); ?>

<section class="contacts">
	<div class="container">

		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>

		<h1 class="section-title"><?php the_title();?></h1>

		<ul>
			<li>Адрес: <? echo carbon_get_theme_option("as_address"); ?></li>
			<li>Телефон: <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone"); ?>, <? echo $tel = carbon_get_theme_option("as_phone_2"); ?></a></li>
			<li>Email: <a href="mailto:<? echo $mail = carbon_get_theme_option("as_email"); ?>"><? echo $mail; ?></a></li>
			<li><a href="<? echo carbon_get_theme_option("soc_vk"); ?>" aria-label="ВКонтакте">ВКонтакте</a></li>
			<li>Инстаграм: <? echo carbon_get_theme_option("soc_insta"); ?></li>
			<li>Facebook<a href="<? echo carbon_get_theme_option("soc_facebook"); ?>" aria-label=">Facebook"></a></li>
		</ul>

</div>

		<div class="block__map" id="map"></div>
		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

		<script>
			ymaps.ready(init);

			function init () {
				var myMap = new ymaps.Map("map", {
        // Координаты центра карты
        center:[<?php echo carbon_get_theme_option('map_point') ?>],
        // Масштаб карты
        zoom: 17,
        // Выключаем все управление картой
        controls: []
      }); 
				
				var myGeoObjects = [];
				
    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>],{
    	// hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
    	balloonContentBody: '<div class="map-hint"><?php echo carbon_get_theme_option('text_map') ?>',
    },{
    	iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref: '<?php bloginfo("template_url"); ?>/img/map-marker.svg',  
                    // Размеры иконки
                    iconImageSize: [70, 70],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-25, -110]
                  });
    
    var clusterer = new ymaps.Clusterer({
    	clusterDisableClickZoom: false,
    	clusterOpenBalloonOnClick: false,
    });
    
    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

  }
</script>

</section>

<?php get_footer(); ?>  