<?php
/*
Template Name: О нас
*/
get_header();
?>
<!-- О компании -->
<div class="about-company" style="background-image: url('<?php the_field('about_bg'); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="<?php the_field('about_img'); ?>" alt="О компании">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_header('advantages'); ?>
<!-- Технический паспорт -->
<div class="pasport" style="background-image: url('<?php the_field('about_pasport_bg'); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php the_field('about_pasport_title'); ?></h2>
				<p><?php the_field('about_pasport_text'); ?></p>

				<a href="<?php the_field('about_pasport_pdf'); ?>" class="btn" target="_blank"><?php the_field('about_pasport_open_btn'); ?></a>

				<a href="<?php the_field('about_pasport_download'); ?>" class="btn" download=""><?php the_field('about_pasport_download_btn'); ?></a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>