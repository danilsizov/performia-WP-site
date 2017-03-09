<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
<div class="overlow" id="black-back" onclick="openBurger(false)"></div>
	<header>
			<div class="row">
				<nav class="navbar">
					<div class="nav-1"><a href="http://993684.krovcent.web.hosting-test.net"><img src="http://woxed.hol.es/wp-content/uploads/2017/02/logo.png"></a></div>
					<div class="nav-2">
					<div class="nav-buttons">
						<span><a href="http://993684.krovcent.web.hosting-test.net">ГЛАВНАЯ </a><div class="nav-line"></div></span><span style="margin-left:3px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/technology">О ТЕХНОЛОГИИ </a><div class="nav-line"></div></span><span style="margin-left:3px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/main-programm">ОБУЧЕНИЕ НАЙМУ </a><div class="nav-line"></div></span><span style="margin-left:3px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/comment">ОТЗЫВЫ </a><div class="nav-line"></div></span><span style="margin-left:3px"> <img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/videoAndPosts">СТАТЬИ И ВИДЕО </a><div class="nav-line"></div></span><span style="margin-left:3px"> <img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/events">МЕРОПРИЯТИЯ </a><div class="nav-line"></div></span><span style="margin-left:3px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/tools">ИНСТРУМЕНТЫ И ПОМОЩЬ </a><div class="nav-line"></div></span><span style="margin-left:3px"> <img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span></a>
						<span style="margin-left:3px"><a href="http://993684.krovcent.web.hosting-test.net/about-us">О КОМПАНИИ </a><div class="nav-line"></div></span>
					</div></div>
						<div class="burger-open" onclick="openBurger(true)"><img src="<?php echo get_template_directory_uri();?>./img/menu.png"></div>
						<div class="burger" id="burger">
							<a href="http://993684.krovcent.web.hosting-test.net/"><div class="nav-text">Главная</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/technology"><div class="nav-text">О технологии</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/#vebinar"><div class="nav-text">Обучение найму</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/comment"><div class="nav-text">Отзывы</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/videoAndPosts"><div class="nav-text">Статья и видео</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/events"><div class="nav-text">Мероприятия</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/tools"><div class="nav-text">Инструменты и помощь</div></a>
							<a href="http://993684.krovcent.web.hosting-test.net/about-us"><div class="nav-text">О компании</div></a>
						</div>
					</div>
				</nav>
		</div>
	</header>