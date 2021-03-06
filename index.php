<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<div id="video-window"></div>
<div id="video-overlow"></div>
<section>
<div class="circle-back">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="main-video" style="margin-left: -487px; width: 956px;">
					<div class="blue-back" style="margin-left:0;margin-top: 0px;height: 634px; width: 958px;" onclick="openVideoWindow()">
						<img src="<?php echo get_template_directory_uri();?>/img/play.png" class="play">
					</div>
					<video width="1200px" autoplay='autoplay' loop='loop' muted >
					 	<source src="<?php echo get_template_directory_uri();?>/video/main.mp4" type='video/mp4'>
					 	<source src="<?php echo get_template_directory_uri();?>/video/main.webm" type='video/webm'>
					</video>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="near-video">
					<div class="telephone" style="margin-left:-17px; margin-top:-5px">
						099 547-89-45
						<div class="nav-line" style="margin-top:19px; width:141px"></div>
					</div>
					<div class="near-video-tittle" style="margin-left:-15px; margin-top:-13px; line-height:1.22;">Учим нанимать <br>продуктивных <img src="<?php echo get_template_directory_uri();?>/img/hint.png"><br>сотрудников <br>с 1984 года</div>
					<div class="techno-trust" style="margin-left:-17px; margin-top:7px;">
						Нашей технологии доверяют:<br>
						<div class="logos row">
							<div class="col-lg-2 col-xs-12"><img src="<?php echo get_template_directory_uri();?>/img/Ikea.png" class="logo-partners" style="margin-top:-15px; margin-left:2px"></div>
							<div class="col-lg-2 col-xs-12"><img src="http://woxed.hol.es/wp-content/uploads/2017/02/ibm.png" class="logo-partners" style="margin-top:-14px; margin-left:57px"></div>
							<div class="col-lg-2 col-xs-12"><img src="<?php echo get_template_directory_uri();?>/img/Toyota.png" class="logo-partners" style="margin-top:-14px; margin-left:90px"></div>
							<div class="col-lg-2 col-xs-12"><img src="<?php echo get_template_directory_uri();?>/img/3dots.png" class="logo-partners" style="margin-top:-5px; margin-left:225px"></div>
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
					<div class="block-tittle" style="margin-top: -24px; margin-right: -16px; line-height: 1.25;">Люди - это<br> главное</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line" style=" margin-top: -14px; margin-left: -12px; width: 140px;"></div>
					<div class="white-back">
						<div class="quote-text" id="quote0" style="margin-top: 12px; margin-left: -14px; line-height:1.7;">
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
							<div class="person-name" id="name0" style="margin-top: -18px; margin-left: -16px;">Стив Джобс</div>
							<div class="person-name" id="name1" style="display:none;"><strong>Акио Морита</strong></div>
							<div class="person-name" id="name2" style="display:none;"><strong>Джон Марриотт</strong></div>
							<div class="person-name" id="name3" style="display:none;"><strong>Дэвид Причард</strong></div>
							<div class="person-name" id="name4" style="display:none;"><strong>Ли Якокка</strong></div>
							<div class="person-position" id="position0" style="margin-top: 5px; margin-left: -15px;">
								Основатель компании Apple
							</div>
							<div class="person-position" id="position1" style="display:none;">
								Основатель компании Sony
							</div>
							<div class="person-position" id="position2" style="display:none;">
								Основатель сети отелей Мarriot1
							</div>
							<div class="person-position" id="position3" style="display:none;">
								HR Microsoft
							</div>
							<div class="person-position" id="position4" style="display:none;">
								Президент Ford и Crysler 
							</div>
						</div>
						<div class="person-slider-buttons">
							<button class="pre" onclick="next(-1)" style="margin-top: -15px; margin-left: -10px;"><img src="<?php echo get_template_directory_uri();?>/img/pre.png"></button>
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
					<div class="block-tittle" style="margin-top: -24px; margin-right: -20px; line-height: 1.25;">Технология<br> найма</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line" style="margin-top: -10px; margin-left: -10px; width: 140px"></div>
					<div class="quote-text" style="margin-top: 21px; margin-left: -16px; line-height:1.69;">
						Мы считаем, что эффективность работы всей компании зависит от качества<br>
						работы каждого ее сотрудника. Поэтому цель Перформии — научить наших<br>
						клиентов безошибочно выявлять продуктивных кандидатов и принимать в <br>
						компанию тех людей, которые будут способствовать развитию их бизнеса.
					</div>
					<div class="truck" style="margin-top: 80px; margin-left: -25px;">
						<div class="truck-photo">
							<div class="performer" style="margin-top: 34px; margin-left: -26px;">
								<div class="perf-win">
									<h5>Перформеры</h5>
									<p>Сотрудники, которые всегда смотрят на конечный результат и производят его. </p>
								</div>
							</div>
							<div class="doers" style="margin-top: 43px; margin-left: -23px;">
								<div class="doers-win">
									<h5>Делатели</h5>
									<p>Это люди, которые желают делать (выполнять работу или поручения). Ключевой фактор — степень желания и готовности. Делателю нужно указывать, что делать. </p>
								</div>
							</div>
							<div class="pasagers" style="margin-top: 39px; margin-left: -21px;">
								<div class="pas-win">
									<h5>Пассажири</h5>
									<p>«Пассажиры» не проявляют большого желания делать работу. Однако они нередко требуют, чтобы их «мотивировали», «носили на руках», всеми путями стремятся уклониться от работы или перевалить ее на других. </p>
								</div>
							</div>
							<div class="problem-makers" style="margin-top: 35px; margin-left: -29px;">
								<div class="pas-win">
									<h5>Создатели проблем</h5>
									<p>Это те сотрудники, которые создают такое количество проблем, что не под силу справиться ни одному руководителю. Отличительные черты: производительность нестабильна, постоянные ошибки, часто критикуют своих коллег</p>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/img/truck.png">
						</div>
						<div class="truck-text" style="margin-top: 44px; margin-left: 32px; line-height:1.69;">
							Существует<br>
							четыри типа<br>
							сотрудников<br>
						</div>
					</div>
					<div class="after-img" style="margin-top: 30px; margin-left: -15px; line-height:1.8">
						Перформия разработала технологию с четкой системой действий, которая<br>
						позволяет нашим клиентам контролировать сферу подбораи оценки<br>
						персонала. Наша технология направлена на успешное решение всех<br>
						трудностей, возникающих в области подбора и  управления персоналом.
					</div>
					<a href="http://woxed.hol.es/main-programm/"><div class="about" style="margin-top: 60px; margin-left: -12px; line-height:1.69;">
						Подробнее о технологии >
					</div></a>
				</div>
			</div>
		</div>
		<div class="container content" id="vebinar">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle" style="margin-top: -2px; margin-right: -22px; line-height: 1.25;"><strong>Семинары<br> и вебинары</strong></div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
				<?php
				    $mypost = array( 'post_type' => 'vebinar', );
				    $loop = new WP_Query( $mypost );
				    ?>
				    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
				    	<a href="<?php echo get_permalink(); ?>">
				        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="seminar" style="margin-top: 10px; margin-left: -15px;">
								<div class="nav-line"></div>
								<div class="seminar-card">
									<div class="seminar-tittle">Вебинар. <?php the_title(); ?></div>
									<div class="seminar-photo" style="margin-top: 30px; margin-left: 0px;"><?php echo get_the_post_thumbnail($id, array(40,40)) ?></div>
									<div class="seminar-person">
										<div class="seminar-person-name" style="margin-top: 5px; margin-left: 10px;"><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'author_name', true ) ); ?></strong></div>
										<div class="seminar-person-position" style="margin-top: 5px; margin-left: 10px;"><?php echo esc_html( get_post_meta( get_the_ID(), 'author_position', true ) ); ?></div>
									</div>
									<div class="seminar-place">
										<div class="seminar-price"  style="margin-top: 5px; margin-left: -45px;"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'vebinar_price', true ) ); ?> грн.</strong></div>
										<div class="seminar-time" style="margin-top: 5px; margin-left: -38px;"><?php echo esc_html( get_post_meta( get_the_ID(), 'vebinar_time', true ) ); ?></div>
									</div>
								</div>
							</div>
						</article>
						</a>
					<?php endwhile; ?>
					<?php
				    $mypost = array( 'post_type' => 'seminar', );
				    $loop = new WP_Query( $mypost );
				    ?>
				    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
				    	<a href="<?php echo get_permalink(); ?>">
				        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="seminar seminar-mar" style="margin-top: 28px; margin-left: -15px;">
								<div class="nav-line"></div>
								<div class="seminar-card">
									<div class="seminar-tittle">Семинар. <?php the_title(); ?></div>
									<div class="seminar-photo" style="margin-top: 30px; margin-left: 0px;"><?php echo get_the_post_thumbnail($id, array(40,40)) ?></div>
									<div class="seminar-person">
										<div class="seminar-person-name" style="margin-top: 5px; margin-left: 10px;"><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_author_name', true ) ); ?></strong></div>
										<div class="seminar-person-position" style="margin-top: 5px; margin-left: 10px;"><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_author_position', true ) ); ?></div>
									</div>
									<div class="seminar-place">
										<div class="seminar-geo" style="margin-top: 5px; margin-left: -45px;"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_place', true ) ); ?></strong></div>
										<div class="seminar-time" style="margin-top: 5px; margin-left: -35px;"><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_data', true ) ); ?></div>
									</div>
									<div class="seminar-price"  style="margin-top: 25px; margin-left: 45px;"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_price', true ) ); ?> грн. </strong></div>
								</div>
							</div>
							</a>
						</article>
					<?php endwhile; ?>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle" style="margin-top: -15px; margin-right: -8px; line-height: 1.25;">Главная<br>программа</div>
				</div>
				<div class="col-lg-1"></div>
				<a href="http://993684.krovcent.web.hosting-test.net/main-programm">
				<div class="col-lg-7">
					<div class="main-programm" style="margin-left: -27px; height:675px">
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
									<div class="main-programm-seminar-time" style="margin-left:10px">с 17.08 до 19.08</div>
								</div>
								<div class="main-programm-seminar-price"><img src="<?php echo get_template_directory_uri();?>/img/green-circle.png"><strong> 12 250 грн. </strong></div>
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>
		</div>

		<div class="fluid-container reviews">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="main-video" style="margin-left: -482px; margin-top: 17px; height:675px;width: 858px;">
						<div class="blue-back" style="width: 857.2px;">
							<img src="<?php echo get_template_directory_uri();?>/img/play.png" class="play">
						</div>
						<video height="637px" autoplay='autoplay' loop='loop' muted id='slider-video'>
						 	<source src="<?php echo get_template_directory_uri();?>/video/coment.mp4" type='video/mp4'>
					 		<source src="<?php echo get_template_directory_uri();?>/video/coment.webm" type='video/webm'>
						</video>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="near-video">
						<div class="telephone review-tittle" style="margin-top: 2px; margin-left: -111px; font-size:36px">
							Отзывы
							<div class="nav-line"></div>
						</div>
						<div class="reviews-text" style="margin-top: 18px; margin-left: -111px; line-height:1.8">
							До Перформии я боялся увольнять существующих<br>
							сотрудников, потому что не знал, кто вместо них придет.<br>
							Сотрудники это чувствовали и начинали диктовать свои<br>
							условия.
						</div>
						<div class="reviews-slider" style="margin-top: 17px; margin-left: -112px; ">
							<div class="person-name">Роман Петров</div>
							<div class="person-position" style="margin-top: 7px;">
								Основатель компании «Кровля-центр»
							</div>
							<div class="person-slider-buttons">
								<button class="pre"><img src="<?php echo get_template_directory_uri();?>/img/pre.png"></button>
								<button class="next" ><img src="<?php echo get_template_directory_uri();?>/img/next.png"></button>
							</div>
							<div class="cards-review row" id="video-slider-container">
								<div id="com1" class="video-slider-item" data-video='http://video.webmfiles.org/elephants-dream.webm'>
									<div class="col-lg-4">
										<div class="card-review">
											<div class="review-video">
												<img src="<?php echo get_template_directory_uri();?>/img/video1.png">
												<img src="<?php echo get_template_directory_uri();?>/img/play-sm.png" class='play'>
											</div>
											<div class="review-person-name">Леонид Балкашинов</div>
											<div class="review-person-position">
												Основатель компании <br>
												«Электромек-Украина»
											</div>
										</div>
									</div>
								</div>
								<div id="com2" class="video-slider-item" data-video='http://video.webmfiles.org/big-buck-bunny_trailer.webm'>
									<div class="col-lg-4">
										<div class="card-review">
											<div class="review-video">
												<img src="<?php echo get_template_directory_uri();?>/img/video1.png">
												<img src="<?php echo get_template_directory_uri();?>/img/play-sm.png" class='play'>
											</div>
											<div class="review-person-name">Леонид Балкашинов</div>
											<div class="review-person-position">
												Основатель компании <br>
												«Электромек-Украина»
											</div>
										</div>
									</div>
								</div>
								<div id="com3" class="video-slider-item">
									<div class="col-lg-4">
										<div class="card-review">
											<div class="review-video">
												<img src="<?php echo get_template_directory_uri();?>/img/video1.png">
												<img src="<?php echo get_template_directory_uri();?>/img/play-sm.png" class='play'>
											</div>
											<div class="review-person-name">Леонид Балкашинов</div>
											<div class="review-person-position">
												Основатель компании <br>
												«Электромек-Украина»
											</div>
										</div>
									</div>
								</div>
							</div>
							<a href="http://993684.krovcent.web.hosting-test.net/comment">
							<div class="review-about">
								Смотреть все отзывы >
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container content faq">
			<div class="row">
				<div class="col-lg-4"> 
					<div class="block-tittle" style="margin-top: -80px; margin-right: -7px; line-height:1.2">Ответы на<br>вопросы</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line" style="margin-top: -69px; margin-left: -27px; width: 155px;"></div>
					<div class="answer-tittle" style="margin-top: 20px; margin-left: -27px; line-height:1.2">Можно ли заказать у вас подбор<br> персонала?</div>
					<div class="quote-text" style="margin-top: 16px; margin-left: -27px; line-height:1.75">
						Мы не нанимаем и не ищем сотрудников за вас. Наш подход —  удочка,<br> 
						а не рыба. Для этого мы обучаем клиентов практическим инструментам, чтобы<br>
						они самостоятельно контролировали найм и находили продуктивных<br>
						кандидатов. Обратитесь к нашим партнерам. Они найдут и направят к вам<br>
						продуктивных сотрудников с помощью технологии Перформии
					</div>
					<div class="nav-line answer-mar" style="margin-top: 47px; margin-left: -27px; width: 155px;"></div>
					<div class="answer-tittle" style="margin-top: 20px; margin-left: -27px; line-height:1.2">Могут ли компании с маленьким штатом<br>записаться на курс?</div>
					<div class="quote-text" style="margin-top: 16px; margin-left: -27px; line-height:1.75">
						Среди наших клиентов есть компании со штатом до 10 и больше 10 000<br>
						человек. И тем, и другим, одинаково важно научиться нанимать людей, которые<br>
						добиваются результата в работе. Наше единственное требование для<br>
						сотрудничества — законность и этичность ведения бизнеса.
					</div>
					<div class="nav-line answer-mar" style="margin-top: 47px; margin-left: -27px; width: 155px;"> </div>
					<div class="answer-tittle" style="margin-top: 20px; margin-left: -27px; line-height:1.2">Что если мне не понравится обучение?</div>
					<div class="quote-text" style="margin-top: 16px; margin-left: -27px; line-height:1.75">
						Если вы останетесь недовольны после прохождения курса, мы вернем деньги<br>
						обратно. Для этого обратитесь в центральный офис в Москве<br> 
						и получите деньги в течении трех дней.
					</div>
					<a href="http://993684.krovcent.web.hosting-test.net/answer">
					<div class="review-about" style="margin-left:-28px; margin-top:46px;">
						Другие вопросы >
					</div>
					</a>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle" style="margin-top: -25px; margin-left: -107px; line-height:1.2">Статьи<br>и видео</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="big-card" style="margin-top: -20px; margin-left: -30px;">
						<img src="<?php echo get_template_directory_uri();?>/img/card-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card card-mar-top" style="margin-left: -30px; margin-top:50px"> 
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card small-card-mar card-mar-top" style="margin-left: 65px; margin-top:50px">
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card card-mar-top" style="margin-left: -30px; margin-top:50px">
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<div class="small-card small-card-mar card-mar-top" style="margin-left: 65px; margin-top:50px">
						<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
						<div class="card-tag">Вовлеченность персонала</div>
						<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
						<div class="card-info">
							<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
							<div class="card-comment card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
							<div class="card-likes card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
						</div>
					</div>
					<a href="http://993684.krovcent.web.hosting-test.net/videoAndPosts">
					<div class="card-about">
						Другие статьи и видео >
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		// autoSlider();
	</script>
</div>
</section>
<?php get_footer(); // подключаем footer.php ?>