<!DOCTYPE html>
<html lang="ru">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <title>Баухаус</title>
 <?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
 <header class="header">
  <div class="container">
   <div class="header-wrap">
    <a href="/" class="header-logo">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
    </a>
    <?php 
      wp_nav_menu( [
        'theme_location'            => 'top', 
        'container'       => false, 
        'menu_class'      => 'header-menu', 
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
      ] );
     ?>
    
   <!--  <div class="header-menu">
    <a href="about.html" class="header-menu__element">О компании</a>
    <a href="partners.html" class="header-menu__element">Сотрудничество</a>
    <a href="blog.html" class="header-menu__element">Новости</a>
    <a href="projects.html" class="header-menu__element">Проекты</a>
    <a href="contacts.html" class="header-menu__element">Контакты</a>
   </div> -->
    <div class="header-right">
     <div class="header-search">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt="" class="header-search-link" />
      <div class="header-search__wrap">
       <input type="text" placeholder="Введите здесь текст для поиска" />
       <div class="header-search-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt="" /></div>
       <div class="header-search-close">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.png" alt="" />
       </div>
      </div>
     </div>
     <a href="/wishlist" class="header-wishlist">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wishlist.png" alt="" />
     </a>
     <button class="btn header-btn">Заказать консультацию</button>
     <div class="mob-menu">
       <span></span>
     </div>
     <div class="mob-menu-wrap">
      <?php 
        wp_nav_menu( [
          'theme_location'            => 'top', 
          'container'       => false, 
          'menu_class'      => '', 
          'items_wrap'      => '<ul class="lstn">%3$s</ul>'
        ] );
       ?>
       <?php 
         wp_nav_menu( [
           'theme_location'            => 'top2', 
           'container'       => false, 
           'menu_class'      => '', 
           'items_wrap'      => '<div class="lstn">%3$s</div>'
         ] );
        ?>
     </div>
    </div>
   </div>
  </div>
 </header>
 <div class="nav">
  <div class="container">
   <div class="nav-wrap">
    <?php 
      wp_nav_menu( [
        'theme_location'            => 'top2', 
        'container'       => false, 
        'menu_class'      => 'nav-list', 
        'items_wrap'      => '<div class="nav-list">%3$s</div>'
      ] );
     ?>
    <div class="nav2">
      <a href="tel:<?php echo get_option('telephone1'); ?>" class="nav-phone"><?php echo get_option('telephone1'); ?></a>
      <div class="nav-consultation">Заказать консультацию</div>
     </div>
    
    <div class="nav-right">
     <div class="nav-adress"><?php echo get_option('adress'); ?></div>
     <div class="nav-time"><?php echo get_option('time'); ?></div>
    </div>
   </div>
  </div>
 </div>