<?php
/*
Template Name: Полезная информация
*/
get_header();
?>
<!-- Полезная информация -->
<div class="information_page">
	<div class="container">
		<!-- Кованная полоса -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(7, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 7,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail('adv_thumbnail'); ?>
					<h3><?php the_title(); ?></h3>
				</div>
			<?php
			}
			wp_reset_postdata();
			?>
		</div>

		<!-- Ручки -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(8, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 8,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			if ($posts) {
				foreach ($posts as $post) {
					setup_postdata($post);
			?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('adv_thumbnail'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php
				}
				wp_reset_postdata();
			} else {
				// Если нет записей, показываем статическое изображение
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/2/1.jpg">
					<h3>BAROCCO SM AB-7 МАТОВАЯ БРОНЗА</h3>
				</div>
			<?php
			}
			?>
		</div>

		<!-- Элементы ковки -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(9, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 9,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			if ($posts) {
				foreach ($posts as $post) {
					setup_postdata($post);
			?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('adv_thumbnail'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php
				}
				wp_reset_postdata();
			} else {
				// Если нет записей, показываем статическое изображение
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/3/1.jpg">
					<h3>19590</h3>
				</div>
			<?php
			}
			?>
		</div>

		<!-- Цвет -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(10, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 10,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			if ($posts) {
				foreach ($posts as $post) {
					setup_postdata($post);
			?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('adv_thumbnail'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php
				}
				wp_reset_postdata();
			} else {
				// Если нет записей, показываем статическое изображение
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/4/1.jpg">
					<h3>ЧЕРНОЕ ЗОЛОТО (N24099)</h3>
				</div>
			<?php
			}
			?>
		</div>

		<!-- Рисунок МДФ 10мм -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(11, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 11,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			if ($posts) {
				foreach ($posts as $post) {
					setup_postdata($post);
			?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('adv_thumbnail'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php
				}
				wp_reset_postdata();
			} else {
				// Если нет записей, показываем статическое изображение
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/5/1.jpg">
					<h3>№2 (ГЛУХАЯ)</h3>
				</div>
			<?php
			}
			?>
		</div>

		<!-- Рисунок МДФ 16мм -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(12, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 12,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			if ($posts) {
				foreach ($posts as $post) {
					setup_postdata($post);
			?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('adv_thumbnail'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php
				}
				wp_reset_postdata();
			} else {
				// Если нет записей, показываем статическое изображение
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/6/1.jpg">
					<h3>№2 (ГЛУХАЯ)</h3>
				</div>
			<?php
			}
			?>
		</div>

		<!-- Цвета МДФ -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(13, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts(array(
				'numberposts' => 0,
				'category' => 13,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filters' => true,
			));
			if ($posts) {
				foreach ($posts as $post) {
					setup_postdata($post);
			?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('adv_thumbnail'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php
				}
				wp_reset_postdata();
			} else {
				// Если нет записей, показываем статическое изображение
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration/7/1.jpg">
					<h3>БЕЛОЕ ДЕРЕВО</h3>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>