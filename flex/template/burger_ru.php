<?php
/* Template name: Бургери ru */
?>

<?php get_header(); ?>

<?php get_template_part( 'parts_ru/nav_page' ); ?>

	<section class="site site--orphan">
		<div class="site__container">

			<div class="site--orphan__hero">
				<div class="site--orphan__hero_text">
					<h1 class="wow">Restaurant</h1>
					<p class="site--orphan__sub-title wow">web</p>
					<p class="site--orphan__sub-title wow">site</p>
					<p class="site--orphan__sub-title wow">design</p>
				</div>

				<div class="site--orphan__hero_bunner">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.png" alt="">
				</div>
			</div>

			<div class="site--orphan__about">
				<p class="site--orphan__sub-title wow">О проекте</p>

				<div class="site--orphan__about_text">
					<p>В огромном количестве кафе и ресторанов важно показать уникальность предприятия. Каждая деталь сайта должна соответствовать принципам работы заведения. Лаконичный дизайн сайта и цветовая гамма отражает основные пункты философии сотрудников: простота, дружелюбие, доступность. Основная фишка заведения - бургеры. Именно им отведено главное место в меню с яркими натуральными аппетитными фотографиями как мотивацией к заказу. Простая навигация делает сайт доступным для любого пользователя, а фотографии интерьера и наличие отзывов клиентов действуют как приглашение посетить само заведение.</p>
				</div>
			</div>

			<div class="site--burger__main site--orphan__main">
				<p class="site--orphan__sub-title wow">Главная</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__main.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--burger__promotions">
				<p class="site--orphan__sub-title wow">Акции</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__promotions.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--burger__main site--burger__menu">
				<p class="site--orphan__sub-title wow">О нас</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__about.png" alt="" class="site--burger__menu_bunner wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
			</div>

			<div class="site--burger__menu">
				<p class="site--orphan__sub-title wow">Меню</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__menu.png" alt="" class="site--burger__menu_bunner wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__menu_item1.png" alt="" class="site--burger__menu_item site--burger__menu_item--one wow bounceInUp" data-wow-duration="2s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__menu_item2.png" alt="" class="site--burger__menu_item site--burger__menu_item--two wow bounceInUp" data-wow-duration="2s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__menu_item3.png" alt="" class="site--burger__menu_item site--burger__menu_item--three wow bounceInUp" data-wow-duration="2s">
			</div>

		</div>
	</section>

	<section class="site site--more">
		<a href="<?php echo get_home_url(); ?>/ru/frukti/" class="portfolio__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item3.png" alt="">
			<div class="portfolio__text">
				<h2 class="wow">fruits<span class="portfolio__arrow"></span></h2>
				<p>e-commerce</p>
				<p>website</p>
				<p>design</p>
			</div>
		</a>
	</section>

<?php get_template_part( 'parts_ru/contacts' ); ?>

<?php get_footer(); ?>
