<div class="contacts section" id="section4">
	<div class="contacts__container">
		<div class="contacts__wrap">
			<p>реалізуємо</p>
			<br>
			<p>вашу</p>
			<br>
			<p>ідею</p>
			<form action="telegram.php" method="post" class="form contacts__form">
				<div class="contacts__form_line">
					<input type="text" name="name" placeholder="Ваше ім'я"  required>
				</div>
				<div class="contacts__form_line">
					<input type="email" name="mail" placeholder="Ваша пошта" required>
				</div>
				<div class="contacts__form_btn">
					<button class="btn" type="submit" name="submit" value="Отправить">Відправити<span></span></button>
				</div>
			</form>
		</div>
		<div class="contacts__info">
			<div>
				<p>зв'язатися</p>
				<p>з нами</p>
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
	<h2>Дякуємо за довіру!</h2>
	<p>Ми зв’яжемось з вами!</p>
</div>