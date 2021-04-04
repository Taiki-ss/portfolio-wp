<header class="header">
  <div class="header__left">
    <a
      href="<?php echo esc_url(home_url("/")); ?>"
      ><h1 class="header__title"><?php bloginfo("name"); ?></h1></a
    >
  </div>
  <div class="header__right">
    <?php if (is_front_page()): ?>
      <button class="js-scroll-top header-btn header-btn--sm-none">TOP</button>
      <button class="js-scroll-works header-btn header-btn--sm-none">WORKS</button>
    <?php endif; ?>
    <?php if (is_single()): ?>
      <a href="<?php echo esc_url("/"); ?>" class="header-btn">TOP</a>
    <?php endif; ?>
  </div>
</header>
