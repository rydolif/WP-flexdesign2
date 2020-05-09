<?php
/* Template name: Орфан */
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/nav_page' ); ?>

	<section class="site site--orphan">
		<div class="site__container">

			<div class="site--orphan__hero">
				<div class="site--orphan__hero_text">
					<h1 class="wow">Hand crafts</h1>
					<p class="site--orphan__sub-title wow">online</p>
					<p class="site--orphan__sub-title wow">store</p>
					<p class="site--orphan__sub-title wow">design</p>
				</div>

				<div class="site--orphan__hero_bunner">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan.png" alt="">
				</div>
			</div>

			<div class="site--orphan__about">
				<p class="site--orphan__sub-title wow">Про проєкт</p>

				<div class="site--orphan__about_text">
					<p>Сайт з унікальною ідеєю співпраці дизайнерів та дітей-сиріт. Концепція створення дітьми принтів для товарів в легкій для сприйняття кольоровій гамі сайту і чіткими шрифтами звертає увагу на задумку творців, не відволікаючи на зайві деталі. Проста мова викладу в форматі "запитання-відповідь" дає читачеві відчуття близького довірливого спілкування і закликає стати частиною важливої ​​місії, зробивши покупку. Детальний опис кожного товару в каталозі (розміри, вага, склад і тд.) та різнопланові фотографії дають можливість потенційному покупцеві максимально реалістично уявити той чи інший предмет.</p>
				</div>
			</div>

			<div class="site--orphan__main">

				<p class="site--orphan__sub-title wow">Головна</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__main.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
				<div class="site--orphan__main_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__why.png" alt="" class="site--orphan__main_img wow bounceInUp" data-wow-duration="2s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__why2.png" alt="" class="site--orphan__main_img2 wow bounceInUp" data-wow-duration="2s">
				</div>
			</div>

			<div class="site--orphan__catalog">
				<p class="site--orphan__sub-title wow">Каталог</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__catalog.png" alt="" class="wow bounceInUp" data-wow-duration="1.8s" data-wow-delay=".3s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__catalog_item.png" alt="" class="site--orphan__catalog_item wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--orphan__product">
				<p class="site--orphan__sub-title wow">Сторінка продукту</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__product.png" alt="" class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
				<div class="site--orphan__product_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__product_wrap1.png" alt="" class="wow bounceInUp" data-wow-duration="2.5s" data-wow-delay=".3s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__product_wrap2.png" alt="" class="wow bounceInUp" data-wow-duration="2.8s" data-wow-delay=".3s">
				</div>
			</div>

			<div class="site--orphan__cart">
				<p class="site--orphan__sub-title wow">Корзина</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__cart.png" alt="" class="wow bounceInUp" data-wow-duration="2.3s" data-wow-delay=".3s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__cart2.png" alt="" class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__cart_item.png" alt="" class="site--orphan__cart_item wow bounceInUp" data-wow-duration="2.9s">
			</div>

			<div class="site--orphan__autorization">
				<p class="site--orphan__sub-title wow">Авторизація</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__autorization_item.png" alt="" class="site--orphan__autorization_item wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__autorization1.png" alt="" class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">

				<div class="site--orphan__autorization_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__autorization3.png" alt="" class="wow bounceInUp" data-wow-duration="2.8s" data-wow-delay=".3s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__autorization2.png" alt="" class="wow bounceInUp" data-wow-duration="3s" data-wow-delay=".3s">
				</div>
			</div>

			<div class="site--orphan__contacts">
				<p class="site--orphan__sub-title wow">Контакти</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orphan__contats.png" alt="" class="wow bounceInUp" data-wow-duration="2.2s" data-wow-delay=".3s">
			</div>

		</div>
	</section>

	<section class="site site--more">
		<a href="<?php echo get_home_url(); ?>/burgeri/" class="portfolio__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item1.png" alt="" class="portfolio__item_img">
			<div class="portfolio__text">
				<h2 class="wow">restaurant <span class="portfolio__arrow"></span></h2>
				<p>web</p>
				<p>site</p>
				<p>design</p>
			</div>
		</a>
	</section>
	
<?php get_template_part( 'parts/contacts' ); ?>

<?php get_footer(); ?>
