<?php
/*
Template Name: На заказ
*/
get_header();
?>
<!-- На заказ -->
<div class="to-order">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- На заказ -->
        <?php
        $posts = get_posts(array(
          'numberposts' => 0, // количество записей (0=не ограничено)
          'category_name' => 'order', // название рубрики на английском
          'orderby'     => 'title', // сортировка по названию
          'order'       => 'ASC', //по возрастанию
          'post_type'   => 'post',
          'suppress_filters' => true,
        ));
        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="to-order-card">
            <h2><?php the_title(); ?></h2>
            <div class="to-order-card-inner">
              <?php the_post_thumbnail(''); ?>
              <div class="to-order-text">
                <?php the_content(); ?>
                <p> <?php the_field('order_add'); ?> </p>
              </div>
            </div>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
        <!-- Форма -->
        <div class="to-order-form">
          <h3><?php the_field('order_form_title'); ?></h3>
          <?php echo do_shortcode(get_field('order_form_shortcode')); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>