<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
  <head>
    <?php get_header(); ?>
  </head>

  <body ontouchstart="" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part("includes/header"); ?>

    <div class="not-found">
      <h2 class="not-found__title">404 お探しのページは見つかりませんでした。</h2>
      <p class="not-found__text">
        申し訳ございませんが、<a href="<?php echo home_url(
            "/"
        ); ?>" class="not-found__link">こちらのリンク</a>からトップページにお戻りください。
      </p>
    </div>

    <footer class="footer normal-active">
      <p class="footer__title"><?php echo esc_url(bloginfo("name")); ?></p>
      <small class="footer__copyright">&copy; 2021 Taiki Ishida</small>
    </footer>
    
    <?php get_footer(); ?>
  </body>
</html>
