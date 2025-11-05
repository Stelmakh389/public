<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package montee-arenda
 */

?>

<footer class="footer">
	<div class="container footer__container">
		<a href="#" class="footer__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="Логотип" class="footer__logo-img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Логотип" class="footer__logo-img footer__logo-img--mobile">
		</a>
		<p class="footer__content" contenteditable="false">2021-2023 © Монти</p>
		<a href="/privacy.html" class="footer__politics" contenteditable="false">Политика конфиденциальности</a>
	</div>
</footer>

<script src="https://unpkg.com/imask"></script>

<!-- Попап форма обратной связи -->
<div class="popup__bg" id="contact-popup">
	<div class="popup">
		<div class="close-popup popup-popup">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M18 6L6 18M6 6L18 18" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
		</div>
		<h3 class="popup__title" contenteditable="false">Оставить заявку</h3>
		<p class="popup__subtitle" contenteditable="false">Мы свяжемся с вами в течение 15 минут</p>
		<form class="popup__form" id="contact-form">
			<div class="popup__input-wrapper">
				<input type="tel" name="phone" class="popup__input phone" placeholder="+7(999)999-99-99" required="">
			</div>
			<div class="popup__checkbox-wrapper">
				<label class="popup__checkbox-label">
					<input type="checkbox" name="privacy" class="popup__checkbox" required="">
					<span class="popup__checkbox-custom"></span>
					<span class="popup__checkbox-text" contenteditable="false">Я согласен с условиями <a href="privacy.html" target="_blank" class="" contenteditable="false">обработки персональных данных</a></span>
				</label>
			</div>
			<button type="submit" class="btn btn-primary popup__submit">Отправить заявку</button>
		</form>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
