<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
  <head>
    <?php get_header(); ?>
  </head>

  <body ontouchstart="" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- パーツとしてヘッダー読み込み -->
    <?php get_template_part("includes/header"); ?>

    <!-- 横スクロールするコンテンツを全て囲む -->
    <div class="scroll-container">
      <section class="top-visual scroll-container__box" style="background-image: url(<?php echo esc_url(
          get_template_directory_uri()
      ); ?>/assets/images/top.jpg);">
        <div class="top-visual__bg-black"></div>
        <div class="top-visual__about about">
          <figure>
            <img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/images/face.png" alt="顔写真" class="about__img">
            <figcaption class="about__img-text">Taiki Ishida</figcaption>
          </figure>
          
          <!-- 固定ページ「TOP」を編集で表示変更 -->
          <div class="about__text-wrapper">
            <?php if (have_posts()): ?>
              <?php while (have_posts()):
                  the_post(); ?>
                <?php the_content(); ?>
              <?php
              endwhile; ?>
            <?php endif; ?>
          </div>

        </div>
      </section>
      <!-- ./top-visual -->

      <section class="scroll-container__box history history01">
        <div class="history01__left">
          <h2 class="history__title">2007.4〜</h2>
          <div class="history01__inner">
            <p class="history__text">
              佐世保市の公立高校を卒業<br>海上自衛隊（海曹候補学生）入隊<br>最終階級･･･３等海曹
            </p>
            <figure class="history01__img-wrapper">
              <img class="history01__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ship.jpg" alt="" width="400" height="300">
            </figure>
          </div>
        </div>
        <div class="history01__right">
          <h2 class="history__title">2009.9〜</h2>
          <div class="history01__inner">
            <p class="history__text">
            自衛隊を退職し舞鶴市から佐世保市へ<br>長男であり<span class="history__accent">「ずっと長崎で生きる」</span>と決めていたこともあり退職。<br>その後、市内で介護士になる。<br>介護福祉士、ケアマネージャーの資格を最速で取得
            </p>
            <figure class="history01__img-wrapper">
              <img class="history01__img" src="<?php echo esc_url(
                  get_template_directory_uri()
              ); ?>/assets/images/care.jpg" alt="" width="400" height="300">
            </figure>
          </div>
        </div>
      </section>
      <!-- ./history01 -->

      <section class="scroll-container__box history history02">
        <div class="history02__left">
          <h2 class="history__title">2015.4〜</h2>
          <div class="history02__inner">
            <p class="history__text">
              結婚<br>
              地域で最年少のケアマネージャーとして勤務開始<br>
              認知症サポーター育成講師<br>
              施設の防火管理者<br>
              法人の広報・<span class="history__accent">ホームページ管理責任者</span>を兼任
            </p>
            <a class="history02__link" href="https://note.com/tnk0501/n/n4fe74003c8c9" target="_blank" rel="noopener noreferrer">
              <img class="history02__img" src="<?php echo esc_url(
                  get_template_directory_uri()
              ); ?>/assets/images/note01.png" alt="" width="400" height="300">
            </a>
          </div>
        </div>
        <div class="history02__right">
          <h2 class="history__title">2019.7〜</h2>
          <div class="history02__inner">
            <p class="history__text">
              Web制作やプログラミングの<span class="history__accent">独学</span>開始。<br>
              平日の朝晩４〜５時間<br>
              休日は６〜８時間、１日も休まず今日まで学習継続
            </p>
            <a class="history02__link" href="https://note.com/tnk0501/m/md6063c2f86cb" target="_blank" rel="noopener noreferrer">
              <img class="history02__img" src="<?php echo esc_url(
                  get_template_directory_uri()
              ); ?>/assets/images/note02.png" alt="" width="400" height="300">
            </a>
          </div>
        </div>
      </section>
      <!-- ./history02 -->
      
      <section class="scroll-container__box history history03">
        <h2 class="history__title">2019.9〜</h2>
        <div class="history03__inner">  
          <div class="history03__left">
            <p class="history__text">
              Twitterで<span class="history__accent">毎日の学習状況の発信</span>と、Webに関する情報収集を開始<br>                
              今まで学習してきたこと<br>
              HTML CSS Sass BootStrap jQuery JavaScript React Gatsby.js PHP WordPress Photoshop AdobeXD Git GitHub BEM（CSS設計）<br>ドメインやレンタルサーバー FTP <span class="history__accent">ウェブ解析士取得</span>
            </p>
            <a href="https://twitter.com/i/events/1302994968437432321?s=20" class="moment" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/images/moment.png" alt="" class="moment__img"></a>
          </div>
          <div class="history03__right">
            <p class="history__text">                
              JavaScriptミニアプリ<br>
              2020，6月頃JavaScriptの学習をしていた際に作成したオリジナルミニアプリです。
            </p>
            <div class="mini-app__wrapper">
              <a href="https://taiki-create.com/pomodoro/" class="mini-app" target="_blank" rel="noopener noreferrer">
                <p class="mini-app__title">Pomodoro Timer</p>
                <img src="<?php echo esc_url(
                    get_template_directory_uri()
                ); ?>/assets/images/pomodoro.png" alt="" class="mini-app__img" width="300" height="200">
              </a>
              <a href="https://taiki-create.com/number_game/" class="mini-app" target="_blank" rel="noopener noreferrer">
                <p class="mini-app__title">NumberGame</p>
                <img src="<?php echo esc_url(
                    get_template_directory_uri()
                ); ?>/assets/images/number.png" alt="" class="mini-app__img" width="300" height="200">
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ./history03 -->

      <section class="scroll-container__box history history04">
        <h2 class="history__title">2020.9〜</h2>
        <div class="history04__inner">
          <p class="history__text">
            アウトプットとしてHTML、CSSのソースコードを発信しているとエンジニアやデザイナー、ディレクターの方から声がかかるようになり<span class="history__accent">案件を受注</span><br>
            いずれもフルリモート案件として在宅で行いました。また、副業となるため勤務先の代表にもしっかりと説明して副業許可を得ました。
          </p>
        </div>
      </section>
    </div>
    <!-- /.scroll-container -->
    
    <!-- 実績一覧を取得してループ表示 -->
    <?php
    $wp_query = new WP_Query();
    $my_posts = [
        "post_type" => "post",
        "posts_per_page" => "6",
    ];
    $wp_query->query($my_posts);
    ?>

    <?php
    if ($wp_query->have_posts()): ?> 
      <ul class="works">
        <?php while ($wp_query->have_posts()):
            $wp_query->the_post(); ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class("work"); ?>>
            <a class="work__link" href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail("pf-thumbnail"); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
              <?php endif; ?>
              <span class="work__title"><?php the_title(); ?></span>
            </a>
            <time class="work__date" datetime="<?php the_time(
                "Y-m-d"
            ); ?>"><?php the_time("Y.m"); ?></ｔ>
          </li>
        <?php
        endwhile; ?> 
      </ul>
    <?php endif;
    wp_reset_postdata();
    ?>

    <!-- 右下のスクロール表記 -->
    <div class="scroll-arrow">SCROLL<span class="scroll-arrow__arrow"></span></div>

    <!-- 横スクロール量を可視化するプログレスバー -->
    <div class="progress-bar"><span class="progress-bar__inside" id="js-bar"></span></div>

    <!-- 記事ページとクラスの付替えで仕様をかえるためパーツ化なし -->
    <footer class="footer">
      <p class="footer__title"><?php echo esc_url(bloginfo("name")); ?></p>
      <small class="footer__copyright">&copy; 2021 Taiki Ishida</small>
    </footer>
    
    <?php get_footer(); ?>
  </body>
</html>
