<?php
/**
 * Template Name: Home Page Template
 * Template Post Type: page
 */

get_header();
?>

<main>

	<section class="hero">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.webp" alt="Cube" class="hero__img-bg hero__img-bg--cube">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/crane.webp" alt="Cube" class="hero__img-bg hero__img-bg--crane">
		<div class="container">
			<h1 class="title title-1 hero__title" contenteditable="false">
				Аренда подъемников в Москве и МО <span class="" contenteditable="false">в наличии от 1700 руб. / сутки</span>
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
				<a class="btn btn-primary hero__btn-lift open-popup" contenteditable="false">Подобрать подъемник</a>
				<a class="btn btn-dashed hero__btn-reviews" contenteditable="false">Посмотреть отзывы</a>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/ticker-1' ); ?>

	<section class="catalog">
		<div class="container">
			<h2 class="title catalog__title" contenteditable="false">Каталог подъемников</h2>
			<?php
			$product_categories = get_terms( 'product_cat', array(
				'orderby' => 'name',
				'order'   => 'ASC',
				'hide_empty' => true,
			) );

			if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
				echo '<ul class="list catalog__nav">';
				$first = true;
				foreach ( $product_categories as $category ) {
					$active_class = $first ? ' active' : '';
					$category_name = ( $category->slug === 'misc' ) ? 'Все' : esc_html( $category->name );
					echo '<li data-tab="' . esc_attr( $category->slug ) . '" class="btn btn-stroke tab-btn catalog__nav-item' . $active_class . '">' . $category_name . '</li>';
					$first = false;
				}
				echo '</ul>';
			}
			?>
									<div class="catalog__wrapper">
										<div class="catalog__sidebar">
											<ul class="list catalog__sidebar-list">
												<li class="catalog__sidebar-item">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/repair.webp" alt="Ремонт" class="catalog__sidebar-bg">
														<span class="catalog__sidebar-title" contenteditable="false">Ремонтные работы</span>
												</li>
												<li class="catalog__sidebar-item">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt="Ремонт" class="catalog__sidebar-bg">
														<span class="catalog__sidebar-title" contenteditable="false">Мойка фасада</span>
												</li>
												<li class="catalog__sidebar-item">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg" alt="Ремонт" class="catalog__sidebar-bg">
														<span class="catalog__sidebar-title" contenteditable="false">Работы в помещениях</span>
												</li>
												<li class="catalog__sidebar-item">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg" alt="Ремонт" class="catalog__sidebar-bg">
														<span class="catalog__sidebar-title" contenteditable="false">Малярные работы</span>
												</li>
												<li class="catalog__sidebar-item">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="Ремонт" class="catalog__sidebar-bg">
														<span class="catalog__sidebar-title" contenteditable="false">Подъём людей</span>
												</li>
											</ul>
										</div>
									<?php
									if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
										$first = true;
										foreach ( $product_categories as $category ) {
											$active_class = $first ? ' active' : '';
											echo '<div data-tab="' . esc_attr( $category->slug ) . '" class="tab catalog__products' . $active_class . '">';
						
											$products_args = array(
												'post_type' => 'product',
												'posts_per_page' => -1,
												'tax_query' => array(
													array(
														'taxonomy' => 'product_cat',
														'field'    => 'slug',
														'terms'    => $category->slug,
													),
												),
											);
						
											$products_query = new WP_Query( $products_args );
						
											if ( $products_query->have_posts() ) {
												echo '<ul class="list catalog__products-list">';
												while ( $products_query->have_posts() ) {
													$products_query->the_post();
													global $product;
													echo '<li class="catalog__item">';
													                                                                                if ( has_post_thumbnail() ) {
													                                                                                    echo get_the_post_thumbnail( get_the_ID(), 'shop_catalog', array( 'class' => 'catalog__img' ) );
													                                                                                } else {
													                                                                                    echo '<img src="' . get_template_directory_uri() . '/assets/img/photo.jpg" alt="No Photo" class="catalog__img">';
													                                                                                }													echo '<h5 class="title catalog__item-title">' . get_the_title() . '</h5>';
																							$attributes = $product->get_attributes();
																							if ( ! empty( $attributes ) ) {
																								echo '<ul class="list catalog__specifications">';
																								$count = 0;
																								foreach ( $attributes as $attribute ) {
																									if ($count < 3) {
																										                                                                                                                                                                                                                        $attribute_name = wc_attribute_label($attribute->get_name());
																										                                                                                                                                                                                                                        $attribute_value = $product->get_attribute($attribute->get_name());
																										                                                                                                                                                                                                                        echo '<li>' . $attribute_name . ': ' . $attribute_value . '</li>';																										$count++;
																									} else {
																										break;
																									}
																								}
																								echo '</ul>';
																							}													echo '<span class="catalog__price">' . $product->get_price_html() . '</span>';
													echo '<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>';
													echo '</li>';
												}
												echo '</ul>';
											}
											wp_reset_postdata();
						
											echo '</div>';
											$first = false;
										}
									}
									?>
									</div>		</div>
	</section>
	<?php get_template_part( 'template-parts/ticker-2' ); ?>

	<?php get_template_part( 'template-parts/faq' ); ?>
	<?php get_template_part( 'template-parts/contact' ); ?>
	</main>

<?php get_footer();?>
