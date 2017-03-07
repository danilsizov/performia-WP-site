
<?php
/*
Template Name: seminar
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
	<div class="blue-background"></div>
	<div class="gold-background"></div>
	<div class="container">
	<?php
    $mypost = array( 'post_type' => 'seminar', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-lg-8">
				<div class="vebinar-tittle-small">Семинар</div>
				<div class="vebinar-tittle">
					<div class="col-lg-8">
						<?php the_title(); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="telephone-black">099 547-89-45</div>
				<div class="invite">Заявка на участие</div>
				<input type="text" class="input mar-top-input" placeholder="Введите имя">
				<input type="text" class="input" placeholder="Телефон">
				<input type="text" class="input" placeholder="E-mail">
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
						<?php the_content(); ?>
					</div>
					<div class="row mar-top grey-line">
						<div class="col-lg-4">
							<div class="about-tittle"><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_price', true ) ); ?></div>
							<div class="description">Гривен стоит</div>
						</div>
						<div class="col-lg-4">
							<div class="about-tittle"><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_data', true ) ); ?></div>
							<div class="description"><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_time', true ) ); ?></div>
						</div>
						<div class="col-lg-4">
							<div class="about-tittle"><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_place', true ) ); ?></div>
							<div class="description">Город</div>
						</div>
						<div class="gray-line"></div>
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
				<?php echo get_the_post_thumbnail($id, array(300,300)) ?>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="block-tittle-vebinar">Ведущий</div>
				<div class="nav-line"></div>
				<div class="row plus-mar-left">
					<h3><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_author_name', true ) ); ?></strong></h3>
					<div class="person-position">
						<?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_author_position', true ) ); ?>
					</div>
					<div class="quote-text">
						<p>
						<?php echo esc_html( get_post_meta( get_the_ID(), 'seminar_author_about', true ) ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gold-block">
		<div class="container">
			<div class="row">
				<div class="gold-tittle">Заявка на участие</div>
			</div>
			<div class="row">
			<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<input type="text" class="input mar-top-input" placeholder="Введите E-mail">
				</div>
			</div>
			<div class="row">
			<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<input type="text" class="input" placeholder="Введите E-mail">
				</div>
			</div>
			<div class="row">
			<div class="col-lg-4"></div>
				<div class="col-lg-2">
					<input type="text" class="input" placeholder="Введите E-mail">
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