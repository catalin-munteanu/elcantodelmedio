<!DOCTYPE html>
<html lang="es" class="html-class">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=3.03">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;600;700&family=Cabin:wght@400;700&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<ul id="menuRedesHeader">
			<li class="iconRedesHeader"><a href="https://www.instagram.com/elcantodelmedio/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/logo-final-ig.png" class="imgRedesHeader" id="logoInstagramHeader"></a></li>
			<li class="iconRedesHeader"><a href="https://youtube.com/@elcantodelmedio2920" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/logo-final-yt.png" class="imgRedesHeader" id="logoYoutubeHeader"></a></li>
			<li class="iconRedesHeader"><a href="https://wa.me/5491136148307" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/logo-final-wa.png" class="imgRedesHeader" id="logoWhatsAppHeader"></a></li>
		</ul>

		<button id="burger-menu-toggler">
		<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/burger-menu.png" id="open-mobile-menu" alt="Open Mobile Menu" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/close-burger-menu.png" id="close-mobile-menu" />
		</button>

		<ul id="mainMenu">
			<li class="itemsNav"><a href="<?php echo esc_url( site_url( '/' ) ); ?>#formacionIntegral">Formación integral</a></li>
			<li class="itemsNav"><a href="<?php echo esc_url( site_url( '/' ) ); ?>#consultoriaVoz">Consultorías</a></li>
			<li class="itemsNav"><a href="<?php echo esc_url( site_url( '/' ) ); ?>#asesoriaVoz">Asesorías</a></li>
			<li class="itemsNav"><a href="<?php echo esc_url( site_url( '/blog/' ) ); ?>" target="_blank">Blog</a></li>
		</ul>
	</header>