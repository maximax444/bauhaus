<?php
/*
Template Name: Страница акции
Template Post Type: news
*/
?>
<?php get_header(); ?>
<div class="stock">
   <div class="stock-top">
    <div class="stock-left">
     <div class="stock-left-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stock-left.png" alt="">
     </div>
    </div>
    <div class="container">
     <div class="stock-center">
      <div class="breadcrumbs">
       <a href="/">Главная</a> /
       <a href="" class="current">Блог</a>
      </div>
      <div class="stock-center-img">
       <img src="<?php the_field('thumb'); ?>" alt="">
      </div>
     </div>
    </div>
    <div class="stock-right">
     <div class="stock-right-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stock-right1.png" alt="">
     </div>
     <div class="stock-right-bottom">
      <div class="stock-right-date">
       Дата публикации
       <span><?php echo get_the_date('j F Y'); ?></span>
      </div>
      <div class="stock-right-2">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stock-right2.png" alt="">
      </div>
     </div>
    </div>
   </div>
   <div class="stock-main">
    <div class="container">
     <div class="stock-main-title"><?php the_field('stock_per'); ?> <br>
      <?php the_field('stock_product'); ?></div>
     <div class="stock-main-text">
      <?php the_field('stock_text'); ?>
     </div>
     <div class="stock-main-bottom">
      <a href="<?php the_field('stock_link'); ?>" class="btn stock-main-btn">Перейти в каталог flos</a><button class="stock-main-btn-o">оСТАВИТЬ ЗАЯВКУ
       НА
       ПОКУПКУ ПО АКЦИИ</button>
      <div class="stock-main-period">Акция действует
       <span><?php the_field('stock_date'); ?></span></div>
     </div>

     <div class="article-share">
      <div class="article-share-title">Поделиться</div>
      <div class="article-share-wrap">
       <a href="" class="article-share-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-b.png" alt=""></a>
       <a href="" class="article-share-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-b.png" alt=""></a>
      </div>
     </div>
    </div>
   </div>
   <div class="article-more">
    <div class="container">
     <div class="article-more-title">Вам может быть интересно</div>
     <div class="article-more-wrap">
       <?php 
       // параметры по умолчанию
       $posts = get_posts( array(
         'numberposts' => 2,
         'category'    => 0,
         'orderby'     => 'rand',
         'order'       => 'DESC',
         'include'     => array(),
         'exclude'     => array(),
         'meta_key'    => '',
         'meta_value'  =>'',
         'post_type'   => 'news',
         'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
       ) );
       foreach( $posts as $post ){
         ?>
          <a href="<?php echo get_the_permalink(); ?>" class="article-more-block" style="background-image: url('<?php the_field('thumb'); ?>');">
           <div class="article-more-name"><?php the_title(); ?></div>
           <span class="article-more-empty"></span>
           <div class="article-more-btn btn">Подробнее</div>
          </a>
         <?php 
       }

       wp_reset_postdata(); // сброс
      ?>
     </div>
     <div class="article-more-dop">
      <?php the_field('stock_bottom-text'); ?>
     </div>
    </div>
   </div>
  </div>


   
  <?php get_footer(); ?>