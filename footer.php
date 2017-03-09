<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<p>
						© 2016, Performia Украина. <br>
						Адрес: г. Киев. ул. Щекавицкая, 42/48
						г. Одеса ул. Среднефонтанская, 19-в
					</p>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3 foot-padding">
					<p>
						Смотрите нас на YouTube
						и читайте в социальных 
						сетях
					</p>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3">
					<p>
						Подписывайтесь на E-mail рассылку 
						и получайте самую новую и актуальную 
						информацию в сфере найма
					</p>
				</div>
				<div class="col-lg-1"></div>
				<div class="foot-margin">
					<div class="col-lg-3">
						<div class="telephone-foot">
							099 547-89-45
						</div>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-3 foot-padding">
						<p>
							<img src="<?php echo get_template_directory_uri();?>/img/FB.png" >
							<img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" >
							<img src="<?php echo get_template_directory_uri();?>/img/VK.png" >
						</p>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-4">
						<input type="text" class="foot-input" placeholder="Введите E-mail"><div class="foot-buton">Подписаться</div>
					</div>
					<div class="col-lg-1"></div>
				</div>
				<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
					'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
					'container'=> false, // обертка списка, false - это ничего
					'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
			  		'menu_id' => 'bottom-nav', // id для ul
			  		'fallback_cb' => false
			  	);
				wp_nav_menu($args); // выводим нижние меню
				?>
			</div>
		</div>
	</footer>
	<script type="text/javascript">
;(function(){
	var text = document.getElementById('text-bright');
	var currentWidth = 0;
	var width = document.getElementById('text-dark').offsetWidth;
	console.log(width);
	var stepSize =  width / 100;
	var pauseWidth = stepSize * 25;
	var secondStepTime = 10;
	var needStop = true;
	function step(){
		currentWidth += stepSize;
		// console.log(currentWidth);
		text.style.maxWidth = currentWidth + "px";
		if (width > currentWidth) {
			if (currentWidth < pauseWidth) {
				setTimeout(step, 50);
			}else{
				if(needStop){
					needStop = false;
					setTimeout(step, 500);
				}else{
					setTimeout(step, 10);
				}
			}
		}else{
			document.getElementById('preloader').style.display = "none";
			console.log("preloader finished")
		}
	}
	step();

})();
</script>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>