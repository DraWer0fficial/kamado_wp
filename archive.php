<?php get_header(); ?>
 <body>
 <!----- header----->
 <header id="header" class="DownMove">
  <a href="<?php echo home_url(); ?>" class="header_logo"><img src="<?php echo get_template_directory_uri();?>/./image/common/logo.png" alt="竈門祭りロゴ"></a>
    <h2>開催日時<span>2021,9,28(火曜日)</span></h2>
  <div class="news_list"><a href="<?php echo home_url(); ?>">＞トップへ戻る＜</a></div>
 </header>
 <!----- /header ----->
 
 <!----- main ----->
 <main>
   <section id="top">
     <div class="news_title">
       <h1>お知らせ一覧</h1>
     </div>

     <ul class="slider news_slider">
       <li class="slider_item slider_item01"></li>
       <li class="slider_item slider_item02"></li>
       <li class="slider_item slider_item03"></li>
     </ul>
   </section>


   <section id="news_archive">
     <h1 class="title">お知らせ</h1>
     <p class="Border"></p>

     <!-- 記事要素1 -->
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
     <article <?php post_class('archive'); ?>>
       <div class="archive_img"><?php the_post_thumbnail('large') ?></div>
       <div class="archive_text">
         <h2><?php the_title(); ?></h2>
         <h3><?php the_time('Y,m,d'); ?></h3>
         <p><?php the_excerpt(); ?></p>
         <div class="archive_btn">
          <a href="<?php the_permalink(); ?>" class="btn">詳細はこちらへ</a>
        </div>
       </div>
     </article>
   <?php endwhile; ?>
<?php endif; ?>

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