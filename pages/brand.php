<?php
/*
Template Name: Страница бренда
Template Post Type: brands
*/
?>
<?php get_header(); ?>
<div class="brand">
   <div class="brand-top">
    <div class="brand-left">
     <div class="brand-left-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-left.png" alt="">
     </div>
    </div>
    <div class="brand-right">
     <div class="brand-right-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-right1.png" alt="">
     </div>
     <div class="brand-right-bottom">
      <div class="brand-right-sert">
       <div class="brand-right-sert-text">Мы официальный
        дилер Leucos в РБ</div>
       <img src="<?php the_field('br_sert'); ?>" alt="">
      </div>
      <div class="brand-right-bottom-img">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-right2.png" alt="">
      </div>
     </div>
    </div>
    <div class="container">
     <div class="brand-main">
      <div class="brand-bread">
       <div class="breadcrumbs">
        <a href="/">Главная</a> /
        <a href="/бренды">Бренды</a> /
        <a class="current"><?php the_title(); ?></a>
       </div>
      </div>
      <div class="brand-info">
       <div class="brand-info-left"><img src="<?php the_field('br_img'); ?>" alt=""></div>
       <div class="brand-info-right">
        <div class="brand-info-block">
         <div class="brand-info-title">Основан</div>
         <div class="brand-info-text"><?php the_field('br_year'); ?></div>
        </div>
        <div class="brand-info-block">
         <div class="brand-info-title">Страна</div>
         <div class="brand-info-text"><?php the_field('br_country'); ?></div>
        </div>
        <div class="brand-info-block">
         <div class="brand-info-title">Специализация</div>
         <div class="brand-info-text"><?php the_field('br_spec'); ?></div>
        </div>
       </div>
      </div>
      <div class="brand-descr">
       <div class="brand-descr-left">
        <div class="brand-descr-title">karman</div>
        <div class="brand-descr-count">622 товара в каталоге</div>
        <div class="brand-descr-text">
         <?php the_field('br_text'); ?>
        </div>
        <div class="brand-descr-more"><span>Развернуть</span> описание</div>
       </div>
       <div class="brand-descr-right">
        <a href="#brand-cat" class="brand-descr-link">товары в каталоге</a>
        <a href="#brand-pdf" class="brand-descr-link">Pdf Каталоги</a>
        <a href="#brand-models" class="brand-descr-link">3d модели</a>
       </div>
      </div>
     </div>
    </div>
   </div>
   
   <div class="brand-cat" id="brand-cat">
       <div class="container">
        <div class="brand-cat-top">
         <div class="brand-cat-title"><?php the_title(); ?> в каталоге</div>
         <button class="btn brand-cat-btn">Смотреть все</button>
        </div>
        <?php echo do_shortcode( '[pwb-product-carousel brand="' . get_the_title() . '" products="10" products_to_show="10" products_to_scroll="1" autoplay="true" arrows="true"]' ) ?>
     </div>
    </div>
  </div>
  <div class="brand-pdf" id="brand-pdf">
   <div class="container">
    <div class="brand-pdf-top">
     <div class="brand-pdf-title">PDF каталоги <?php the_title(); ?></div>
     <button class="btn brand-pdf-btn">Смотреть все</button>
    </div>
    <div class="brand-pdf-wrap">
    <?php if(get_field('br_pdf1-title')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>
    <?php if(get_field('br_pdf1-title2')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title2'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img2'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file2'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>
    <?php if(get_field('br_pdf1-title3')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title3'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img3'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file3'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>
    <?php if(get_field('br_pdf1-title4')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title4'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img4'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file4'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>
    <?php if(get_field('br_pdf1-title5')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title5'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img5'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file5'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>
    <?php if(get_field('br_pdf1-title6')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title6'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img6'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file6'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>
    <?php if(get_field('br_pdf1-title7')): ?>
    	<div class="brand-pdf-block">
    	 <div class="brand-pdf-name"><?php the_field('br_pdf1-title7'); ?></div>
    	 <div class="brand-pdf-img">
    	  <img src="<?php the_field('br_pdf-img7'); ?>" alt="">
    	 </div>
    	 <a href="<?php the_field('br_pdf-file7'); ?>" class="brand-pdf-link" download>
    	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
    	  <div class="brand-pdf-link-text">Скачать каталог</div>
    	 </a>
    	</div>
    <?php endif; ?>

    </div>
   </div>
  </div>
  <div class="brand-models" id="brand-models">
   <div class="brand-models-left"></div>
   <div class="container">
    <div class="brand-models-top">
     <div class="brand-models-title">3D модели <?php the_title(); ?></div>
     <button class="btn brand-models-btn">Смотреть все</button>
    </div>
    <div class="brand-models-wrap">
    <?php if(get_field('br_3d-title')): ?>
     <div class="brand-models-block">
      <div class="brand-models-img">
       <img src="<?php the_field('br_3d-img'); ?>" alt="">
      </div>
      <div class="brand-models-name"><?php the_field('br_3d-title'); ?></div>
      <a href="<?php the_field('br_3d-file'); ?>" class="brand-models-link">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-model.png" alt="">
       Скачать 3d Модель
      </a>
     </div>
    <?php endif; ?>
    <?php if(get_field('br_3d-title2')): ?>
     <div class="brand-models-block">
      <div class="brand-models-img">
       <img src="<?php the_field('br_3d-img2'); ?>" alt="">
      </div>
      <div class="brand-models-name"><?php the_field('br_3d-title2'); ?></div>
      <a href="<?php the_field('br_3d-file2'); ?>" class="brand-models-link">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-model.png" alt="">
       Скачать 3d Модель
      </a>
     </div>
    <?php endif; ?>
    <?php if(get_field('br_3d-title3')): ?>
     <div class="brand-models-block">
      <div class="brand-models-img">
       <img src="<?php the_field('br_3d-img3'); ?>" alt="">
      </div>
      <div class="brand-models-name"><?php the_field('br_3d-title3'); ?></div>
      <a href="<?php the_field('br_3d-file3'); ?>" class="brand-models-link">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-model.png" alt="">
       Скачать 3d Модель
      </a>
     </div>
    <?php endif; ?>
    <?php if(get_field('br_3d-title4')): ?>
     <div class="brand-models-block">
      <div class="brand-models-img">
       <img src="<?php the_field('br_3d-img4'); ?>" alt="">
      </div>
      <div class="brand-models-name"><?php the_field('br_3d-title4'); ?></div>
      <a href="<?php the_field('br_3d-file4'); ?>" class="brand-models-link">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-model.png" alt="">
       Скачать 3d Модель
      </a>
     </div>
    <?php endif; ?>
    <?php if(get_field('br_3d-title5')): ?>
     <div class="brand-models-block">
      <div class="brand-models-img">
       <img src="<?php the_field('br_3d-img5'); ?>" alt="">
      </div>
      <div class="brand-models-name"><?php the_field('br_3d-title5'); ?></div>
      <a href="<?php the_field('br_3d-file5'); ?>" class="brand-models-link">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-model.png" alt="">
       Скачать 3d Модель
      </a>
     </div>
    <?php endif; ?>
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