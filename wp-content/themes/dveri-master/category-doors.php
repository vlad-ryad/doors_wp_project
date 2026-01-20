<?php get_header(); ?>
<!-- Каталог -->
<?php
$settings = get_posts([
	'numberposts' => 1,
	'category_name' => 'settings',
	'post_type' => 'post',
]);
foreach ($settings as $post) {
	setup_postdata($post);
?>
	<div class="popular" style="background-image: url(<?php the_field('catalog_bg'); ?>)">
	<?php
}
wp_reset_postdata();
	?>

	<div class="container">
		<div class="row popular-title">
			<h2><?php single_cat_title(); ?></h2>
		</div>
		<div class="category-controll text-center">
			<button class="btn" type="button" data-filter="all">Все</button>
			<button class="btn" type="button" data-filter=".<?php echo get_category(14, ARRAY_A)['slug'] ?>"><?php echo get_category(14, ARRAY_A)['name'] ?></button>
			<button class="btn" type="button" data-filter=".<?php echo get_category(15, ARRAY_A)['slug'] ?>"><?php echo get_category(15, ARRAY_A)['name'] ?></button>
			<button class="btn" type="button" data-filter=".<?php echo get_category(16, ARRAY_A)['slug'] ?>"><?php echo get_category(16, ARRAY_A)['name'] ?></button>
			<button class="btn" type="button" data-sort="order:asc">По возрастанию</button>
			<button class="btn" type="button" data-sort="order:descending">По убыванию</button>
		</div>
		<div class="row popular-goods catalog">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();

					// Получаем категории для фильтрации
					$all_category = get_the_category();
					$res_name = '';
					$category_class = '';

					foreach ($all_category as $category) {
						if ($category->term_id == 14 || $category->term_id == 15 || $category->term_id == 16) {
							$res_name = $category->slug;
							// Добавляем класс для фильтрации
							if ($category->term_id == 14) $category_class = 'category1';
							if ($category->term_id == 15) $category_class = 'category2';
							if ($category->term_id == 16) $category_class = 'category3';
						}
					}
			?>

					<div class="col-3 col-lg-6 col-sm-12 product mix <?php echo $res_name; ?>"
						data-order="<?php the_field('doors_price'); ?>">
						<?php the_post_thumbnail(''); ?>
						<h3><?php the_title(); ?></h3>
						<div><?php the_field('doors_price'); ?> &#8381;</div>
						<a href="<?php the_permalink(); ?>" class="btn">
							<?php the_field('doors_more'); ?>
						</a>
					</div>

			<?php
				} // end while
			} else {
				echo '<p>Товары не найдены</p>';
			}
			?>
		</div>

		<!-- Пагинация с заголовком -->
		<?php if ($wp_query->max_num_pages > 1) : ?>
			<div class="pagination-wrapper">
				<div class="pagination-title ">
					<!-- <h2>Навигация по записям</h2> -->
				</div>
				<?php
				the_posts_pagination(array(
					'mid_size'  => 2,
					'prev_text' => __('« Назад'),
					'next_text' => __('Вперед »'),
				));
				?>
			</div>
		<?php endif; ?>

	</div>
	</div>
	<?php get_footer(); ?>