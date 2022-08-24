<?php get_header(); ?>
 <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
 <!----- header----->
 <header id="header" class="DownMove">
     <a href="<?php echo home_url(); ?>" class="header_logo"><img src="<?php echo get_template_directory_uri();?>/./image/common/logo.png" alt="竈門祭りロゴ"></a>
     <h2>開催日時<span>2021,9,28(火曜日)</span></h2>

<!-- ハンバーガーメニュー用の三本線 -->
<div class="open_menu">
  <span></span>
  <span></span>
  <span></span>
</div>
    <nav id="list">
      <div id=open_nav_list>
        <ul class="page_link">
          <li><a href="#top">トップ</a></li>
          <li><a href="#about">概要</a></li>
          <li><a href="#news">お知らせ</a></li>
          <li><a href="#gallery">ギャラリー</a></li>
          <li><a href="#access">アクセス</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
        </ul>
      </div>
    </nav>
    <div class="circle"></div>
 </header>
 <!----- /header ----->
 
 <!----- main ----->
 <main>
   <section id="top">
     <div class="top_title">
       <h1>竈門祭り<span>秋田県御所の台</span></h1>
       <p>戦国時代から続く、<br>人と人とを紡ぐお祭りです。</p>
     </div>

     <ul class="slider">
       <li class="slider_item slider_item01"></li>
       <li class="slider_item slider_item02"></li>
       <li class="slider_item slider_item03"></li>
     </ul>
   </section>

   <section id="about">
    <h1 class="title">概要</h1>

  <!-- 1番目のコンテンツ要素 -->
    <section>
    <div class="about_area LineTrigger lineanime">
        <div class="line2">
          <div class="appear">
            <div class="about_img"></div>
          </div>
        </div>
   <!--/LineTrigger--></div>

      <div class="about_content">
        <div class="about_box">
          <h3 class="bgstretch bgLstretch"><span class="bgappear">竈門祭り</span></h3>
          <p ><span class="slide_in leftAnime">
            <span class="slide_in_inner leftAnimeInner">竈門祭りは、<br>秋田県白神山地夏霧村にて開催されているお祭りです。<br>毎年祭りは盛り上がり花火大会も開催されています。<br>戦国時代から続く、<br>伝統的なお祭りです。</span>
          </span>
          </p>
        </div>
      </div>
    </section>

    <!-- 2番目のコンテンツ要素 -->
    <section>
    <div class="about_area LineTrigger lineanime">
      <div class="line">
        <div class="line2">
          <div class="appear">
            <div class="about_img2"></div>
          </div>
        </div>
      </div>
    </div>

      <div class="about_content">
        <div class="about_box">
          <h3>花火大会</h3>
          <p ><span class="slide_in leftAnime">
            <span class="slide_in_inner leftAnimeInner">竈門祭りは、<br>秋田県白神山地夏霧村にて開催されているお祭りです。<br>毎年祭りは盛り上がり花火大会も開催されています。<br>戦国時代から続く、<br>伝統的なお祭りです。</span>
          </span>
          </p>
        </div>
      </div>
    </section>

    <!-- 3番目のコンテンツ要素 -->
    <section>
    <div class="about_area LineTrigger lineanime">
      <div class="line">
        <div class="line2">
          <div class="appear">
            <div class="about_img3"></div>
          </div>
        </div>
      </div>
    </div>

      <div class="about_content">
        <div class="about_box">
          <h3>屋台</h3>
          <p ><span class="slide_in leftAnime">
            <span class="slide_in_inner leftAnimeInner">竈門祭りは、<br>秋田県白神山地夏霧村にて開催されているお祭りです。<br>毎年祭りは盛り上がり花火大会も開催されています。<br>戦国時代から続く、<br>伝統的なお祭りです。</span>
          </span>
          </p>
        </div>
      </div>
    </section>

   </section>
   <!-- 概要Section終了 -->

   <section id="news">
     <h1 class="title">お知らせ</h1>

      <div class="news_content">

<!-- お知らせ１ -->
<?php query_posts('posts_per_page=3'); ?><!--ループ数を決めるPHPコード-->
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="news_box fadeTrigger fadeUp motion_delay02">
        <article>
          <div class="news_img"><?php the_post_thumbnail('large') ?></div>
          <div class="news_text">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_time('Y,m,d'); ?></h3>
            <p><?php the_excerpt(); ?></p>
            </div>
            <div class="news_btn">
              <a href="<?php the_permalink(); ?>" class="btn">お知らせ詳細へ</a>
            </div>
          </article>
        </div>
    <?php endwhile; ?>
  <?php endif; ?>
    <!-- お知らせループ終了 -->

      </div>
   </section>

   <section id="gallery">
     <h1 class="title">ギャラリー</h1>

     <ul class="gallery_slider">
      <li><img src="<?php echo get_template_directory_uri();?>/./image/gallery/choutin.jpg" alt="提灯の画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/./image/gallery/hanabi.jpg" alt="花火の画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/./image/gallery/jinjya.jpg" alt="神社の画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/./image/gallery/kingyo.jpg" alt="金魚すくいの画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/./image/gallery/koi.jpg" alt="鯉の画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/./image/gallery/yukata.jpg" alt="女性の浴衣画像"></li>
     </ul>
   </section>

   <section id="access">
     <h1 class="title">アクセス</h1>

    <div class="access_area">
      <div class="access_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6077.9500946912!2d139.9849937347107!3d40.387245637211976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9a89be11488589%3A0xe846987e8659130a!2z5b6h5omA44Gu5Y-w!5e0!3m2!1sja!2sjp!4v1632544325529!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

        <div class="access_block">
          <div class="access_box">
            <h3>秋田県御所の台竈門祭り</h3>
            <p>〒018-2500
              <br>秋田県山本郡八峰町八森
              <br>あきた白神駅より徒歩5分
            </p>
            <a href="https://goo.gl/maps/ZzGcMb2vYnbGo9Ux5" class="btn">GoogleMapで見る</a>
          </div>
        </div>
    </div>
   </section>

   <section id="contact">
     <h1 class="title">お問い合わせ</h1>
    <?php echo do_shortcode('[contact-form-7 id="34" title="竈門祭りお問い合わせ"]'); ?>
   </section>
 </main>
 <!----- /main ----->
 
 <!----- footer ----->
 <footer id="footer">
  <div class="footer_left">
    <div class="footer_logo"></div>
    <h2>開催日時<span>2021,9,28(火曜日)</span></h2>
  </div>

  <div class="footer_link">
    <nav class="footer_list">
      <ul class="page_link">
        <li><a href="#top">トップ</a></li>
        <li><a href="#about">概要</a></li>
        <li><a href="#news">お知らせ</a></li>
        <li><a href="#gallery">ギャラリー</a></li>
        <li><a href="#access">アクセス</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
      </ul>
    </nav>

    <ul class="sns_icon">
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>

    <small>©Kamado All Rights reserved<span>このサイトは架空のサイトです。</span></small>
  </div>

 </footer>
 <!----- /footer ----->
 </body>
 <?php get_footer(); ?>