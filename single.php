<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
  <head>
    <?php get_header(); ?>
  </head>

  <body ontouchstart="" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part("includes/header"); ?>

    <?php if (have_posts()): ?>
      <?php while (have_posts()):
          the_post(); ?>,
        <article class="single-content container">
          <h2 class="single-content__title"><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
      <?php
      endwhile; ?>
    <?php endif; ?>

    <!-- フッターを最下部に固定のためnormal-activeクラス付与 -->
    <footer class="footer normal-active">
      <p class="footer__title"><?php echo esc_url(bloginfo("name")); ?></p>
      <small class="footer__copyright">&copy; 2021 Taiki Ishida</small>
    </footer>
    
    <?php get_footer(); ?>
  </body>
</html>
