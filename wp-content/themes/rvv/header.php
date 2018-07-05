<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="frame">
			<div class="row">
				<?php 
				if(is_front_page()):
				$header_afbeelding = get_field('header_afbeelding');
				$header_afbeelding_url = $header_afbeelding['sizes']['header_coverafbeelding'];
				?>
				<div class="cover-header" style="background-image: url(<?php echo $header_afbeelding_url; ?>)">
					<div class="cover-header__table">
						<div class="cover-header__table__cell">
							<div class="wrapper wrapper--smaller">
								<div class="cover-header__table__cell__content">
									<h1 class="cover-header__table__cell__content__title"><?php the_field('header_titel'); ?></h1>
									<p class="cover-header__table__cell__content__paragraph"><?php the_field('header_tekst'); ?></p>
									<a class="button button--green" href="<?php the_field('header_knop_link'); ?>"><?php the_field('header_knop_tekst'); ?></a>
								</div>
							</div>
						</div>
					</div>
					
				<header class="header header--transparent clear" role="banner">
				<?php else: ?>
				<header class="header clear" role="banner">
				<?php endif; ?>
					<div class="header__logo">
						<a href="<?php echo home_url(); ?>">
							<img width="187" height="28" src="<?php echo get_template_directory_uri(); ?>/img/buro-rvv-logo.svg" alt="Buro RVV Logo" class="header__logo__img">
							<span class="header__logo__payoff">Buro Rij & Verkeersveiligheid</span>
						</a>
					</div>
					<div class="header__navigation">
						<input class="header__navigation__toggle-input" id="header__navigation__toggle-input" type="checkbox">
						<label accesskey="M" for="header__navigation__toggle-input" class="header__navigation__label">
							<span class="header__navigation__toggle-input__hamburger">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"><line y1="1" x2="16" y2="1" stroke-miterlimit="10" stroke-width="2"/><line y1="6" x2="16" y2="6" stroke-miterlimit="10" stroke-width="2"/><line y1="11" x2="16" y2="11" stroke-miterlimit="10" stroke-width="2"/></svg>
							</span>
							<span class="header__navigation__toggle-input__cross">
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><line x1="2.25" y1="12.75" x2="12.75" y2="2.25" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.5"/><line x1="2.25" y1="2.25" x2="12.75" y2="12.75" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.5"/></svg>
							</span>
							 Menu
						</label>
						<div class="header__navigation__menu header__navigation__menu--hidden">
							<div class="header__navigation__menu__container">
								<div class="header__navigation__menu__list">
									<?php studio45_nav(); ?>
								</div>
								<div class="header__navigation__menu__call-to-action">
									<a class="button button--ghost button--white" href="<?php the_field('contact_knop_link', 'globale_instellingen'); ?>"><?php the_field('contact_knop_tekst', 'globale_instellingen'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</header>
				
				<?php if(is_front_page()): ?>
				</div>
				<?php endif; ?>
			</div>
			<main class="row expand">
