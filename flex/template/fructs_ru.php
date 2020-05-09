<?php
/* Template name: Фрукти ru*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts_ru/nav_page' ); ?>

	<section class="site site--orphan">
		<div class="site__container">

			<div class="site--orphan__hero">
				<div class="site--orphan__hero_text">
					<h1 class="wow">fruits</h1>
					<p class="site--orphan__sub-title wow">e-commerce</p>
					<p class="site--orphan__sub-title wow">website</p>
					<p class="site--orphan__sub-title wow">design</p>
				</div>

				<div class="site--orphan__hero_bunner">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs.png" alt="">
				</div>
			</div>

			<div class="site--orphan__about">
				<p class="site--orphan__sub-title wow">О проекте</p>

				<div class="site--orphan__about_text">
					<p>Один из способов обратить внимание на специфику интернет-магазина - цвет. В дизайне этого сайта яркие сочные цвета напоминают о лете и практически напрямую указывают на тропические фрукты и ягоды. Необычные товарные позиции для многих незнакомы, поэтому подробная информация о каждой из них вместе с ярким фото подогревают интерес к покупке, а удобная навигация позволяет быстро сделать заказ.</p>
				</div>
			</div>

			<div class="site--fructs__main site--orphan__main">
				<p class="site--orphan__sub-title wow">Главная</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__main.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__modal.png" alt="" class="site--fructs__main_modal">
			</div>

			<div class="site--fructs__shop">
				<p class="site--orphan__sub-title wow">Каталог</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__shop.png" alt="" class="site--burger__menu_bunner wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
			</div>

			<div class="site--fructs__item site--orphan__main">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__item.png" alt="" class="wow bounceInUp" data-wow-duration="2s">

			</div>

			<div class="site--fructs__action">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__action.png" alt="" class="site--burger__menu_bunner wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">

				<div class="site--fructs__action_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__product_wrap2.png" alt="" class="wow bounceInUp" data-wow-duration="2.5s" data-wow-delay=".3s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__product_wrap1.png" alt="" class="wow bounceInUp" data-wow-duration="2.8s" data-wow-delay=".3s">
				</div>
			</div>

			<div class="site--fructs__cart">
				<p class="site--orphan__sub-title wow">Корзина</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__cart.png" alt="" class="wow bounceInUp" data-wow-duration="2.3s" data-wow-delay=".3s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__cart_item.png" alt="" class="site--fructs__cart_item wow bounceInUp"  data-wow-duration="2.9s">
			</div>

			<div class="site--fructs__dashboard">
				<p class="site--orphan__sub-title wow">Кабинет</p>

				<div class="site--fructs__dashboard_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__dashboard1.png" alt="" class="wow bounceInUp" data-wow-duration="2.3s" data-wow-delay=".3s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__dashboard2.png" alt="" class="wow bounceInUp" data-wow-duration="2.3s" data-wow-delay=".3s">
					<p></p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__dashboard3.png" alt="" class="wow bounceInUp" data-wow-duration="2.3s" data-wow-delay=".3s">
				</div>

			</div>

		</div>
	</section>

	<section class="site site--more">
		<a href="<?php echo get_home_url(); ?>/ru/orfan-ru/" class="portfolio__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item2.png" alt="">
			<div class="portfolio__text">
				<h2 class="wow">Hand crafts<span class="portfolio__arrow"></span></h2>
				<p>online</p>
				<p>store</p>
				<p>design</p>
			</div>
		</a>
	</section>

<?php get_template_part( 'parts_ru/contacts' ); ?>

<?php get_footer(); ?>
