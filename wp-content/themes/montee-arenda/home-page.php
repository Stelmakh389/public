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

	<section class="catalog">
		<div class="container">
			<h2 class="title catalog__title" contenteditable="false">Каталог подъемников</h2>
			<ul class="list catalog__nav">
				<li data-tab="crankshafts" class="btn btn-stroke tab-btn catalog__nav-item active" contenteditable="false">Коленчатые</li>
				<li data-tab="scissors" class="btn btn-stroke tab-btn catalog__nav-item" contenteditable="false">Ножничные</li>
				<li data-tab="telescopic" class="btn btn-stroke tab-btn catalog__nav-item" contenteditable="false">Телескопические</li>
				<li data-tab="trailed" class="btn btn-stroke tab-btn catalog__nav-item" contenteditable="false">Прицепные</li>
				<li data-tab="electric" class="btn btn-stroke tab-btn catalog__nav-item" contenteditable="false">Электрические</li>
				<li data-tab="diesel" class="btn btn-stroke tab-btn catalog__nav-item" contenteditable="false">Дизельные</li>
			</ul>
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
					<div data-tab="crankshafts" class="tab catalog__products active">
						<ul class="list catalog__products-list">	
						<li class="catalog__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/zoomlion.jpeg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый LGMG AR14J</h5>							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Zoomlion ZA14JE</h5>
							<ul class="list catalog__specifications">
								<li class="" contenteditable="false">∧ Рабочая высота 16 м</li>
								<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>											
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-LGMG-AR16J.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый LGMG AR16J</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 17.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 8180 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-LGMG-AR14J.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый LGMG AR14J</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 16 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7160 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Genie-Z-5130J-RT.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Genie Z-51/30J RT</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 17.6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 227 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7212 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Genie-Z-4525-RT.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Genie Z-45/25 RT</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.8 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 220 кг</li>
							<li class="" contenteditable="false">☖ Вес: 6924 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-JLG-510-AJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый JLG 510 AJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 18 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 250 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7950 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-JLG-E450AJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый JLG E450AJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>;
							<li class="" contenteditable="false">☖ Вес: 6670 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA26-RTJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA26 RTJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 26 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 14150 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 11 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA-20-PX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA 20 PX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 20.6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 220 кг</li>
							<li class="" contenteditable="false">☖ Вес: 11710 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 7 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA-18-SPX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA 18 SPX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 17.3 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 8050 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA16-RTJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA16 RTJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 16 м</li><li>
							</li><li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li><li>
							</li><li class="" contenteditable="false">☖ Вес: 6650 кг</li><li>												
							</li></ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Upright-AB38.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Upright AB38</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 13.5 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 215 кг</li>
							<li class="" contenteditable="false">☖ Вес: 3160 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 5 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Genie-Z-4525J-DC.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Genie Z-45/25J DC</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.9 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 227 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5171 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Genie-Z-3322.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Genie Z-33/22</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12.5 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 227 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5171 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Haulotte-HA-15IP.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Haulotte HA 15IP</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7299 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Haulotte-HA-12IP.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Haulotte HA 12IP</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5950 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
					</ul>
				</div>
				<div data-tab="scissors" class="tab catalog__products">
					<ul class="list catalog__products-list">
						<li class="catalog__item">
							<img src="img/sanward.jpeg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный SWSL1823RT</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 18 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 680 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/aurora.jpeg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический ножничный Aurora AS1012</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>											
							</ul>
							<span class="catalog__price" contenteditable="false">от 2 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-LGMG-ES1612.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный LGMG ES1612</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 3150 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 3 300 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-LGMG-SS0407E.jpg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный LGMG SS0407E</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 180 кг</li>
							<li class="" contenteditable="false">☖ Вес: 800 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 550 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-14.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 14</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 14 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 350 кг</li>
							<li class="" contenteditable="false">☖ Вес: 3175 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 2 800 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-12.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 12</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 300 кг</li>
							<li class="" contenteditable="false">☖ Вес: 2470 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 2 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-10N.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 10N</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 10 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 2190 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 800 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-8.jpg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 8</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 8 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 1655 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 800 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Optimum-8.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Optimum 8</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 7.6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 1590 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 600 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Nozhnichnyy-Haulotte-H12SX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный Haulotte H12SX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 500 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5510 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 3 600 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Nozhnichnyy-Haulotte-H18SX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный Haulotte H18SX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 18 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 500 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7300 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Nozhnichnyy-Haulotte-H15SX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный Haulotte H15SX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 6340 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
					</ul>
				</div>
				<div data-tab="telescopic" class="tab catalog__products">
					<ul class="list catalog__products-list">
						<li class="catalog__item">
							<img src="img/Dizelnyy-Teleskopicheskiy-JLG-800S.jpg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Телескопический JLG 800S</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 26.3 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 15800 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 12 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Teleskopicheskiy-Haulotte-HT23-RTJ-O.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Телескопический Haulotte HT23 RTJ O</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 22.5 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 13320 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 9 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
					</ul>
				</div>
				<div data-tab="trailed" class="tab catalog__products">
					<ul class="list catalog__products-list">
						<li class="catalog__item">
								<img src="img/Kolenchatyy-Dino-Lift-180-XT.webp" alt="продукт" class="catalog__img">
								<h5 class="title catalog__item-title" contenteditable="false">Коленчатый Dino Lift 180 XT</h5>
								<ul class="list catalog__specifications">
								<li class="" contenteditable="false">∧ Рабочая высота 17.9 м</li> 
								<li class="" contenteditable="false">⍐ Грузоподъемность: 180 кг</li> 
								<li class="" contenteditable="false">☖ Вес: 2100 кг</li>												
								</ul>
								<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
								<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
							</li>
					</ul>
				</div>
				<div data-tab="electric" class="tab catalog__products">
					<ul class="list catalog__products-list">
						<li class="catalog__item">
							<img src="img/zoomlion.jpeg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Zoomlion ZA14JE</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 16 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>											
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/aurora.jpeg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический ножничный Aurora AS1012</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>											
							</ul>
							<span class="catalog__price" contenteditable="false">от 2 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Optimum-8.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Optimum 8</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 7.6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 1590 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 600 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-8.jpg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 8</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 8 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 1655 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 800 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-10N.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 10N</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 10 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 2190 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 800 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-12.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 12</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 300 кг</li>
							<li class="" contenteditable="false">☖ Вес: 2470 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 2 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-Haulotte-Compact-14.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный Haulotte Compact 14</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 14 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 350 кг</li>
							<li class="" contenteditable="false">☖ Вес: 3175 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 2 800 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-LGMG-SS0407E.jpg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный LGMG SS0407E</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 180 кг</li>
							<li class="" contenteditable="false">☖ Вес: 800 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 1 550 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Nozhnichnyy-LGMG-ES1612.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Ножничный LGMG ES1612</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 3150 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 3 300 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Haulotte-HA-12IP.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Haulotte HA 12IP</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5950 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Haulotte-HA-15IP.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Haulotte HA 15IP</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7299 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Genie-Z-3322.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Genie Z-33/22</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12.5 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 227 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5171 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Genie-Z-4525J-DC.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Genie Z-45/25J DC</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.9 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 227 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5171 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
									<li class="catalog__item">
							<img src="img/Elektricheskiy-Kolenchatyy-Upright-AB38.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Электрический Коленчатый Upright AB38</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 13.5 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 215 кг</li>
							<li class="" contenteditable="false">☖ Вес: 3160 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 5 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
					</ul>
				</div>
				<div data-tab="diesel" class="tab catalog__products">
					<ul class="list catalog__products-list">
						<li class="catalog__item">
							<img src="img/sanward.jpeg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный SWSL1823RT</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 18 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 680 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Nozhnichnyy-Haulotte-H15SX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный Haulotte H15SX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 6340 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Nozhnichnyy-Haulotte-H18SX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный Haulotte H18SX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 18 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 500 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7300 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 4 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Teleskopicheskiy-Haulotte-HT23-RTJ-O.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Телескопический Haulotte HT23 RTJ O</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 22.5 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 13320 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 9 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Teleskopicheskiy-JLG-800S.jpg" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Телескопический JLG 800S</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 26.3 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 15800 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 12 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Nozhnichnyy-Haulotte-H12SX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Ножничный Haulotte H12SX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 12 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 500 кг</li>
							<li class="" contenteditable="false">☖ Вес: 5510 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 3 600 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA16-RTJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA16 RTJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 16 м</li><li>
							</li><li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li><li>
							</li><li class="" contenteditable="false">☖ Вес: 6650 кг</li><li>												
							</li></ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA-18-SPX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA 18 SPX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 17.3 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 8050 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA-20-PX.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA 20 PX</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 20.6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 220 кг</li>
							<li class="" contenteditable="false">☖ Вес: 11710 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 7 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Haulotte-HA26-RTJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Haulotte HA26 RTJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 26 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 14150 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 11 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-JLG-E450AJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый JLG E450AJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг/li&gt;
							</li><li class="" contenteditable="false">☖ Вес: 6670 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-JLG-510-AJ.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый JLG 510 AJ</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 18 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 250 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7950 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Genie-Z-4525-RT.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Genie Z-45/25 RT</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 15.8 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 220 кг</li>
							<li class="" contenteditable="false">☖ Вес: 6924 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-Genie-Z-5130J-RT.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый Genie Z-51/30J RT</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 17.6 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 227 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7212 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-LGMG-AR14J.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый LGMG AR14J</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 16 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 200 кг</li>
							<li class="" contenteditable="false">☖ Вес: 7160 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 000 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
						<li class="catalog__item">
							<img src="img/Dizelnyy-Kolenchatyy-LGMG-AR16J.webp" alt="продукт" class="catalog__img">
							<h5 class="title catalog__item-title" contenteditable="false">Дизельный Коленчатый LGMG AR16J</h5>
							<ul class="list catalog__specifications">
							<li class="" contenteditable="false">∧ Рабочая высота 17.7 м</li>
							<li class="" contenteditable="false">⍐ Грузоподъемность: 230 кг</li>
							<li class="" contenteditable="false">☖ Вес: 8180 кг</li>												
							</ul>
							<span class="catalog__price" contenteditable="false">от 6 500 руб. / сутки</span>
							<button class="btn btn-primary catalog__item-btn open-popup">Взять в аренду</button>
						</li>
					</ul>
				</div>
			</div>
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

	<div class="messenegers">
		<a href="https://t.me/montee7990" target="_blank" class="messenegers__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegramm.svg" alt="telegramm" class="messenegers__icon">
		</a>
		<a href="https://wa.me/79399007990" target="_blank" class="messenegers__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt="whatsapp" class="messenegers__icon">
		</a>
		<a href="tel:+74954877324" class="messenegers__item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telephone.svg" alt="telephone" class="messenegers__icon">
		</a>
	</div>


	</main>

<?php
get_footer();
