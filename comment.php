
<?php
/*
Template Name: comment
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
<div class="circle-back">
	<div class="container content">
		<div class="row">
			<div class="col-lg-6">
				<div class="answer-block-tittle">Отзывы о программе</div>
			</div>
			<div class="col-lg-6 quote">
				<div class="col-lg-2"></div>
				<div class="col-lg-6">
					<div class="not-answer">Обучились в Перформии ? </div>
				</div>
				<div class="col-lg-4">
					<div class="quetion-buton">Напишите отзыв</div>
				</div>
			</div>
			<div class="container content feedbacks">
				<div class='row comment'>
					<div class='col-lg-offset-2 col-lg-2 text-right left-side'>
						<h3>Юлия Подгорна</h3>
						<p class='text-right'>Мережа магазинів<br/>«ГОСПОДАР»</p>
						<img src="<?php echo get_template_directory_uri();?>/img/FBB.png">
						<img src="<?php echo get_template_directory_uri();?>/img/VKB.png">
					</div>
					<div class='col-lg-offset-1 col-lg-7 text-left right-side'>
						<div class="nav-line"></div>
						<p>
							Ми хочемо відзначити співпраця з компанією Перформія, як плідне. Дякуємо консультантові Світлані Мураховській, яка дуже професійно дає консультації 
							і правильно направляє нашого керівника по персоналу. Вона робить це дуже уміло і спрямовано. Акценти робить на важливому. Ми шкодуємо лише про одне, що не користувалися консультаціями компанії Перфрмія в належному об'ємі. Тепер розуміємо, що багатьох помилок ми могли б уникнути. Бажаємо компанії Перформія процвітання, а Світлані подальшого зростання з компанією.
						</p>
					</div>
				</div>

				<div class='row comment'>
					<div class='col-lg-offset-2 col-lg-2 text-right left-side'>
						<h3>Юлия Подгорна</h3>
						<p class='text-right'>Мережа магазинів<br/>«ГОСПОДАР»</p>
						<img src="<?php echo get_template_directory_uri();?>/img/FBB.png">
						<img src="<?php echo get_template_directory_uri();?>/img/VKB.png">
					</div>
					<div class='col-lg-offset-1 col-lg-7 text-left right-side'>
						<div class="nav-line"></div>
						<p>
							Ми хочемо відзначити співпраця з компанією Перформія, як плідне. Дякуємо консультантові Світлані Мураховській, яка дуже професійно дає консультації 
							і правильно направляє нашого керівника по персоналу. Вона робить це дуже уміло і спрямовано. Акценти робить на важливому. Ми шкодуємо лише про одне, що не користувалися консультаціями компанії Перфрмія в належному об'ємі. Тепер розуміємо, що багатьох помилок ми могли б уникнути. Бажаємо компанії Перформія процвітання, а Світлані подальшого зростання з компанією.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>