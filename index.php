<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<section>
	<div class="fluid-container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="main-video">
					<div class="blue-back">
						<img src="<?php echo get_template_directory_uri();?>/img/play.png" class="play">
					</div>
					<video width="1200px" autoplay='autoplay' loop='loop' muted >
					 	<source src="<?php echo get_template_directory_uri();?>/video/main-video.mp4" type='video/mp4'>
					</video>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="near-video">
					<div class="telephone">
						099 547-89-45
						<div class="nav-line"></div>
					</div>
					<div class="near-video-tittle">Учим нанимать <br>продуктивных <img src="<?php echo get_template_directory_uri();?>/img/hint.png"><br>сотрудников <br>с 1984 года</div>
					<div class="techno-trust">
						Нашей технологии доверяют:<br>
						<div class="logos row">
							<div class="col-lg-3 col-xs-12"><img src="<?php echo get_template_directory_uri();?>/img/Ikea.png" class="logo-partners"></div>
							<div class="col-lg-3 col-xs-12"><img src="<?php echo get_template_directory_uri();?>/img/IBM.png" class="logo-partners"></div>
							<div class="col-lg-3 col-xs-12"><img src="<?php echo get_template_directory_uri();?>/img/Toyota.png" class="logo-partners"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="person-photo">
		<div class="container content">
			<div class="row">
				<div class="col-lg-4 col-md-12 full-height">
					<div class="block-tittle"><strong>Люди - это<br> главное</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="white-back">
						<div class="nav-line"></div>
						<div class="quote-text" id="quote0">
							«Вставать по утрам и тащиться на работу<br> 
							нас заставляют лишь находящиеся в стенах<br>
							компании блистательно умные люди»<br>
							&nbsp;

						</div>
						<div class="quote-text" id="quote1" style="display:none;">
							Когда я вижу сотрудника, который, как<br>
							оказывается, не годен для работы, я чувствую<br>
							свою вину, потому что это я принял решение<br>
							нанять его.
						</div>
						<div class="quote-text" id="quote2" style="display:none;">
							Мы в сервис-индустрии не можем сделать<br>
							клиентов счастливыми с несчатливыми<br>
							сотрудниками<br>
							&nbsp;

						</div>
						<div class="quote-text" id="quote3" style="display:none;">
							«Если я приму на работу кучу непригодных<br>
							субьектов, это нанесет нам большой<br>
							ущерб, потому что понадобится время,<br>
							чтобы от них избавится»
						</div>
						<div class="quote-text" id="quote4" style="display:none;">
							Суть любого бизнеса можно свести к трем<br>
							словам: персонал, продукт, прибль. Если у<br>
							вас проблемы с первым пунктом, о двух<br>
							других можно забыть
						</div>
						<div class="person-slider">
							<div class="person-name" id="name0"><strong>Стив Джобс</strong></div>
							<div class="person-name" id="name1" style="display:none;"><strong>Акио Морита</strong></div>
							<div class="person-name" id="name2" style="display:none;"><strong>Джон Марриотт</strong></div>
							<div class="person-name" id="name3" style="display:none;"><strong>Дэвид Причард</strong></div>
							<div class="person-name" id="name4" style="display:none;"><strong>Ли Якокка</strong></div>
							<div class="person-position" id="position0">
								Основатель компании Apple
							</div>
							<div class="person-position" id="position1" style="display:none;">
								Основатель компании Sony
							</div>
							<div class="person-position" id="position2" style="display:none;">
								Основатель сети отелей Мarriot
							</div>
							<div class="person-position" id="position3" style="display:none;">
								HR Microsoft
							</div>
							<div class="person-position" id="position4" style="display:none;">
								Президент Ford и Crysler 
							</div>
						</div>
						<div class="person-slider-buttons">
							<button class="pre" onclick="next(-1)"><img src="<?php echo get_template_directory_uri();?>/img/pre.png"></button>
							<button class="next" onclick="next(1)"><img src="<?php echo get_template_directory_uri();?>/img/next.png"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle"><strong>Технология<br> найма</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="quote-text">
						Мы считаем, что эффективность работы всей компании зависит от качества<br>
						работы каждого ее сотрудника. Поэтому цель Перформии — научить наших<br>
						клиентов безошибочно выявлять продуктивных кандидатов и принимать в <br>
						компанию тех людей, которые будут способствовать развитию их бизнеса.
					</div>
					<div class="truck">
						<div class="truck-photo">
							<div class="performer"></div>
							<div class="doers"></div>
							<div class="pasagers"></div>
							<div class="problem-makers"></div>
							<img src="<?php echo get_template_directory_uri();?>/img/truck.png">
						</div>
						<div class="truck-text">
							Существует<br>
							четыри типа<br>
							сотрудников<br>
						</div>
					</div>
					<div class="after-img">
						Перформия разработала технологию с четкой системой действий, которая<br>
						позволяет нашим клиентам контролировать сферу подбораи оценки<br>
						персонала. Наша технология направлена на успешное решение всех<br>
						трудностей, возникающих в области подбора и  управления персоналом.
					</div>
					<div class="about">
						Подробнее о технологии >
					</div>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle"><strong>Семинары<br> и вебинары</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
					<div class="seminar">
						<div class="nav-line"></div>
						<div class="seminar-card">
							<div class="seminar-tittle"><a href="http://localhost/test/wordpress/vebinar/">Вебинар. Фундамент вашей прибыли</div>
							<div class="seminar-photo"><img src="<?php echo get_template_directory_uri();?>/img/seminar-photo1.png"></div>
							<div class="seminar-person">
								<div class="seminar-person-name"><strong>Владимир Сидоренко</strong></div>
								<div class="seminar-person-position">Президент «Перформии»</div>
							</div>
							<div class="seminar-place">
								<div class="seminar-geo"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> Киев и Одесса</strong></div>
								<div class="seminar-time">с 17.08 до 19.08</div>
							</div>
							<div class="seminar-price"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> 12 250 грн. </strong></div>
						</div>
					</div>
					<div class="seminar seminar-mar">
						<div class="nav-line"></div>
						<div class="seminar-card">
							<div class="seminar-tittle">Вебинар. Фундамент вашей прибыли</div>
							<div class="seminar-photo"><img src="<?php echo get_template_directory_uri();?>/img/seminar-photo1.png"></div>
							<div class="seminar-person">
								<div class="seminar-person-name"><strong>Владимир Сидоренко</strong></div>
								<div class="seminar-person-position">Президент «Перформии»</div>
							</div>
							<div class="seminar-place">
								<div class="seminar-geo"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> Киев и Одесса</strong></div>
								<div class="seminar-time">с 17.08 до 19.08</div>
							</div>
							<div class="seminar-price"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> 12 250 грн. </strong></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle"><strong>Главная<br>Программа</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
					<div class="main-programm">
						<div class="content-main-programm">
							<div class="main-programm-tittle">
								«Полная технология 
								найма Перформии»
							</div>
							<div class="main-programm-text">
								Освоим знания о найме продуктивных людей, попробуем<br> 
								в деле на практических занятиях, автоматизируем и упростим<br>
								процесс с помощью инструментов Перформии, поможем<br>
								внедрить технологию в бизнес
							</div>
							<div class="main-programm-about">
								Подробнее о технологии >
							</div>
							<div class="main-programm-card">
								<div class="main-programm-line"></div>
								<div class="seminar-photo"><img src="<?php echo get_template_directory_uri();?>/img/seminar-photo1.png"></div>
								<div class="seminar-person">
									<div class="seminar-person-name"><strong>Владимир Сидоренко</strong></div>
									<div class="main-programm-seminar-person-position">Президент «Перформии»</div>
								</div>
								<div class="main-programm-seminar-place">
									<div class="seminar-geo"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> Киев и Одесса</strong></div>
									<div class="main-programm-seminar-time">с 17.08 до 19.08</div>
								</div>
								<div class="main-programm-seminar-price"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> 12 250 грн. </strong></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fluid-container reviews">
			<div class="row">
				<div class="col-lg-6"><img src="<?php echo get_template_directory_uri();?>/img/video-big.png" class="photo"></div>
				<div class="col-lg-6">
					<div class="near-video">
						<div class="telephone review-tittle">
							Отзывы
							<div class="nav-line"></div>
						</div>
						<div class="reviews-text">
							До Перформии я боялся увольнять существующих<br>
							сотрудников, потому что не знал, кто вместо них придет.<br>
							Сотрудники это чувствовали и начинали диктовать свои<br>
							условия.
						</div>
						<div class="reviews-slider">
							<div class="person-name">Роман Петров</div>
							<div class="person-position">
								Основатель компании «Кровля-центр»
							</div>
							<div class="person-slider-buttons">
								<button class="pre"><img src="<?php echo get_template_directory_uri();?>/img/pre.png"></button>
								<button class="next"><img src="<?php echo get_template_directory_uri();?>/img/next.png"></button>
							</div>
							<div class="cards-review row">
								<div class="col-lg-3">
									<div class="card-review">
										<div class="review-video"><img src="<?php echo get_template_directory_uri();?>/img/video1.png"></div>
										<div class="review-person-name">Леонид Балкашинов</div>
										<div class="review-person-position">
											Основатель компании <br>
											«Электромек-Украина»
										</div>
									</div>
								</div>
								<div class="col-lg-1">

								</div>
								<div class="col-lg-3">
									<div class="card-review">
										<div class="review-video"><img src="<?php echo get_template_directory_uri();?>/img/video1.png"></div>
										<div class="review-person-name">Леонид Балкашинов</div>
										<div class="review-person-position">
											Основатель компании <br>
											«Электромек-Украина»
										</div>
									</div>
								</div>
								<div class="col-lg-1">

								</div>
								<div class="col-lg-3">
									<div class="card-review">
										<div class="review-video"><img src="<?php echo get_template_directory_uri();?>/img/video1.png"></div>
										<div class="review-person-name"><strong>Леонид Балкашинов</strong></div>
										<div class="review-person-position">
											Основатель компании <br>
											«Электромек-Украина»
										</div>
									</div>
								</div>
								<div class="col-lg-1">

								</div>
							</div>
							<div class="review-about">
								Смотреть все отзывы >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle"><strong>Ответы на<br>вопросы</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line"></div>
					<div class="answer-tittle">Можно ли заказать у вас подбор персонала?</div>
					<div class="quote-text">
						Мы не нанимаем и не ищем сотрудников за вас. Наш подход —  удочка,<br> 
						а не рыба. Для этого мы обучаем клиентов практическим инструментам, чтобы<br>
						они самостоятельно контролировали найм и находили продуктивных<br>
						кандидатов. Обратитесь к нашим партнерам. Они найдут и направят к вам<br>
						продуктивных сотрудников с помощью технологии Перформии
					</div>
					<div class="nav-line answer-mar"></div>
					<div class="answer-tittle">Могут ли компании с маленьким штатом записаться на курс?</div>
					<div class="quote-text">
						Среди наших клиентов есть компании со штатом до 10 и больше 10 000<br>
						человек. И тем, и другим, одинаково важно научиться нанимать людей, которые<br>
						добиваются результата в работе. Наше единственное требование для<br>
						сотрудничества — законность и этичность ведения бизнеса.
					</div>
					<div class="nav-line answer-mar"></div>
					<div class="answer-tittle">Что если мне не понравится обучение?</div>
					<div class="quote-text">
						Если вы останетесь недовольны после прохождения курса, мы вернем деньги<br>
						обратно. Для этого обратитесь в центральный офис в Москве<br> 
						и получите деньги в течении трех дней.
					</div>
					<div class="review-about">
						Другие вопросы >
					</div>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle"><strong>Статьи<br>и видео</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="big-card">
						<img src="<?php echo get_template_directory_uri();?>/img/card-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card card-mar-top"> 
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card small-card-mar card-mar-top">
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card card-mar-top">
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card small-card-mar card-mar-top">
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="card-about">
						Другие статьи и видео >
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</section>
<?php get_footer(); // подключаем footer.php ?>