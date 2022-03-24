<?php
/*
Template Name: Бренды
*/
?>
<?php get_header(); ?>
<div class="brands">
   <div class="brands-left">
    <div class="brands-left-1">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-left1.png" alt="">
    </div>
    <div class="brands-left-2">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-left2.png" alt="">
    </div>
   </div>
   <div class="brands-right">
    <div class="brands-right-1">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-right1.png" alt="">
    </div>
    <div class="brands-right-2">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-right2.png" alt="">
    </div>
   </div>
   <div class="container">
    <div class="breadcrumbs">
     <a href="/">Главная</a> /
     <a class="current">Бренды</a>
    </div>
    <div class="brands-title">Бренды </div>
   </div>
   <div class="brands-main">
    <div class="container">
     <div class="brands-wrap">
      <div class="brands-tabs-mob">
       <span>свет</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catalog-caret.png" alt="">
      </div>
      <div class="brands-tabs">
       <div class="brands-tab brands-tab-active">Свет</div>
       <div class="brands-tab">Мебель</div>
       <div class="brands-tab">Кухни</div>
       <div class="brands-tab">Паркет</div>
       <div class="brands-tab">Аксессуары</div>
      </div>
      <div class="brands-content">
       <?php echo do_shortcode( '[pwb-az-listing]' ) ?>
      </div>
     </div>
    </div>
   </div>
  </div>

<?php get_footer(); ?>