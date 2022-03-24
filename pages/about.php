<?php
/*
Template Name: О компании
*/
?>
<?php get_header(); ?>
<div class="about">
   <div class="about-top">
    <div class="about-left">
     <div class="about-left-wrap">
      <div class="about-left-content">
       <div class="breadcrumbs">
        <a href="/">Главная</a> /
        <a class="current">О компании</a>
       </div>
       <div class="about-title">
        С 2008 года помогаем <br>
        воплащать идеи в жизнь
       </div>
      </div>
     </div>
     <div class="about-left-bottom">
      <div class="about-left-bottom-block"></div>
     </div>
    </div>
    <div class="about-right">
     <div class="about-right-wrap">
      <div class="about-right-img">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-top.png" alt="">
      </div>
      <div class="about-right-red"></div>
     </div>
    </div>
    <div class="about-mob">
     <div class="about-mob-1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-mob1.png" alt="">
     </div>
     <div class="about-mob-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-mob2.png" alt="">
     </div>
    </div>
   </div>
   <div class="about-main">
    <div class="about-main-grey"></div>
    <div class="container">
     <div class="about-main-wrap">
      <div class="about-main-content">
       <div class="about-main-title">История создания
        и развития</div>
       <div class="about-main-text">
        <?php the_field('about_text'); ?>
       </div>
       <div class="about-main-more"><span>Развернуть</span> описание</div>
      </div>
      <div class="about-main-img">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-man.png" alt="">
       <div class="about-main-name">Ботян Игорь</div>
      </div>
     </div>
    </div>
   </div>
   <div class="about-service">
    <div class="container">
     <div class="about-service-top">
      <div class="about-service-title">услуги</div>
      <div class="about-service-nav">
       <div class="about-service-slider-arrow about-service-slider-arrow_left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt="" />
       </div>
       <div class="about-service-slider-arrow about-service-slider-arrow_right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt="" />
       </div>
      </div>
     </div>
     <div class="about-service-slider">
       <?php 
       // параметры по умолчанию
       $posts = get_posts( array(
         'numberposts' => 10,
         'category'    => 0,
         'orderby'     => 'date',
         'order'       => 'DESC',
         'include'     => array(),
         'exclude'     => array(),
         'meta_key'    => '',
         'meta_value'  =>'',
         'post_type'   => 'services',
         'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
       ) );
       foreach( $posts as $post ){
         ?>
          <a href="<?php the_field('serv_link'); ?>" class="about-service-block"
           style="background: #ffffff url('<?php the_field('serv_img'); ?>') right bottom no-repeat;">
           <div class="about-service-text"><?php the_title(); ?> <div class="about-service-arrow"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt=""></div>
           </div>
          </a>
         <?php 
       }

       wp_reset_postdata(); // сброс
      ?>

     </div>
    </div>
   </div>
   <div class="about-team">
    <div class="container">
     <div class="about-team-title">Команда</div>
     <div class="about-team-text">Реализовали 657 проектов, обладают колосальным опытом
      в подборе, консультации, доставки предметов интерьера</div>
     <div class="about-team-wrap">
       <?php 
       // параметры по умолчанию
       $posts = get_posts( array(
         'numberposts' => 10,
         'category'    => 0,
         'orderby'     => 'date',
         'order'       => 'DESC',
         'include'     => array(),
         'exclude'     => array(),
         'meta_key'    => '',
         'meta_value'  =>'',
         'post_type'   => 'team',
         'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
       ) );
       foreach( $posts as $post ){
         ?>
          <div class="about-team-block"
           style="background: url('<?php the_field('team_img'); ?>') center no-repeat;background-size: cover;">
           <div class="about-team-name"><?php the_title(); ?></div>
           <div class="about-team-work"><?php the_field('team_work'); ?></div>
          </div>
         <?php 
       }

       wp_reset_postdata(); // сброс
      ?>

     </div>
    </div>
   </div>
   <div class="about-doc">
    <div class="container">
     <div class="about-doc-wrap">
      <div class="about-doc-left">
       <div class="about-doc-left-1"></div>
       <div class="about-doc-left-2">
        <div class="about-doc-left-img">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-doc.png" alt="">
        </div>
       </div>
      </div>
      <div class="about-doc-right">
       <div class="about-doc-title">
        Всегда открыты перед клиентом и имеем прекрасную деловую репутацию
       </div>
       <div class="about-doc-rekv-title">Реквизиты</div>
       <div class="about-doc-rekv-text">
        <div class="about-doc-rekv-text-block">Частное торгово-производственное унитарное предприятие «Баухауз Концепт»
        </div>
        <div class="about-doc-rekv-text-block">УНП 11212313213</div>
        <div class="about-doc-rekv-text-block">Р/C 456989894512131321321</div>
        <div class="about-doc-rekv-text-block">Юр. Адрес, Москвина 6</div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
<?php get_footer(); ?>