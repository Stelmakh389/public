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
	<?php get_template_part( 'template-parts/ticker-1' ); ?>

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
	<?php get_template_part( 'template-parts/ticker-2' ); ?>
	<?php get_template_part( 'template-parts/faq' ); ?>
	<?php get_template_part( 'template-parts/contact' ); ?>
	</main>

<?php
get_footer();
