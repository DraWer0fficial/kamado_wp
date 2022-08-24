<?php get_header(); ?>
<body>
 <!----- header----->
 <header id="header" class="DownMove">
  <a href="<?php echo home_url(); ?>" class="header_logo"><img src="<?php echo get_template_directory_uri();?>/./image/common/logo.png" alt="竈門祭りロゴ"></a>
    <h2>開催日時<span>2021,9,28(火曜日)</span></h2>
    <div class="open_menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
        <nav id="list">
          <div id=open_nav_list>
            <ul class="page_link">
              <li><a href="<?php echo home_url(); ?>">トップへ戻る</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('archive')->ID); ?>">お知らせ一覧へ</a></li>
            </ul>
          </div>
        </nav>
        <div class="circle"></div>
 </header>
 <!----- /header ----->
 
 <!----- main ----->
 <main>
  <section class="single">
      <div class="single_img"><?php the_post_thumbnail('large') ?></div>
      <div class="single_text">
        <h2><?php the_title(); ?><span><?php the_time('Y,m,d'); ?></span></h2>
        <p><?php the_content(); ?></p>
        
        <div class="single_list">
          <ul>
            <?php next_post_link('%link &lt;', '前へ'); ?>
            <li><a href="<?php echo get_permalink(get_page_by_path('archive')->ID); ?>">お知らせ一覧へ</a></li>
            <?php previous_post_link('&gt; %link', '次へ'); ?>
          </ul>
        </div>
      </div>
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
        <li><a href="<?php echo home_url(); ?>">トップへ戻る</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('archive')->ID); ?>">お知らせ一覧へ</a></li>
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