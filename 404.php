<?php get_header(); ?>
<div class="error">
   <div class="error-left">
    <div class="error-left-top">
     <div class="error-left-red">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-left.png" alt="" />
     </div>
     <div class="error-left-blue">
      <div class="error-left-blue-block"></div>
     </div>
    </div>
    <div class="error-left-bottom">
     <div class="error-left-yellow"></div>
     <div class="error-left-empty"></div>
    </div>
   </div>
   <div class="container">
    <div class="breadcrumbs">
     <a href="/">Главная</a> /
     <a class="current">Страница не найдена</a>
    </div>
    <div class="error-wrap">
     <div class="error-title">Данная страница не найдена</div>
     <div class="error-404">404</div>
     <a href="/" class="btn error-btn">Перейти на главную</a>
    </div>
   </div>
   <div class="error-right">
    <div class="error-right-top">
     <div class="error-right-top-block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-top.png" alt="" />
     </div>
    </div>
    <div class="error-right-bottom">
     <div class="error-right-bottom-red"></div>
     <div class="error-right-bottom-yellow">
      <div class="error-right-bottom-yellow-block">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-bottom.png" alt="" />
      </div>
     </div>
    </div>
   </div>
  </div>
<?php get_footer(); ?>