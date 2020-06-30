
<nav class="site__nav nav">
	<?php 
		wp_nav_menu( array(
			'menu'=>'menu',
			'menu_class'=>'nav__lang',
			'theme_location'=>'menu',
		) );
	?>
	<div class=" nav__list">
		<ul class="nav__list_wrap">
			<li><a href="<?php echo get_home_url(); ?>" class="firstPage">Головна</a></li>
			<li><a href="<?php echo get_home_url(); ?>#secondPage" class="secondPage active">Портфоліо</a></li>
			<li><a href="<?php echo get_home_url(); ?>#lastPage" class="lastPage">Контакти</a></li>
		</ul>
	</div>
	<div class="nav__arrow"></div>
</nav>
