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

<?php wp_footer(); ?>

</body>
</html>
