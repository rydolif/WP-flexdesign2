<?php
	/* Template name: Головна */
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/nav' ); ?>

	<div id="fullpage">

		<div class="hero section" id="section0">
			<div class="hero__slider swiper-container">
				<div class="swiper-wrapper">

					<div class="hero__item--one hero__item swiper-slide">
						<div class="hero__block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__item1.png" alt="">
							<h1>Insp</h1><h2>ire</h2>
							<div class="hero__block_text">
								<p>we are</p>
								<p>digital</p>
								<p>agency</p>
							</div>
						</div>
					</div>

					<div class="hero__item--two hero__item swiper-slide">
						<div class="hero__block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__item2.png" alt="">
							<h2>cr</h2><h1>eate</h1>
							<div class="hero__block_text">
								<p>we are</p>
								<p>digital</p>
								<p>agency</p>
							</div>
						</div>
					</div>

					<div class="hero__item--three hero__item swiper-slide">
						<div class="hero__block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__item3.png" alt="">
							<h1>manage</h1>
							<div class="hero__block_text">
								<p>we are</p>
								<p>digital</p>
								<p>agency</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="portfolio section" id="section1">
			<a href="<?php echo get_home_url(); ?>/burgeri/" class="portfolio__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item1.png" alt="" class="portfolio__item_img">
				<div class="portfolio__text">
					<h2>restaurant <span class="portfolio__arrow"></span></h2>
					<p>web</p>
					<p>site</p>
					<p>design</p>
				</div>
			</a>
		</div>

		<div class="portfolio section" id="section2">
			<a href="<?php echo get_home_url(); ?>/orfan/" class="portfolio__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item2.png" alt="">
				<div class="portfolio__text">
					<h2>Hand crafts<span class="portfolio__arrow"></span></h2>
					<p>online</p>
					<p>store</p>
					<p>design</p>
				</div>
			</a>
		</div>

		<div class="portfolio section" id="section3">
			<a href="<?php echo get_home_url(); ?>/frukti/" class="portfolio__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio__item3.png" alt="">
				<div class="portfolio__text">
					<h2>FRUITS <span class="portfolio__arrow"></span></h2>
					<p>web</p>
					<p>site</p>
					<p>design</p>
				</div>
			</a>
		</div>

		<?php get_template_part( 'parts/contacts_index' ); ?>

	</div>

<?php get_footer(); ?>
