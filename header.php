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
<div class='preloader-wrapper' id='preloader'>
	<div class='preloader-content'>
		<img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" class='logo'/>
		<div class='text-container'>
			<div class='text' id='text-dark'>Технология найма продуктинвых сотрудников</div>
			<div class='text' id='text-bright'>Технология найма продуктинвых сотрудников</div>
		</div>
	</div>
</div>
<div class="overlow" id="black-back" onclick="openBurger(false)"></div>
	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar">
					<div class="col-lg-2"><img src="http://woxed.hol.es/wp-content/uploads/2017/02/logo.png" ></div>
					<div class="col-lg-1">  </div>
					<div class="col-lg-9">
						<div class="nav-buttons">
							<span style="margin-left:-28px; margin-top:5px"><a href="http://woxed.hol.es/">ГЛАВНАЯ </a><div class="nav-line"></div></span><span style="margin-left:8px; margin-top:5px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
							<span style="margin-left:7px; margin-top:5px"><a href="http://woxed.hol.es/technology">О ТЕХНОЛОГИИ </a><div class="nav-line"></div></span><span style="margin-left:5px; margin-top:5px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
							<span style="margin-left:9px; margin-top:5px"><a href="http://woxed.hol.es/#vebinar">ОБУЧЕНИЕ НАЙМУ </a><div class="nav-line"></div></span><span style="margin-left:6px; margin-top:5px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
							<span style="margin-left:7px; margin-top:5px"><a href="http://woxed.hol.es/">ОТЗЫВЫ </a><div class="nav-line"></div></span><span style="margin-left:7px; margin-top:5px"> <img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
							<span style="margin-left:7px; margin-top:5px"><a href="http://woxed.hol.es/videoAndPosts">СТАТЬИ И ВИДЕО </a><div class="nav-line"></div></span><span style="margin-left:7px; margin-top:5px"> <img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
							<span style="margin-left:7px; margin-top:5px"><a href="http://woxed.hol.es/events">МЕРОПРИЯТИЯ </a><div class="nav-line"></div></span><span style="margin-left:6px; margin-top:5px"><img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span>
							<span style="margin-left:7px; margin-top:5px"><a href="http://woxed.hol.es/tools">ИНСТРУМЕНТЫ И ПОМОЩЬ </a><div class="nav-line"></div></span><span style="margin-left:7px; margin-top:5px"> <img src="http://denialsizov.hol.es/performia/wp-content/uploads/2017/02/dot.png" ></span></a>
							<span style="margin-left:15px; margin-top:-17px"><a href="http://woxed.hol.es/about-us">О КОМПАНИИ </a><div class="nav-line"></div></span>
						</div>
						<div class="burger-open" onclick="openBurger(true)"><img src="<?php echo get_template_directory_uri();?>./img/menu.png"></div>
						<div class="burger" id="burger">
							<div class="nav-text">Главная</div>
							<div class="nav-text">О технологии</div>
							<div class="nav-text">Обучение найму</div>
							<div class="nav-text">Отзывы</div>
							<div class="nav-text">Статья и видео</div>
							<div class="nav-text">Мероприятия</div>
							<div class="nav-text">Инструменты и помощь</div>
							<div class="nav-text">О компании</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>