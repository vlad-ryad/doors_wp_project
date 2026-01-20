<?php
/*
Template Name: Главная
*/
get_header();
?>
<!-- Шапка -->
<div class="header" style="background-image: url(<?php the_field('header_bg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-6 col-lg-12">
				<div class="header-inner">
					<div class="header-catalog">
						<h2><?php the_field('catalog_title'); ?></h2>
						<div class="doors">
							<?php
							$loop = get_field('catalog');
							foreach ($loop as $row) { ?>
								<div class="door">
									<div class="name" style="background-image: url(<?= $row['catalog_img']; ?>)"><?= $row['catalog_text']; ?></div>
								</div>
							<?php
							}
							?>
						</div>
						<a class="btn" href="/category/<?php the_field('catalog_btn_link'); ?>"><?php the_field('catalog_btn_text'); ?></a>
					</div>
					<div class="header-order">
						<h2><?php the_field('order_title'); ?></h2>
						<div class="doors">
							<?php
							$loop = get_field('order');
							foreach ($loop as $row) { ?>
								<div class="door">
									<div class="name" style="background-image: url(<?= $row['order_img']; ?>)"><?= $row['order_text']; ?></div>
								</div>
							<?php
							}
							?>
						</div>
						<a class="btn" href="/order/<?php the_field('order_btn_link'); ?>"><?php the_field('order_btn_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_header('advantages'); ?>
<!-- О нас -->
<div class="about" style="background-image: url(<?php the_field('about_bg'); ?>)">
	<div class="container">
		<div class="row about-inner">
			<div class="col-6 col-lg-12">
				<h2><?php the_field('about_title'); ?></h2>
				<p><?php the_field('about_text'); ?></p>
			</div>
			<div class="col-6 col-lg-12 text-center">
				<a href="/category/<?php the_field('catalog_btn_link'); ?>" class="btn"><?php the_field('about_btn'); ?></a>
			</div>
		</div>
	</div>
</div>
<!-- Популярные товары -->
<div class="popular" style="background-image: url(<?php the_field('bg_2'); ?>)">
	<div class="container">
		<div class="row popular-title">
			<h2><?php the_field('popular_title'); ?></h2>
		</div>
		<div class="row popular-goods">
			<?php
			$posts = get_posts(array(
				'numberposts' => 8, // количество записей (0=не ограничено)
				'category_name' => 'doors_popular', // название рубрики на английском
				'orderby'     => 'title', // сортировка по названию
				'order'       => 'ASC', //по возрастанию
				'post_type'   => 'post',
				'suppress_filters' => true,
			));
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<?php the_post_thumbnail(); ?>
					<h3><?php the_title(); ?></h3>
					<div><?php the_field('doors_price'); ?> &#8381;</div>
					<a href="<?php the_permalink(); ?>" class="btn"><?php the_field('doors_more'); ?></a>
				</div>
			<?php
			}
			wp_reset_postdata();
			?>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a href="/category/<?php the_field('catalog_btn_link'); ?>" class="btn"><?php the_field('about_btn'); ?></a>
			</div>
		</div>
	</div>
</div>
<!-- Форма обратной связи -->
<div class="contacts" style="background-image: url(<?php the_field('form_bg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-4 col-lg-12 contacts-item">
				<h3><?php the_field('form_title'); ?></h3>
				<p><?php the_field('form_text'); ?></p>
				<?php echo do_shortcode(get_field('form_shortcode')); ?>
			</div>
			<?php
			$posts = get_posts(array(
				'numberposts' => 2, // количество записей (0=не ограничено)
				'category_name' => 'form', // название рубрики на английском
				'orderby'     => 'title', // сортировка по названию
				'order'       => 'ASC', //по возрастанию
				'post_type'   => 'post',
				'suppress_filters' => true,
			));
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
					<?php the_post_thumbnail('adv_thumbnail'); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			<?php
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>