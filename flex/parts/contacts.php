
<div class="contacts site site--contacts section" id="contacts">
	<div class="contacts__container">
		<div class="contacts__wrap">
			<p class="wow">реалізуємо</p>
			<br>
			<p class="wow">вашу</p>
			<br>
			<p class="wow">ідею</p>
			<form action="telegram.php" method="post" class="form contacts__form">
				<div class="contacts__form_line">
					<input type="text" name="name" placeholder="Ваше ім'я"  required>
				</div>
				<div class="contacts__form_line">
					<input type="email" name="mail" placeholder="Ваша пошта" required>
				</div>
				<div class="contacts__form_btn">
					<button class="btn" type="submit" name="submit" value="Отправить">Отправить<span></span></button>
				</div>
			</form>
		</div>
		<div class="contacts__info">
			<div>
				<p class="wow">свяжитесь</p>
				<p class="wow">с нами</p>
			</div>
			<div>
				<span class="contacts__info_before wow">follow us</span>
				<a href="mailto:<?php the_field('mail', 'option'); ?>" class="wow"><b><?php the_field('mail', 'option'); ?></b></a>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="wow"><b><?php the_field('tel', 'option'); ?></b></a>
				<a href="<?php the_field('behance', 'option'); ?>" target="_blank" class="wow">behance</a>
				<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="wow">instagram</a>
				<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="wow">facebook</a>
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