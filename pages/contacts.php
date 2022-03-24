<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<div class="contacts">
    <div class="contacts-left">
     <div class="contacts-breadcrumbs">
      <div class="breadcrumbs">
       <a href="/">Главная</a> /
       <a href="" class="current">Контакты</a>
      </div>
     </div>
     <div class="contacts-left-wrap">
      <div class="contacts-left-dec">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts-img.png" alt="" />
      </div>
      <div class="contacts-left-content">
       <div class="contacts-title">Контакты</div>
       <div class="contacts-adress"><?php echo get_option('adress'); ?></div>
       <div class="contacts-time-title">Время работы</div>
       <div class="contacts-time-text"><?php echo get_option('time'); ?></div>
       <div class="contacts-phones">
        <a href="tel:<?php echo get_option('telephone1'); ?>" class="contacts-phone"><?php echo get_option('telephone1'); ?></a>
        <a href="tel:<?php echo get_option('telephone2'); ?>" class="contacts-phone"><?php echo get_option('telephone2'); ?></a>
       </div>
       <a href="mailto:<?php echo get_option('email'); ?>" class="contacts-email"
        ><?php echo get_option('email'); ?></a
       >
       <button class="contacts-btn btn">Заказать консультацию</button>
      </div>
      <div class="contacts-left-red"></div>
     </div>
    </div>
    <div class="contacts-map">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt="" />
     <div class="contacts-map-block">
      <div class="contacts-map-yellow"></div>
      <div class="contacts-map-blue"></div>
     </div>
    </div>
   </div>
<?php get_footer(); ?>