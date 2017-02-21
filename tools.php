
<?php
/*
Template Name: tools
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
					Как успешно
				    <br>нанимать
					<br>персонал
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
					<div class="block-tittle">О программе</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="quote-text">
						<p>Наем персонала является ключевой областью в деятельности любой организации, однако зачастую важность ее недооценивается.</p>

						<p>Руководители и владельцы бизнеса, как правило, берут под свой непосредственный контроль только те сферы, которые, по их мнению, относятся к наиболее значимым – финансовое планирование, производство, продажи, реклама, связи с общественностью и т.д. А ведь от того, кто будет выполнять перечисленные функции, зависит успех и существование компании.</p>

						<p>Причина такого невнимания, кроется в том, что большинство руководителей считают область найма сложной и весьма запутанной, а потому не пытаются ее контролировать. А ведь любой из них видит разницу между хорошим и плохим работником, знает, что из результатов работы отдельных сотрудников складывается общий результат работы фирмы.</p>
						<p><img src="<?php echo get_template_directory_uri();?>/img/vebinar.png" class="minus-left-mar"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>