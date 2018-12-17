<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container-fluid">
		<header class="header">
			<div class="row">
				<div class="logo col-2">
					<?php wp_nav_menu([
						'theme_location' => 'header-link',
						'menu_class'     => 'fa fa-cutlery',
					]);
                    ?>
				</div>
				<nav class="menu menu--text col-4">
					<?php
					wp_nav_menu([
						'theme_location' => 'header-menu',
						'menu_class'     => 'list-inline',
					]);
					?>
					<!--<ul class="list-inline">
						<li class="list-inline-item menu__item"><a href="#" class="menu__item__link">Au hasard</a></li>
						<li class="list-inline-item menu__item"><a href="#" class="menu__item__link">Recettes</a></li>
					</ul>-->
				</nav>
				<nav class="menu menu--icon col-4 offset-2 text-right">
					<ul class="list-inline">
						<?php
						$ocooking_settings_options = get_option( 'ocooking_settings_option_name' );
						if ( ! empty( $ocooking_settings_options['lien_page_facebook_0'] ) ) :
						?>
						<li class="list-inline-item menu__item"><a href="<?php echo $ocooking_settings_options['lien_page_facebook_0']; ?>" class="menu__item__link"><i class="fa fa-facebook"></i></a></li>
						<?php
						endif;
						if ( ! empty( $ocooking_settings_options['lien_page_twitter_1'] ) ) :
						?>
						<li class="list-inline-item menu__item"><a href="<?php echo $ocooking_settings_options['lien_page_twitter_1']; ?>" class="menu__item__link"><i class="fa fa-twitter"></i></a></li>
						<?php
						endif;
						if ( ! empty( $ocooking_settings_options['lien_page_github_2'] ) ) :
						?>
						<li class="list-inline-item menu__item"><a href="<?php echo $ocooking_settings_options['lien_page_github_2']; ?>" class="menu__item__link"><i class="fa fa-github"></i></a></li>
						<?php
						endif;
						?>
						<li class="list-inline-item menu__item"><a href="#" class="menu__item__link main-menu-link"><i class="fa fa-bars"></i></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="row main-sidebar-container">
