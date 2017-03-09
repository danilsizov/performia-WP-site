
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

<?php 
$query = new WP_Query(array(
    'post_type' => 'comment',
    'post_status' => 'publish'
));


while ($query->have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();

?>

			<div class="container content feedbacks">
				<div class='row comment'>
					<div class='col-lg-offset-2 col-lg-2 text-right left-side'>
						<h3><?php echo get_post_meta($post_id, 'comment_author_name', true); ?></h3>
						<p class='text-right'><?php echo get_post_meta($post_id, 'comment_author_position', true); ?></p>
						<?php if ($link = get_post_meta($post_id, 'comment_author_vk', true)) { ?>
							<a href="<?php echo $link; ?>">
								<img src="<?php echo get_template_directory_uri();?>/img/VKB.png">
							</a>
						<?php } ?>
						<?php if ($link = get_post_meta($post_id, 'comment_author_fb', true)) { ?>
							<a href="<?php echo $link; ?>">
								<img src="<?php echo get_template_directory_uri();?>/img/FBB.png">
							</a>
						<?php } ?>
					</div>
					<div class='col-lg-offset-1 col-lg-7 text-left right-side'>
						<div class="nav-line"></div>
						<p>
							<?php echo get_post_meta($post_id, 'comment_text', true); ?>
						</p>
					</div>
				</div>
<?php
}

wp_reset_query();
?>
			</div>
		</div>
	</div>	
</section>
<?php get_footer(); // подключаем footer.php ?>