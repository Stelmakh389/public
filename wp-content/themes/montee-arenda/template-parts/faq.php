<section class="answers">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-shadow.webp" class="answers__bg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/lift.webp" alt="Лифт" class="answers__lift">
		<div class="container">
			<h2 class="title answers__title">Ответы на часто задаваемые вопросы</h2>
			<div class="answers__info">
				<?php if ( have_rows( 'faq', 'option' ) ) : ?>
					<?php while ( have_rows( 'faq', 'option' ) ) : the_row(); ?>
						<details class="answers__spoller">
							<summary class="answers__btn">
								<?php the_sub_field( 'question' ); ?>
							</summary>
							<div>
								<p class="answers__info-content">
									<?php the_sub_field( 'answer' ); ?>
								</p>
							</div>
						</details>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>