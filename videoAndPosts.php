<?php
/*
Template Name: videoAndPosts
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
			<div class="col-lg-4">
				<div class="block-tittle">Статьи и видео</div>
				<div class="catalog">
					<ul class="catalog-sidebar">
						<div id="passive"><li>Все</li></div>
						<div id="passive"><li>Ошибки в найме</li></div>
						<div id="passive"><li>Вовлеченность персонала</li></div>
						<div id="passive"><li>Личные качества</li></div>
						<div id="active"><li>Мотивация</li></div>
						<div id="passive"><li>Объявление</li></div>
						<div id="passive"><li>Ошибки в найме</li></div>
						<div id="passive"><li>Вовлеченность персонала</li></div>
						<div id="passive"><li>Личные качества</li></div>
						<div id="passive"><li>Мотивация</li></div>
						<div id="passive"><li>Объявление</li></div>
						<div id="passive"><li>Личные качества</li></div>
						<div id="passive"><li>Мотивация</li></div>
						<div id="passive"><li>Объявление</li></div>
					</ul>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="find">
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="col-lg-5">
							<input type="text" class="input find-input" placeholder="Введите E-mail">
						</div>
						<div class="col-lg-3">
							<div class="find-buton">Искать</div>
						</div>
					</div>
				</div>
				<div class="big-card mar-top-find">
					<img src="<?php echo get_template_directory_uri();?>/img/card-photo.png" class="max-photo-size">
					<div class="card-tag">Вовлеченность персонала</div>
					<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
					<div class="card-info">
						<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
						<div class="card-comment" style="margin-left:10px;"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
						<div class="card-likes" style="margin-left:10px;"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
					</div>
				</div>
				<div class="small-card card-mar-top"> 
					<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
					<div class="card-tag">Вовлеченность персонала</div>
					<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
					<div class="card-info">
						<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
						<div class="card-comment" style="margin-left:10px;"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
						<div class="card-likes" style="margin-left:10px;"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
					</div>
				</div>
				<div class="small-card small-card-mar card-mar-top">
					<img src="<?php echo get_template_directory_uri();?>/img/card-small-photo.png" class="max-photo-size">
					<div class="card-tag">Вовлеченность персонала</div>
					<div class="card-tittle"><strong>Продуктивность — главный фактор успешного найма</strong></div>
					<div class="card-info">
						<div class="card-views"><img src="<?php echo get_template_directory_uri();?>/img/view.png"> 385 </div>
						<div class="card-comment" style="margin-left:10px;"><img src="<?php echo get_template_directory_uri();?>/img/coment.png"> 12 </div>
						<div class="card-likes" style="margin-left:10px;"><img src="<?php echo get_template_directory_uri();?>/img/like.png"> 26 </div>
					</div>
				</div>
				<div class="more">
					<div class="more-button" style="float:none; margin-left:auto; margin-right:auto">Загрузить ещё</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<div style="margin-top:100px"></div>
<?php get_footer(); // подключаем footer.php ?>