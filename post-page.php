
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
	<div class="banner"></div>
	<div class="back-photo">
		<div class="container content">
			<div class="row center">
				<div class="top-line"></div>
				<div class="row auto-mar">
					<div class="statictick">
						<img src="<?php echo get_template_directory_uri();?>/img/big-view.png">
						<span>245</span>
					</div>
					<div class="statictick">
						<img src="<?php echo get_template_directory_uri();?>/img/big-coment.png">
						<span>245</span>
					</div>
					<div class="statictick">
						<img src="<?php echo get_template_directory_uri();?>/img/big-likes.png">
						<span>245</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); // подключаем footer.php ?>