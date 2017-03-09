
<?php
/*
Template Name: post-page
*/
?>
<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php
    $mypost = array( 'post_type' => 'post', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="banner">
		<div class="banner-wrapper">
			<div class="hr"></div>
			<div class='stat-container'>
				<div class="statictick">
					<img src="<?php echo get_template_directory_uri();?>/img/big-view.png">
					<span>245</span>
				</div>
				<div class="statictick">
					<img src="<?php echo get_template_directory_uri();?>/img/big-coment.png">
					<span>12</span>
				</div>
				<div class="statictick">
					<img src="<?php echo get_template_directory_uri();?>/img/big-likes.png">
					<span>26</span>
				</div>
			</div>
		</div>
		<div class="main-text">
			Найм и кадровые агентства: <br/>
			стоит или не стоит?
		</div>
		<img src="<?php echo get_template_directory_uri();?>/img/caret.png" class='arrow'/>
	</div>


	<div class="container content">
		<div class="row">
			<div class="col-lg-4 text-center">
				<img src="<?php echo get_template_directory_uri();?>/img/vebinar-person.png" style="width: 80%">
				
				<h3 class="text-center" style="font-family:'Yeseva One'; font-size:24px; margin-top:30px">
					<strong>Алексей Самойленко</strong>
				</h3>
				<div class="person-position text-center">
					Генеральный директор  «Преформии»
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="row plus-mar-left">
					<div class="quote-text">
						<p>
							Подбор персонала занимает у Вас слишком много времени и не даёт ожидаемых результатов? С этой проблемой сталкивается практически каждый руководитель. Многие из них видят решение в том, чтобы обратиться в агентство по подбору персонала. Руководители надеются, что так поиск сотрудников пойдёт намного быстрее и эффективнее. Но действительно ли это так?  
							<br/>
							<br/>
							Перед написанием этой статьи мы опросили наших клиентов — владельцев бизнеса, которые ранее прибегали к помощи кадровых (рекрутинговых) агентств. Они поделились с нами своим опытом и рассказали о реальных плюсах и минусах такого поиска персонала. А также сообщили нам о результатах, достигнутых в области найма за время работы с кадровыми агентствами.
							<br/>
							<br/>
							Основываясь на их ответах, и на нашем опыте в области найма, мы пришли 
							<br/>
							<br/>
							к выводу о том, что помощь рекрутинговых компаний очень редко приносит ожидаемый результат.  Поэтому доверять им поиск сотрудников — не самое верное решение. О том, почему у руководителей больше шансов успешнее подобрать персонал своими силами, мы поговорим в этой статье.
							<br/>
							<br/>
							<b>Вначале давайте рассмотрим основные причины, по которым владельцы компаний решают, что им нужны услуги кадрового агентства:</b>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<div class="block-tittle">Причина №1 </div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="nav-line"></div>
				<div class="quote-text">
					<h3>Нехватка времени.</h3>
					<p>Это одна из основных причин, по которой руководители обращаются <br/>
						в агентство по подбору персонала. Действительно, у первого лица компании, как правило, всегда есть множество неотложных вопросов, которые нужно решить.
					</p>
					<P><img src="<?php echo get_template_directory_uri();?>/img/vebinar.png" class="minus-left-mar"></p>
					<p>
						Поиск и подбор персонала — это длительный процесс, требующий большого количества времени и внимания. Поэтому многие руководители полагают, что, если они будут отвлекаться на найм, это помешает им выполнять их основные функции.
					</p>
					<p>
						Здесь мы хотим обратить Ваше внимание на то, что большинство вопросов, которые отвлекают на себя внимание руководителя, как правило, вызваны плохим качеством работы сотрудников. И их можно было бы с лёгкостью избежать, если бы в компании существовала налаженная система эффективного найма.
					</p>
					<p>
						Когда в компании много продуктивных сотрудников, которые полностью берут ответственность за свою область и достигают в ней результатов, у руководителя появляется намного больше свободного времени. Как минимум, ему больше не приходится работать за своих подчинённых и решать проблемы, вызванные некомпетентностью сотрудников.
					</p>
					<p>
						<img src="<?php echo get_template_directory_uri();?>/img/star.png" style='vertical-align: sub;'>
						<font size='5'>Результат повара — накормленные люди.</font>
					</p>
				</div>

			</div>
		</div>
	</div>


	<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<div class="block-tittle">Поделиться <br> с друзьями </div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="nav-line"></div>
				<div class="quote-text">
					<span class='soc'>
						<img src="<?php echo get_template_directory_uri();?>/img/fb-empty.png" >
						<div class="number">951</div>
					</span>
					<span class='soc'>
						<img src="<?php echo get_template_directory_uri();?>/img/gplus.png" >
						<div class="number">528</div>
					</span>
					<span class='soc'>
						<img src="<?php echo get_template_directory_uri();?>/img/vk-empty.png" >
						<div class="number">3528</div>
					</span>
					<span class='soc little'>
						<img src="<?php echo get_template_directory_uri();?>/img/tw-empty.png" >
					</span>
				</div>

			</div>
		</div>
	</div>



	<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<div class="block-tittle" style="margin-left: -107px; line-height:1.2">Статьи<br>по теме</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="small-card card-mar-top" style="margin-left: -30px"> 
					<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
					<div class="card-tag">Вовлеченность персонала</div>
					<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
					<div class="card-info">
						<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
						<div class="card-comment card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
						<div class="card-likes card-mar-l"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
					</div>
				</div>
				<div class="small-card small-card-mar card-mar-top" style="margin-left: 65px;">
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
			</div>
		</div>
	</div>

	<div style="margin-bottom:150px;"></div>
	</article>
	<?php endwhile; ?>
<?php get_footer(); // подключаем footer.php ?>