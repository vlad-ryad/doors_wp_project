<?php
/*
Template Name: Примеры работ
*/
get_header();
?>
<!-- Наши работы -->
<div class="portfolio" style="background-image: url('<?php the_field('portfolioBg'); ?>')">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="gallery">
          <?php
          $loop = get_field('portfolio');
          foreach ($loop as $row) { ?>
            <a href="<?= $row['portfolioImg']; ?>" data-caption="<?= $row['portfolioDescription']; ?>">
              <img src="<?= $row['portfolioImg']; ?>" alt="<?= $row['portfolioTitle']; ?>">
            </a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>