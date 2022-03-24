<?php
/*
Template Name: Страница бренда
Template Post Type: projects
*/
?>
<?php get_header(); ?>
<div class="project">
   <div class="project-top">
    <div class="project-left">
     <div class="project-left-wrap">
      <div class="project-left1">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-left1.png" alt="">
      </div>
      <div class="project-left2">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-left2.png" alt="">
      </div>
     </div>
    </div>
    <div class="project-right">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-right.png" alt="">
    </div>
    <div class="container">
     <div class="breadcrumbs">
      <a href="/">Главная</a> /
      <a href="/projects">Проекты</a> /
      <a class="current"><?php the_title(); ?></a>
     </div>
     <div class="project-title"><?php the_title(); ?></div>
     <div class="project-wrap">
      <div class="project-block">
       <div class="project-block-title">Укомплектовали</div>
       <div class="project-block-cont">
        <?php the_field('compl'); ?>
       </div>
      </div>
      <div class="project-block">
       <div class="project-block-title">Срок</div>
       <div class="project-block-cont"><?php the_field('period'); ?></div>
      </div>
     </div>
    </div>
   </div>
   <div class="project-main">
    <div class="project-main-left"></div>
    <div class="project-main-center">
     <div class="project-main-top">
      <div class="project-main-title">Результат работы</div>
      <div class="project-main-blue"></div>
     </div>
     <div class="project-slider">
     <?php if(get_field('plus1x')): ?>
     	<div class="project-slider-wrap">
     	 <div class="project-slider-block">
     	  <img src="<?php the_field('slide1'); ?>" alt="">
     	  <?php if(get_field('plus1x')): ?>
     	  <div class="project-slider-plus" style="top: <?php the_field('plus1y'); ?>;left: <?php the_field('plus1x'); ?>;">
     	   <div class="project-slider-plus-img">+</div>
     	   <div class="project-slider-drop-shadow"></div>
     	   <div class="project-slider-drop">
     	    <div class="project-slider-drop-close"></div>
     	    <div class="project-slider-drop-img">
     	     <img src="<?php the_field('plus1_img'); ?>" alt="">
     	    </div>
     	    <div class="project-slider-drop-title"><?php the_field('plus1_title'); ?></div>
     	    <div class="project-slider-drop-price"><?php the_field('plus1_price'); ?></div>
     	   </div>
     	  </div>
								<?php endif; ?>
     	 </div>
     	</div>
     <?php endif; ?>
      

     </div>


    </div>
    <div class="project-slider-arrows">
     <div class="project-slider-arrow_left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt=""></div>
     <div class="project-slider-arrows-num">
      <div class="project-slider-arrows-num-curr">1</div> /
      <div class="project-slider-arrows-num-all">3</div>
     </div>
     <div class="project-slider-arrow_right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt=""></div>
    </div>
    <div class="project-main-right">

    </div>
   </div>
  </div>
  <div class="consultation">
   <div class="container">
    <div class="consultation-wrap">
     <div class="consultation-left">
      <div class="consultation-red"></div>
      <div class="consultation-img">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/consultation-img.png" alt="" />
      </div>
     </div>
     <div class="consultation-right">
      <div class="consultation-title">Закажите бесплатную консультацию</div>
      <div class="consultation-subtitle">от менеджера</div>
      <div class="consultation-bottom">
       <button class="btn consultation-btn">Заказать консультацию</button>
      </div>
     </div>
    </div>
   </div>
  </div>
<?php get_footer(); ?>