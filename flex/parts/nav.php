
<nav class="nav">
	<?php 
		wp_nav_menu( array(
			'menu'=>'menu',
			'menu_class'=>'nav__lang',
			'theme_location'=>'menu',
		) );
	?>
	<div class="nav__list">
		<ul class="nav__list_wrap">
			<li data-menuanchor="firstPage"><a href="#firstPage" class="firstPage">Ми</a></li>
			<li data-menuanchor="secondPage"><a href="#secondPage" class="secondPage">Портфоліо</a></li>
			<li data-menuanchor="lastPage"><a href="#lastPage" class="lastPage">Контакти</a></li>
		</ul>
	</div>
	<div class="nav__arrow">
		<a id="moveSectionUp" href="#"><span></span></a>
		<a id="moveSectionDown" href="#"><span></span></a>
	</div>
</nav>
