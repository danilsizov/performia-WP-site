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
	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar">
					<div class="col-lg-2"><img src="<?php echo get_template_directory_uri();?>./img/logo.png" ></div>
					<div class="col-lg-1">  </div>
					<div class="col-lg-9">
						<div class="nav-buttons">
							<span>ГЛАВНАЯ 	<div class="nav-line"></div></span><span><img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>О ТЕХНОЛОГИИ <div class="nav-line"></div></span><span><img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>ОБУЧЕНИЕ НАЙМУ <div class="nav-line"></div></span><span><img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>ОТЗЫВЫ <div class="nav-line"></div></span><span> <img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>СТАТЬИ И ВИДЕО <div class="nav-line"></div></span><span> <img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>МЕРОПРИЯТИЯ <div class="nav-line"></div></span><span><img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>ИНСТРУМЕНТЫ И ПОМОЩЬ <div class="nav-line"></div></span><span> <img src="<?php echo get_template_directory_uri();?>./img/dot.png" ></span>
							<span>О КОМПАНИИ <div class="nav-line"></div></span>
						</div>
					</div>
					
				</nav>
			</div>
		</div>
	</header>