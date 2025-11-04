<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package montee-arenda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
	<div class="container header__container">
		<a href="#" class="header__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="180" alt="Монти">
		</a>
		<div class="header__messenegers">
			<div class="header__messenegers-buttons">
				<a href="https://wa.me/79399007990" target="_blank" class="header__messenegers-btn">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt="Whatsapp" class="header__messenegers-icon">
				</a>
				<a href="https://t.me/montee7990" target="_blank" class="header__messenegers-btn">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegramm.svg" alt="Telegramm" class="header__messenegers-icon">
				</a>
			</div>
			<p class="header__messenegers-content" contenteditable="false">Задать вопрос в 1 клик</p>
		</div>
		<p class="header__hours-work" contenteditable="false">Работаем с 10:00 до 20:00 по МСК</p>
		<div class="header__contact">
			<a href="tel:+74954877324" class="header__contact-tel" contenteditable="false">+7 (495) 487-73-24</a>
			<a href="mailto:info@montee-pro.ru" class="header__contact-mail" contenteditable="false">info@montee-pro.ru</a>
		</div>
		<a href="#contact" class="btn btn-stroke anchor header__call" contenteditable="false">Перезвоните мне</a>
	</div>
</header>

