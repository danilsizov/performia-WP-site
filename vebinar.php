
<?php
/*
Template Name: vebinar
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
				<input type="text" class="input mar-top-input" placeholder="Введите Имя">
				<input type="text" class="input" placeholder="Телефон">
				<input type="text" class="input" placeholder="E-mail">
				<div class="invite-buton">Подписаться</div>
			</div>
		</div>
		<div class="container content">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-tittle" style="margin-top:40px">О программе</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7 quote">
					<div class="nav-line" style="margin-top:50px"></div>
					<div class="quote-text">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					        <div class="post-page" id="post-<?php the_ID(); ?>">
					        <h2 class="page_title"><?php the_title(); ?></h2>
					            <div class="entry entry_page">
					                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					 
					                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					 
					                <?php edit_post_link('Отредактируйте этот текст - Администратору.', '<br /><p>', '</p>'); ?>
					            </div>
					        </div>
					    <?php endwhile; endif; ?>
					</div>
					<h3>На семинаре мы рассмотрим</h3>
					<ul class="vebinar-view">
						<li><p>Что такое продуктивность.</p></li>
						<li><p>Почему это самый важный фактор в оценке кандидатов и сотрудников</p></li>
						<li><p>Вся технология «ПЕРФОРМИИ» найма продуктивных сотрудников с большим количеством примеров и практических упражнений.</p></li>
						<li><p>Как определиться с тем, кого нужно нанять.</p></li>
						<li><p>Как нанимать продуктивных сотрудников, которые подходят всеми своими остальными качествами к данной должности.</p></li>
						<li><p>Как правильно составить объявление о вакансии, чтобы привлечь того, кто действительно нужен.</p></li>
						<li><p>Зачем в найме скорость, и как её обеспечить.</p></li>
						<li><p>Как пользоваться сайтами «ПЕРФОРМИИ» для обработки потока кандидатов, хранения всех данных и для тестирования кандидатов и сотрудников.</p></li>
						<li><p>Как и зачем тестировать существующих сотрудников.</p></li>
					</ul>

					<h3>По окончанию семинара<br> 
					участник достигнет три конечные цели:</h3>
					<ol class="vebinar-view">
						<li><p>Что такое продуктивность.</p></li>
						<li><p>Почему это самый важный фактор в оценке кандидатов и сотрудников</p></li>
						<li><p>Вся технология «ПЕРФОРМИИ» найма продуктивных сотрудников с большим количеством примеров и практических упражнений.</p></li>
					</ol>
					<div class="row mar-top grey-line">
						<div class="col-lg-4">
							<div class="about-tittle">250</div>
							<div class="description">Гривен стоит</div>
						</div>
						<div class="col-lg-4">
							<div class="about-tittle">31 авг</div>
							<div class="description">С 10 до 19</div>
						</div>
						<div class="col-lg-4">
							<div class="about-tittle">Одесса</div>
							<div class="description">Город</div>
						</div>
						<div class="gray-line"></div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="about-tittle">250</div>
							<div class="description">Гривен стоит</div>
						</div>
						<div class="col-lg-4">
							<div class="about-tittle">1 сен</div>
							<div class="description">С 10 до 19</div>
						</div>
						<div class="col-lg-4">
							<div class="about-tittle">Киев</div>
							<div class="description">Город</div>
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
	</div>	
	<div class="container content">
		<div class="row">
			<div class="col-lg-4">
				<img src="<?php echo get_template_directory_uri();?>/img/vebinar-person.png" class="minus-left-mar" style="float:right;">
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 quote">
				<div class="block-tittle-vebinar">Ведущий</div>
				<div class="nav-line"></div>
				<div class="row plus-mar-left">
					<h3><strong>Алексей Самойленко</strong></h3>
					<div class="person-position">
						Руководитель  «Преформии»
					</div>
					<div class="quote-text">
						<p>
						Генеральный директор  консалтинговой компании "Перформия Украина",<br>
						эксперт в области обучения и найму персонала .Со-основатель первой<br> 
						в Украине тренинговой компании "Олимпия". Как бизнес-тренер работал<br>
						с такими крупными компаниями, как "Bosch", "Альфа-банк", "Левада",<br>
						"Мetro", "Фокстрот", "Моршинська", "СушиЯ" и многие другие. С 2009 года<br>
						возглавляет консалтинговую компанию "Перформия Украина", клиентами<br>
						которой за время его руководства стало свыше 1300 компаний.</p>
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
					<input type="text" class="input mar-top-input" placeholder="Введите имя">
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
	</div>
	
</section>
<?php get_footer(); // подключаем footer.php ?>