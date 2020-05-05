<?php require_once 'header.tpl.php'; ?>


<div class="comments_page">
	<div class="container">
		<h2>iDoctor - Отзывы</h2>
		<p class="heading">За 9 лет работы в Томске мы отремонтировали более <b>30.000</b> устройств, вот реальные отзывы наших клиентов.</p>
		<div class="comments_content">
			<div class="wrapper">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#google">Google</a></li>
					<li><a data-toggle="tab" href="#yandex">Yandex</a></li>
					<li><a data-toggle="tab" href="#audio">Аудио</a></li>
					<li><a data-toggle="tab" href="#flamp">Flamp/2Gis</a></li>
					<li><a data-toggle="tab" href="#vk">ВКонтакте</a></li>
					<li><a data-toggle="tab" href="#id_70">С сайта id70</a></li>
				</ul>
				<div class="tab-content">
					<div id="google" class="tab-pane fade in active">

					</div>
					<div id="yandex" class="tab-pane fade">

					</div>
					<div id="audio" class="tab-pane fade">
						<?php 
						$block = block_load('views', 'review_audio-block');
						$blocks = _block_render_blocks(array($block));
						$blocks_build = _block_get_renderable_array($blocks);
						echo drupal_render($blocks_build);
						?>
					</div>
					<div id="flamp" class="tab-pane fade">
						<?php 
						$block = block_load('views', 'review_flamp-block');
						$blocks = _block_render_blocks(array($block));
						$blocks_build = _block_get_renderable_array($blocks);
						echo drupal_render($blocks_build);
						?>
					</div>
					<div id="vk" class="tab-pane fade">
						<?php 
						$block = block_load('views', 'review_social-block');
						$blocks = _block_render_blocks(array($block));
						$blocks_build = _block_get_renderable_array($blocks);
						echo drupal_render($blocks_build);
						?>
					</div>
					<div id="id_70" class="tab-pane fade">

					</div>
					<div class="new_comment" id="new_comment">
						<h3>Оставьте свой отзыв</h3>
						<form method="" name="" id="add_comment_scroll">
							<input type="text" placeholder="Ваше имя"><br>
							<textarea name="" id="" placeholder="Ваш отзыв"></textarea><br>
							<p class="add_photo">Ваша фотография:</p>
							<input type="file"><br>
							<div class="btn btn-primary">Отправить</div>
						</form>
					</div>
				</div>
			</div>
			<div class="sidebar">
				<h3>Видео-отзывы</h3>
				<iframe src="https://www.youtube.com/embed/Nnql3FjQOCU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<iframe src="https://www.youtube.com/embed/Nnql3FjQOCU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<iframe src="https://www.youtube.com/embed/Nnql3FjQOCU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<iframe src="https://www.youtube.com/embed/Nnql3FjQOCU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<a href="#new_comment" class="btn btn-primary add_comment_scroll">Оставить отзыв</a>
		</div>
	</div>



	<link rel="stylesheet" href="/sites/all/libraries/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/sites/all/libraries/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
	<script src="/sites/all/libraries/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>




	<?php require_once 'footer.tpl.php';?>

	<?php require_once 'modalWindow.php';?>