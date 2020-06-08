<?php get_header(); ?>
<section class="container content-container">
  <section class="page">
    <div class="row">
      <div class="col-12 col-lg-9 order-lg-2">
        <div class="content">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
              <?php
              /**
               * Functions hooked into `theme/single/content` action.
               *
               * @hooked Menesu\Theme\App\Structure\render_post_content - 10
               */
              do_action('theme/page/content');
              ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-12 col-lg-3 order-lg-1 d-none d-lg-block">
        <?php if (apply_filters('theme/single/sidebar/visibility', true)) : ?>
          <?php
          /**
           * Functions hooked into `theme/single/sidebar` action.
           *
           * @hooked Menesu\Theme\App\Structure\render_sidebar - 10
           */
          do_action('theme/single/sidebar');
          ?>
        <?php endif; ?>
      </div>
  </section>
</section>
<?php get_footer(); ?>