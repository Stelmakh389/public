<?php

get_header();
?>

<main>
	<?php
	global $post;
	$product = wc_get_product( $post->ID );
	?>
	<section class="hero">
		<div class="container">
			<?php woocommerce_breadcrumb(); ?>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.webp" alt="Cube" class="hero__img-bg hero__img-bg--cube">
		<div class="container">
			<h1 class="title title-1 hero__title">
				Аренда <?php the_title(); ?> в Москве и МО <span class="">от <?php echo $product->get_price_html(); ?> / сутки</span>
			</h1>
			<ul class="list hero__advantages">
				<li class="hero__advantages-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-new.svg" width="70" alt="New" class="hero__advantages-icon">
					<p class="hero__advantages-content" contenteditable="false">В наличии <span class="" contenteditable="false">новая техника</span></p>
				</li>
				<li class="hero__advantages-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-clock.webp" width="50" alt="Clock" class="hero__advantages-icon">
					<p class="hero__advantages-content" contenteditable="false">Привезём на точку <span class="" contenteditable="false">за 2-3 часа</span></p>
				</li>
				<li class="hero__advantages-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-percent.svg" width="55" alt="Percent" class="hero__advantages-icon">
					<p class="hero__advantages-content" contenteditable="false">При долгосрочной аренде <span class="" contenteditable="false">дешевле</span></p>
				</li>
			</ul>
			<div class="hero__buttons">
				<a class="btn btn-primary hero__btn-lift open-popup" contenteditable="false">Рассчитать стоимость</a>
			</div>
		</div>
	</section>
	<div class="ticker">
		<div class="ticker__wrapper">
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>
			<span class="ticker__item" contenteditable="false">ДОСТАВКА в день обращения по МОСКВЕ И МО</span>

		</div>
	</div>

	<section class="product-attributes">
		<div class="container">
			<h2 class="title">Характеристики</h2>
			<?php
			            global $post;
			            $product = wc_get_product( $post->ID );			$attributes = $product->get_attributes();
			if ( ! empty( $attributes ) ) {
				echo '<table class="product-attributes-table">';
				foreach ( $attributes as $attribute ) {
					echo '<tr>';
					$attribute_name = wc_attribute_label($attribute->get_name());
					$attribute_value = $product->get_attribute($attribute->get_name());
					echo '<td>' . $attribute_name . '</td>';
					echo '<td>' . $attribute_value . '</td>';
					echo '</tr>';
				}
				echo '</table>';
			}
			?>
		</div>
	</section>
	<div class="ticker">
		<div class="ticker__wrapper">
			<span class="ticker__item" contenteditable="false">ВСЕ В НАЛИЧИИ</span>
			<span class="ticker__item" contenteditable="false">НОВАЯ ТЕХНИКА</span>
			<span class="ticker__item" contenteditable="false">ВСЕ В НАЛИЧИИ</span>
			<span class="ticker__item" contenteditable="false">НОВАЯ ТЕХНИКА</span>
			<span class="ticker__item" contenteditable="false">ВСЕ В НАЛИЧИИ</span>
			<span class="ticker__item" contenteditable="false">НОВАЯ ТЕХНИКА</span>
			<span class="ticker__item" contenteditable="false">ВСЕ В НАЛИЧИИ</span>
			<span class="ticker__item" contenteditable="false">НОВАЯ ТЕХНИКА</span>
		</div>
	</div>
	<section class="answers">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-shadow.webp" class="answers__bg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/lift.webp" alt="Лифт" class="answers__lift">
		<div class="container">
			<h2 class="title answers__title" contenteditable="false">Ответы на часто задаваемые вопросы</h2>
			<div data-spollers="" data-one-spoller="" class="answers__info _spoller-init">
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Какие виды подъемников вы предлагаете в аренду?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Мы предлагаем широкий выбор подъемников, включая ножничные, коленчатые и телескопические подъемники. Каждый из этих типов подъемников имеет свои особенности и подходит для различных задач.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Как быстро осуществляется доставка подъемника?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Мы гарантируем доставку подъемника в любую точку Москвы и Московской области в течение 2 часов с момента подтверждения заказа.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Какие документы необходимы для аренды подъемника?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Для оформления аренды необходимы документы, удостоверяющие личность, и, если аренда оформляется на юридическое лицо, дополнительные документы компании, такие как свидетельство о государственной регистрации и ИНН.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Можно ли арендовать подъемник на короткий срок?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Да, мы предлагаем гибкие условия аренды, начиная от нескольких часов до долгосрочной аренды. Условия и стоимость аренды зависят от выбранного периода.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Какие меры безопасности соблюдаются при аренде подъемников?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Все наши подъемники проходят регулярное техническое обслуживание и проверку на соответствие стандартам безопасности. Мы также предоставляем инструкции по эксплуатации и, при необходимости, обучение оператора.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Есть ли у вас страховка на подъемники?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Да, все наши подъемники застрахованы, что покрывает риски, связанные с эксплуатацией оборудования. Однако мы рекомендуем клиентам также иметь собственную страховку ответственности.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Какие способы оплаты вы принимаете?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Мы принимаем оплату наличными, банковскими картами, а также безналичный расчет для юридических лиц.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Можно ли отменить заказ и получить возврат средств?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Да, вы можете отменить заказ до момента отправки подъемника на ваш адрес. В случае отмены после отправки могут быть применены штрафные санкции.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Как выбрать подходящий подъемник для моих нужд?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Наши специалисты помогут вам выбрать подходящий подъемник в зависимости от ваших задач и условий работы. Вы можете связаться с нами по телефону или оставить запрос на сайте.
						</p>
					</div>
				</div>
				<div class="answers__spoller">
					<button data-spoller="" class="btn-null answers__btn">
						Предоставляете ли вы услуги оператора подъемника?
					</button>
					<div hidden="">
						<p class="answers__info-content" contenteditable="false">
							Да, мы можем предоставить квалифицированного оператора для управления подъемником. Услуга оператора оплачивается отдельно.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact" id="contact">
		<div class="container">
			<div class="contact__wrapper">
				<h2 class="title contact__title" contenteditable="false">Понравилась техника? Появились вопросы?</h2>
				<p class="contact__content" contenteditable="false">
					Оставьте заявку на консультацию или позвоните нам по телефону:&nbsp;<a href="tel:88006001319" class="" contenteditable="false">8 800 600-13-19</a>
				</p>
				<form action="#" class="contact__form">
					<input type="tel" placeholder="Ваш телефон" class="input contact__input phone">
					<button type="submit" class="btn btn-primary contact__btn">Оставить заявку</button>
				</form>
				<div class="contact__social">
					<a href="https://wa.me/79399007990" target="_blank" class="contact__social-btn">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt="whatsapp" class="contact__social-icon">
						<p class="contact__social-content" contenteditable="false">Написать в Whats App</p>
					</a>
					<a href="https://t.me/montee7990" target="_blank" class="contact__social-btn">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegramm.svg" alt="telegramm" class="contact__social-icon">
						<p class="contact__social-content" contenteditable="false">Написать в Telegramm</p>
					</a>
				</div>
			</div>
		</div>
	</section>
	</main>

<?php
get_footer();
