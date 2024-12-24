<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section Begin -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="canvas-open">
		<i class="icon_menu"></i>
	</div>
	<div class="offcanvas-menu-wrapper">
		<div class="canvas-close">
			<i class="icon_close"></i>
		</div>
		<div class="header-configure-area">
			<a href="<?php echo get_field('header_top-btn', 'options')['url'] ?>" class="bk-btn"><?php echo get_field('header_top-btn', 'options')['title'] ?></a>
		</div>
		<nav class="mainmenu mobile-menu">
			<?php
			wp_nav_menu(array(
				'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
				'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
				'theme_location'  => 'header'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
			)); ?>
		</nav>
		<div id="mobile-menu-wrap"></div>
		<div class="top-social">
			<?php
			if (have_rows('header_top-socials-repeater', 'options')):
				while (have_rows('header_top-socials-repeater', 'options')) : the_row(); ?>

					<a href="<?php the_sub_field('socials-repeater_link', 'options'); ?>"><i class="fa fa-<?php the_sub_field('socials-repeater_name', 'options'); ?>"></i></a>
					<?php the_sub_field('sub_field'); ?>

			<?php endwhile;
			else :
				echo 'Ошибка: поля не найдены';
			endif;
			?>
		</div>
		<ul class="top-widget">
			<?php
			if (have_rows('header_top-contact-repeater', 'options')):
				while (have_rows('header_top-contact-repeater', 'options')) : the_row(); ?>
					<li><i class="fa fa-<?php the_sub_field('contact-repeater_icon', 'options') ?>"></i> <a href="<?php echo get_sub_field('contact-repeater_content', 'options')['url'] ?>"><?php echo get_sub_field('contact-repeater_content', 'options')['title'] ?></a></li>
			<?php endwhile;
			else :
				echo 'Ошибка: поля не найдены';
			endif;
			?>
		</ul>
	</div>
	<!-- Offcanvas Menu Section End -->

	<!-- Header Section Begin -->
	<header class="header-section">
		<div class="top-nav">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<ul class="tn-left">
							<?php
							if (have_rows('header_top-contact-repeater', 'options')):
								while (have_rows('header_top-contact-repeater', 'options')) : the_row(); ?>
									<li><i class="fa fa-<?php the_sub_field('contact-repeater_icon', 'options') ?>"></i> <a href="<?php echo get_sub_field('contact-repeater_content', 'options')['url'] ?>"><?php echo get_sub_field('contact-repeater_content', 'options')['title'] ?></a></li>
							<?php endwhile;
							else :
								echo 'Ошибка: поля не найдены';
							endif;
							?>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="tn-right">
							<div class="top-social">
								<?php
								if (have_rows('header_top-socials-repeater', 'options')):
									while (have_rows('header_top-socials-repeater', 'options')) : the_row(); ?>

										<a href="<?php the_sub_field('socials-repeater_link', 'options'); ?>"><i class="fa fa-<?php the_sub_field('socials-repeater_name', 'options'); ?>"></i></a>
										<?php the_sub_field('sub_field'); ?>

								<?php endwhile;
								else :
									echo 'Ошибка: поля не найдены';
								endif;
								?>
							</div>
							<a href="<?php echo get_field('header_top-btn', 'options')['url'] ?>" class="bk-btn"><?php echo get_field('header_top-btn', 'options')['title'] ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-item">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="logo">
							<a href="/">
								<img src="<?php echo get_field('header_logo', 'options')['url'] ?>" alt="<?php echo get_field('header_logo', 'options')['alt'] ?>">
							</a>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="nav-menu">
							<nav class="mainmenu">
								<?php
								wp_nav_menu(array(
									'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
									'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
									'theme_location'  => 'header'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
								)); ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->