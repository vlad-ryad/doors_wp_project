<?php get_header(); ?>
<!-- Страница одной двери -->
<div class="door-template">
  <div class="container">
    <div class="row">
      <div class="col-6 col-lg-12">
        <div class="door-gallery">
          <?php
          $loop = get_field('gallery');
          foreach ($loop as $row) { ?>
            <a href="<?= $row['gallery_photo']; ?>" data-caption="<?= $row['gallery_description']; ?>">
              <img src="<?= $row['gallery_photo']; ?>" alt="<?= $row['gallery_title']; ?>">
            </a>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="col-6 col-lg-12 door-description">
        <h2> <?php the_title() ?>
          <span>
            <?php if (get_field('doors_stock')) {
              echo get_field('doors_stock_true');
            } else {
              echo get_field('doors_stock_false');
            } ?>
          </span>
        </h2>
        <?php the_content(); ?>
        <h3><?php the_field('doors_price'); ?> &#8381;</h3>
        <?php echo do_shortcode(get_field('doors_form_shortcode')); ?>
        <table>
          <caption><?php the_field('doors_property_title'); ?></caption>
          <?php
          $loop = get_field('doors_property');
          foreach ($loop as $row) { ?>
            <tr>
              <td><?= $row['doors_key']; ?></td>
              <td><?= $row['doors_value']; ?></td>
            </tr>
          <?php
          }
          ?>

        </table>
        <a class="btn" href="/<?php the_field('info_slug'); ?>"><?php the_field('info_title'); ?></a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>