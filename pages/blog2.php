<?php
/*
Template Name: Статья 2 типа
Template Post Type: news
*/
?>
<?php get_header(); ?>
<div class="article article2">
   <div class="article-left">
    <div class="article-left-wrap">
     <div class="article-left-1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-left1.png" alt="">
     </div>
     <div class="article-left-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-left2.png" alt="">
     </div>
    </div>
   </div>
   <div class="article-top">
    <div class="article-right">
     <div class="article-right-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-right1.png" alt="">
     </div>
     <div class="article-right-bottom">
      <div class="article-right-date">
       <div class="article-right-date-wrap">
        <div class="article-right-date-title">Дата публикации</div>
        <div class="article-right-date-text"><?php echo get_the_date('j F Y'); ?></div>
       </div>
      </div>
      <div class="article-right-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-right2.png" alt=""></div>
     </div>
    </div>
    <div class="container">
     <div class="breadcrumbs">
      <a href="/">Главная</a> /
      <a href="/news/">Блог</a> /
      <a class="current"><?php the_title(); ?></a>
     </div>
     <div class="article-title"><?php the_title(); ?></div>
     <div class="article-subtext">
      <?php the_field('ar2_text'); ?>
     </div>
    </div>
   </div>
   <div class="article-main">
    <div class="container">
     <div class="article-main-container">
      <h2>Заголовок</h2>
      <div class="article-main-wrap">
       <div class="article-main-block">
        <?php the_field('ar2_left'); ?>
       </div>
       <div class="article-main-block">
		<?php the_field('ar2_right'); ?>
        </div>
      </div>
      <div class="article-main-list">
       <div class="article-main-list-title">Маркерованный список</div>
       <?php the_field('ar2_list'); ?>
      </div>
      <div class="article-main-gallery">
       <div class="article-main-gallery-top">
        <div class="article-main-gallery-title"><?php the_field('ar2_gal-title'); ?></div>
       </div>
       <div class="article-main-gallery-wrap">
        <div class="article-main-gallery-left">
         <div class="article-main-gallery1">
          <img src="<?php the_field('ar2_gal1'); ?>" alt="">
         </div>
         <div class="article-main-gallery2">
          <img src="<?php the_field('ar2_gal2'); ?>" alt="">
         </div>
        </div>
        <div class="article-main-gallery-right">
         <img src="<?php the_field('ar2_gal3'); ?>" alt="">
        </div>
       </div>
       <div class="article-main-gallery-descr"><?php the_field('ar2_gal-text'); ?></div>
      </div>
      <div class="article-share">
       <div class="article-share-title">Поделиться</div>
       <div class="article-share-wrap">
        <a onclick="location.assign('https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_the_permalink() ?>')" class="article-share-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-b.png" alt=""></a>
        <a href="" class="article-share-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-b.png" alt=""></a>
       </div>
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
      <?php the_field('ar2_bottom-text'); ?>
     </div>
    </div>
   </div>
  </div>
<?php get_footer(); ?>