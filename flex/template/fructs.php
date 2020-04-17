<?php
/* Template name: Фрукти */
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/nav_page' ); ?>

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
				<p class="site--orphan__sub-title wow">About</p>

				<div class="site--orphan__about_text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
			</div>

			<div class="site--fructs__main site--orphan__main">
				<p class="site--orphan__sub-title wow">Main page</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__main.png" alt="" class="site--orphan__main_bunner wow bounceInUp" data-wow-duration="2s">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__modal.png" alt="" class="site--fructs__main_modal">
			</div>

			<div class="site--fructs__shop">
				<p class="site--orphan__sub-title wow">shop</p>

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
				<p class="site--orphan__sub-title wow">shopping cart</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__cart.png" alt="" class="wow bounceInUp" data-wow-duration="2.3s" data-wow-delay=".3s">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fructs__cart_item.png" alt="" class="site--fructs__cart_item wow bounceInUp"  data-wow-duration="2.9s">
			</div>

			<div class="site--fructs__dashboard">
				<p class="site--orphan__sub-title wow">dashboard</p>

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
		<a href="<?php echo get_home_url(); ?>/orfan/" class="portfolio__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item2.png" alt="">
			<div class="portfolio__text">
				<h2 class="wow">Hand crafts<span class="portfolio__arrow"></span></h2>
				<p>online</p>
				<p>store</p>
				<p>design</p>
			</div>
		</a>
	</section>

<?php get_template_part( 'parts/contacts' ); ?>

<?php get_footer(); ?>
