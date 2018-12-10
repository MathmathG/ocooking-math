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
                    <i class="fa fa-cutlery"></i>&nbsp;<?php bloginfo('name') ?>
                </div>
                <div class="menu menu--text col-4">
                    <ul class="list-inline">
                        <li class="list-inline-item menu__item"><a href="#" class="menu__item__link">Au hazard</a></li>
                        <li class="list-inline-item menu__item"><a href="#" class="menu__item__link">Recettes</a></li>
                    </ul>
                </div>
                <div class="menu menu--icon col-4 offset-2 text-right">
                    <ul class="list-inline">
                        <li class="list-inline-item menu__item"><a href="#" class="menu__item__link"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item menu__item"><a href="#" class="menu__item__link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item menu__item"><a href="#" class="menu__item__link main-menu-link"><i class="fa fa-bars"></i></a></li>
                </div>
            </div>
        </header>

        <div class="row main-sidebar-container">
