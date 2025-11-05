<?php

get_header();
?>

<main>
	<?php
	global $post;
	$product = wc_get_product( $post->ID );
	?>
	<section class="product">
		<div class="container">
			<?php woocommerce_breadcrumb(); ?>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.webp" alt="Cube" class="product__img-bg product__img-bg--cube">
		<div class="container">
			<?php
			$gallery_image_ids = array();

			if ( $product ) {
				$featured_id = $product->get_image_id();
				if ( $featured_id ) {
					$gallery_image_ids[] = $featured_id;
				}

				$product_gallery_ids = $product->get_gallery_image_ids();
				if ( ! empty( $product_gallery_ids ) ) {
					$gallery_image_ids = array_merge( $gallery_image_ids, $product_gallery_ids );
				}
			}

			$gallery_image_ids = array_values( array_unique( array_filter( $gallery_image_ids ) ) );
			?>
			<div class="product__main">
				<div class="product__info">
					<h1 class="title title-1 product__title">
						Аренда <?php the_title(); ?> в Москве и МО <span class="">от <?php echo $product->get_price_html(); ?> / сутки</span>
					</h1>
					<ul class="list product__advantages">
						<li class="product__advantages-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-new.svg" width="70" alt="New" class="product__advantages-icon">
							<p class="product__advantages-content" contenteditable="false">В наличии <span class="" contenteditable="false">новая техника</span></p>
						</li>
						<li class="product__advantages-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-clock.webp" width="50" alt="Clock" class="product__advantages-icon">
							<p class="product__advantages-content" contenteditable="false">Привезём на точку <span class="" contenteditable="false">за 2-3 часа</span></p>
						</li>
						<li class="product__advantages-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-percent.svg" width="55" alt="Percent" class="product__advantages-icon">
							<p class="product__advantages-content" contenteditable="false">При долгосрочной аренде <span class="" contenteditable="false">дешевле</span></p>
						</li>
					</ul>
					<div class="product__buttons">
						<a class="btn btn-primary product__btn-lift open-popup" contenteditable="false">Рассчитать стоимость</a>
					</div>
				</div>
				<?php if ( ! empty( $gallery_image_ids ) ) : ?>
					<div class="product__gallery">
						<div class="swiper product-slider">
							<div class="swiper-wrapper">
								<?php foreach ( $gallery_image_ids as $image_id ) : ?>
									<?php
									$image_url = wp_get_attachment_image_url( $image_id, 'large' );

									if ( ! $image_url ) {
										continue;
									}

									$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

									if ( empty( $image_alt ) ) {
										$image_alt = get_the_title( $image_id );
									}

									if ( empty( $image_alt ) ) {
										$image_alt = get_the_title();
									}
									?>
									<div class="swiper-slide">
										<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
									</div>
								<?php endforeach; ?>
							</div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				<?php endif; ?>
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
