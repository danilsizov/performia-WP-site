
<?php
/*
Template Name: main-programm
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
	<div class="circle-back">
	<div class="container">
	<?php
    $mypost = array( 'post_type' => 'main_programm', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-lg-8">
				<div class="vebinar-tittle-small">Главная программа</div>
				<div class="vebinar-tittle">
					<div class="col-lg-8">
						<?php the_title(); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="telephone-black">099 547-89-45</div>
				<div class="invite">Проконсультируйтесь об участии</div>
				<input type="text" class="input mar-top-input" placeholder="Введите имя">
				<input type="text" class="input" placeholder="Телефон">
				<input type="text" class="input" placeholder="E-mail">
				<div class="invite-buton">Жду звонка</div>
			</div>
		</div>
		<div class="container content mar-content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle">О программе</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="quote-text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<?php echo get_the_post_thumbnail($id, array(300,300)) ?>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="block-tittle-vebinar">Ведущий</div>
				<div class="nav-line"></div>
				<div class="row plus-mar-left">
					<h3><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_author_name', true ) ); ?></strong></h3>
					<div class="person-position">
						<?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_author_position', true ) ); ?>
					</div>
					<div class="quote-text">
						<p>
						<?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_author_about', true ) ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle">Кому полезно</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="row mar-top">
						<div class="col-lg-4">
							<div class="who"><img src="<?php echo get_template_directory_uri();?>/img/owner.png">Владельцам</div>
						</div>
						<div class="col-lg-4">
							<div class="who"><img src="<?php echo get_template_directory_uri();?>/img/director.png">Директорам</div>
						</div>
						<div class="col-lg-4">
							<div class="who"><img src="<?php echo get_template_directory_uri();?>/img/HR-manager.png" class="minus-left-mar">HR-менеджерам</div>
						</div>
						<div class="gray-line"></div>
					</div>
					<div class="quote-text">
						<p>Владельцам и исполнительным директорам, которые заботятся об повышении эффективности компании и персонала. Менеджерам по персоналу, которые хотят систематизировать процесс,
						 улучшить показатели и научиться новому.</p>
					</div>
				</div>
			</div>
	</div>
	<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle">Содержание</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="block-about">
						<div class="row">
							<div class="col-lg-2">
								<div class="block-number">
									Блок 1
								</div>
							</div>
							<div class="col-lg-10">
								<div class="block-number-line"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<ul class="about-list">
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_1', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_2', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_3', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_4', true ) ); ?></li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul class="about-list">
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_5', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_6', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_7', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_1_8', true ) ); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="block-about mar-top">
						<div class="row">
							<div class="col-lg-2">
								<div class="block-number">
									Блок 2
								</div>
							</div>
							<div class="col-lg-10">
								<div class="block-number-line"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<ul class="about-list">
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_1', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_2', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_3', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_4', true ) ); ?></li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul class="about-list">
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_5', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_6', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_7', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_8', true ) ); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="block-about mar-top">
						<div class="row">
							<div class="col-lg-2">
								<div class="block-number">
									Блок 3
								</div>
							</div>
							<div class="col-lg-10">
								<div class="block-number-line"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<ul class="about-list">
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_1', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_2', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_3', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_4', true ) ); ?></li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul class="about-list">
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_5', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_6', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_7', true ) ); ?></li>
									<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_li_2_8', true ) ); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<div class="price">
		<div class="container">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-2">
					<div class="price-tittle">Цены</div>
				</div>
				<div class="col-lg-7">
					<div class="block-number-line"></div>
				</div>
			</div>
			<div class="row card-mar">
				<div class="col-lg-3">
					<div class="price-card">
						<div class="price-card-tittle">Блок 1</div>
						<div class="card-line"></div>
						<ul class="price-list">
							<li><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_1', true ) ); ?> грн</strong></li>
							<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_1_quetion', true ) ); ?> грн <img src="<?php echo get_template_directory_uri();?>/img/hint.png"></li>
							<li class="duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_time_block_1', true ) ); ?> дня</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="price-card">
						<div class="price-card-tittle">Блок 2</div>
						<div class="card-line"></div>
						<ul class="price-list">
							<li><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_2', true ) ); ?> грн</strong></li>
							<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_2_quetion', true ) ); ?> грн <img src="<?php echo get_template_directory_uri();?>/img/hint.png"></li>
							<li class="duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_time_block_2', true ) ); ?> дня</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="price-card">
						<div class="price-card-tittle">Блок 1 и 2</div>
						<div class="card-line"></div>
						<ul class="price-list">
							<li><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_1_2', true ) ); ?> грн</strong></li>
							<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_1_2_quetion', true ) ); ?> грн <img src="<?php echo get_template_directory_uri();?>/img/hint.png"></li>
							<li class="duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_time_block_1_2', true ) ); ?> дня</li>
							<p class="economy">Экономия <?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_economy_block_1_2', true ) ); ?> грн</p>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="price-card">
						<div class="price-card-tittle">Блок 1,2,3</div>
						<div class="card-line"></div>
						<ul class="price-list">
							<li><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_1_2_3', true ) ); ?> грн</strong></li>
							<li><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_price_block_1_2_3_quetion', true ) ); ?> грн <img src="<?php echo get_template_directory_uri();?>/img/hint.png"></li>
							<li class="duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_time_block_1_2_3', true ) ); ?> дня</li>
							<p class="economy">Экономия <?php echo esc_html( get_post_meta( get_the_ID(), 'main_programm_economy_block_1_2_3', true ) ); ?> грн</p>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<div class="block-tittle">Процесс</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="nav-line"></div>
				<div class="quote-text">
					<p>Мы учим с помощью записанных на видео семинаров.  В видеоклассе постоянно находится специально обученый сотрудник «Перформии» —  супервайзер, цель которого заключается в том, чтобы вы максимально успешно усвоили материал. Он помогает вам разобраться в сложных для 
					вас местах видеороликов, он смотрит за тем, чтобы вы правильно делали упражнения и тренировки, он проводит вам проверки, убеждаясь в том, 
					что бы поняли самые важные идеи и приципы  в изученом материале.</p> 

					<p>Данный формат позволит вам самостоятельно решаете с какой скоростью лучше изучать тот или инной материал. Вы никого не задерживаете, и никто 
					не задерживает вас —  вы можете пересматривать видеоролик столько раз, сколько захотите, вы можете делать упражнение или задавать вопросы супревайзеру столько времени, сколько вам нужно для усвоения материала.
					Если вам нужно будет по како-йто причине прерваться, то вы просто останавливаете ролик и выходите из видеокласса  в любой момент —  
					ничего не упуская в тернинге.</p>

					<p>Останавливайте запись и перематывайте назад пока не усвоите всю информацию. Благодаря этому вы обучаетесь со скоростью, оптимальной лично для вас. Никто не будет торопить или задерживать.</p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/main-programm-proces.png" ></p>
				</div>
				<h3>Перймущества обучения в формате видеотренинга</h3>
				<ul class="vebinar-view">
					<li>Возможность индивидуального подхода</li>
					<li>Индивидуальное расписание</li>
					<li>Возможность приступить к изучению сразу, не откладывая «в долгий ящик» (при условии наличия свободных мест в классе)</li>
					<li>Возможность обучения в выходные и праздничные дни (по предварительному согласованию расписания)</li>
					<li>Вы обучаетесь со скоростью, оптимальной лично для вас. Никто вас не задерживает, и не торопит.</li>
					<li>Вы можете задать столько вопросов, сколько потребуется чтобы прояснить материал.</li>
					<li>Возможность остановить видео, вернуться назад и просмотреть столько раз, сколько потребуется для  того чтобы все «уложилось по полочкам»</li>
				</ul>
				<div class="quote-text">
					<p>Наша цель — обучить вас до результата. Мы закончим обучение тогда, когда 
					вы решите, что поняли всё необходимое. Поэтому не ограничиваем вас 
					по времени. Если вы не уложитесь в 9 дней, мы бесплатно продлим курс, пока вы не убедитесь в усвоение материала.</p> 
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row plan-mar">
							<div class="col-lg-6 clock">10:00-11:20</div>
							<div class="col-lg-6 name-of-event">Семинар</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">11:20-11:40</div>
							<div class="col-lg-6 name-of-event">Кофе-брейк</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">11:40-13:00</div>
							<div class="col-lg-6 name-of-event">Семинар</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">13:00-14:00</div>
							<div class="col-lg-6 name-of-event">Обед</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">14:00-15:40</div>
							<div class="col-lg-6 name-of-event">Кофе-брейк</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">16:00-17:10</div>
							<div class="col-lg-6 name-of-event">Семинар</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">17:10-17:40</div>
							<div class="col-lg-6 name-of-event">Кофе-брейк</div>
						</div>
						<div class="row plan-mar">
							<div class="col-lg-6 clock">17:40-19:40</div>
							<div class="col-lg-6 name-of-event">Обучение</div>
						</div>
					</div>
					<div class="col-lg-2"></div>
					<div class="col-lg-4">
						<div class="mar-top micro-text">
							<img src="<?php echo get_template_directory_uri();?>/img/coffee.png" >
							<p>Утрений чай/кофе. Четыре кофе-брейка. Полноценный обед. Минеральная вода на столах.</p>
						</div>
						<div class="wi-fi micro-text">
							<img src="<?php echo get_template_directory_uri();?>/img/wi-fi.png" >
							<p>Оставайтесь на связи с коллегами. Заранее сообщите о перерывах, чтобы не отвлекаться от обучения.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<div class="block-tittle">Отзывы</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="nav-line"></div>
				<div class="coment-card">
					<div class="coment-person-name">Роман Петров <img src="<?php echo get_template_directory_uri();?>/img/FBB.png" > <img src="<?php echo get_template_directory_uri();?>/img/VKB.png" ></div>
					<div class="coment-person-position">Основатель компании «Кровля-центр»</div>
					<div class="quote-text">
					<p>До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.</p> </div>
					<div class="coment-view-video"></div>
				</div>
				<div class="nav-line mar-top"></div>
				<div class="coment-card">
					<div class="coment-person-name">Роман Петров <img src="<?php echo get_template_directory_uri();?>/img/FBB.png" > <img src="<?php echo get_template_directory_uri();?>/img/VKB.png" ></div>
					<div class="coment-person-position">Основатель компании «Кровля-центр»</div>
					<div class="quote-text">
					<p>До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.</p> </div>
					<div class="coment-view-video"></div>
				</div>
				<div class="nav-line mar-top"></div>
				<div class="coment-card">
					<div class="coment-person-name">Роман Петров <img src="<?php echo get_template_directory_uri();?>/img/FBB.png" > <img src="<?php echo get_template_directory_uri();?>/img/VKB.png" ></div>
					<div class="coment-person-position">Основатель компании «Кровля-центр»</div>
					<div class="quote-text">
					<p>До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.</p> </div>
					<div class="coment-view-video"></div>
				</div>
				<div class="nav-line mar-top"></div>
				<div class="coment-card">
					<div class="coment-person-name">Роман Петров <img src="<?php echo get_template_directory_uri();?>/img/FBB.png" > <img src="<?php echo get_template_directory_uri();?>/img/VKB.png" ></div>
					<div class="coment-person-position">Основатель компании «Кровля-центр»</div>
					<div class="quote-text">
					<p>До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.До Перформии я боялся увольнять существующих сотрудников, потому что не знал, кто вместо них придет. Сотрудники это чувствовали и начинали диктовать свои условия.</p> </div>
					<div class="coment-view-video"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="gold-block">
		<div class="container">
			<div class="row">
				<div class="gold-tittle">Консультация об участии</div>
			</div>
			<div class="row">
			<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<input type="text" class="input mar-top-input" placeholder="Введите Имя">
				</div>
			</div>
			<div class="row">
			<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<input type="text" class="input" placeholder="Телефон">
				</div>
			</div>
			<div class="row">
			<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<input type="text" class="input" placeholder="E-mail">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<div class="invite-buton">Подписаться</div>
				</div>
			</div>
		</div>
		</article>
	<?php endwhile; ?>
	</div>
	</div>	
</section>
<?php get_footer(); // подключаем footer.php ?>