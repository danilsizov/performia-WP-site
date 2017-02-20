
<?php
/*
Template Name: about-us
*/
?>

<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<section>
	<div class="blue-background"></div>
	<div class="gold-background"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="vebinar-tittle-small">Вебинар</div>
				<div class="vebinar-tittle">
					Перформия<br>
					обучает найму<br> 
					более 32 лет
				</div>
			</div>
			<div class="col-lg-3">
				<div class="telephone-black">099 547-89-45</div>
				<div class="invite">Заявка на участие</div>
				<input type="text" class="input mar-top-input" placeholder="Введите E-mail">
				<input type="text" class="input" placeholder="Введите E-mail">
				<input type="text" class="input" placeholder="Введите E-mail">
				<div class="invite-buton">Подписаться</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle">Наша цель</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="quote-text">
						<p>Возрождать здоровую экономику, обучая и помогая каждой компании нанимать тех, кто действительно принесет пользу, что неизбежно приводит к расширению и созданию новых рабочих  мест.</p>

						<p>Для этого мы разработали технологию найма, отбора и оценки кадров, позволяющая находить продуктивных сотрудников. Мы положили в её основу результаты исследований, которые вели с 1984 года, и весь наш опыт.</p>

						<p>Штаб-квартира компании PERFORMIA International находится в Швеции - в городе Сёдертелье, недалеко от Стокгольма. Название компании PERFORMIA произошло от английского глагола «to perform», одно из значений которого - «доводить до конца, завершать полностью».</p>
						<p><img src="<?php echo get_template_directory_uri();?>/img/video.png" class="minus-left-mar"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle">Партнёры</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="quote-text">
						<p>Возрождать здоровую экономику, обучая и помогая каждой компании нанимать тех, кто действительно принесет пользу, что неизбежно приводит к расширению и созданию новых рабочих  мест.</p>

						<p>Для этого мы разработали технологию найма, отбора и оценки кадров, позволяющая находить продуктивных сотрудников. Мы положили в её основу результаты исследований, которые вели с 1984 года, и весь наш опыт.</p>

						<p>Штаб-квартира компании PERFORMIA International находится в Швеции - в городе Сёдертелье, недалеко от Стокгольма. Название компании PERFORMIA произошло от английского глагола «to perform», одно из значений которого - «доводить до конца, завершать полностью».</p>
						<p><img src="<?php echo get_template_directory_uri();?>/img/video.png" class="minus-left-mar"></p>
					</div>
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.4369804316957!2d30.510167516109636!3d50.47020817947809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce137b4035cf%3A0x25f21b5051ce9827!2z0LLRg9C70LjRhtGPINCp0LXQutCw0LLQuNGG0YzQutCwLCDQmtC40ZfQsg!5e0!3m2!1sru!2sua!4v1487600294546" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>