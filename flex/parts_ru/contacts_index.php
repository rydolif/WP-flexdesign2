
<div class="contacts section" id="section4">
	<div class="contacts__container">
		<div class="contacts__wrap">
			<p>реализуем</p>
			<br>
			<p>вашу</p>
			<br>
			<p>идею</p>
			<form action="telegram.php" method="post" class="form contacts__form">
				<div class="contacts__form_line">
					<input type="text" name="name_ru" placeholder="Ваше имя"  required>
				</div>
				<div class="contacts__form_line">
					<input type="email" name="mail_ru" placeholder="Вашa почта" required>
				</div>
				<div class="contacts__form_line">
					<input type="tel" name="phone_ru" placeholder="Ваш телефон" required>
				</div>
				<div class="contacts__form_btn">
					<button class="btn" type="submit" name="submit" value="Отправить">Отправить<span></span></button>
				</div>
			</form>
		</div>
		<div class="contacts__info">
			<div>
				<p>свяжитесь</p>
				<p>с нами</p>
			</div>
			<div>
				<span class="contacts__info_before">follow us</span>
				<a href="mailto:<?php the_field('mail', 'option'); ?>"><b><?php the_field('mail', 'option'); ?></b></a>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>"><b><?php the_field('tel', 'option'); ?></b></a>
				<a href="<?php the_field('behance', 'option'); ?>" target="_blank">behance</a>
				<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">instagram</a>
				<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">facebook</a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="thanks">
	<button class="modal__close thanks_close" type="button">
		<span></span>
		<span></span>
	</button>
	<h2>Спасибо за доверие!</h2>
	<p>Мы свяжемся с вами!</p>
</div>