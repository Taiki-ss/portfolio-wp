<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4PV5DW95WV"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4PV5DW95WV');
  </script>

  <meta charset="<?php bloginfo("charset"); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- IEレンダリング -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link
    rel="icon"
    type="image/png"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"
  />

  <noscript>
    <p style="position: fixed; z-index: 1000; width: 100vw; height: 100vh; background-color: #fff; color: red; font-size: 2em">
      このページを閲覧するにはJavaScriptをONにしてください。
    </p>
  </noscript>

  <?php wp_head();
?>
