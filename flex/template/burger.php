<?php
/* Template name: Бургери */
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/nav_page' ); ?>

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
				<p class="site--orphan__sub-title wow">Про проєкт</p>

				<div class="site--orphan__about_text">
					<p>Серед великої кількості кафе і ресторанів важливо показати унікальність закладу. Кожна деталь сайту повинна відповідати принципам роботи установи. Лаконічний дизайн сайту і кольорова гама відображає основні пункти філософії працівників: простота, дружелюбність, доступність.
					Основна фішка закладу - бургери. Саме їм належить головне місце в меню з яскравими натуральними апетитними фотографіми як мотивацією зробити замовлення.
					Проста навігація робить сайт доступним будь-якому користувачеві, а фотографії інтер'єру і наявність відгуків клієнтів діють як запрошення відвідати сам заклад.</p>
				</div>
			</div>

			<div class="site--burger__main site--orphan__main">
				<p class="site--orphan__sub-title wow">Головна</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__main.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--burger__promotions">
				<p class="site--orphan__sub-title wow">Акції</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__promotions.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--burger__main site--burger__menu">
				<p class="site--orphan__sub-title wow">Про нас</p>

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
		<a href="<?php echo get_home_url(); ?>/frukti/" class="portfolio__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item3.png" alt="">
			<div class="portfolio__text">
				<h2 class="wow">fruits<span class="portfolio__arrow"></span></h2>
				<p>e-commerce</p>
				<p>website</p>
				<p>design</p>
			</div>
		</a>
	</section>

<?php get_template_part( 'parts/contacts' ); ?>

<?php get_footer(); ?>
