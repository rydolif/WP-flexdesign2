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
				<p class="site--orphan__sub-title wow">About</p>

				<div class="site--orphan__about_text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
			</div>

			<div class="site--burger__main site--orphan__main">
				<p class="site--orphan__sub-title wow">Main page</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__main.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--burger__promotions">
				<p class="site--orphan__sub-title wow">promotions</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__promotions.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">
			</div>

			<div class="site--burger__main site--burger__menu">
				<p class="site--orphan__sub-title wow">About</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger__about.png" alt="" class="site--burger__menu_bunner wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
			</div>

			<div class="site--burger__menu">
				<p class="site--orphan__sub-title wow">Menu</p>

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
