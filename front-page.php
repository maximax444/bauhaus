<?php get_header(); ?>
 <div class="main">
  <div class="main-slider">

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
      'post_type'   => 'slider',
      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );
    foreach( $posts as $post ){
      ?>
        <div class="main-slide">
         <div class="main-wrap">
          <div class="main-left">
           <div class="main-left-block">
            <div class="main-left-top">
             <img src="<?php the_field('sl_left1'); ?>" alt="" />
            </div>
            <div class="main-left-bottom">
             <img src="<?php the_field('sl_left1'); ?>" alt="" />
            </div>
           </div>
          </div>
          <div class="container">
           <div class="main-content">
            <div class="main-title">
             <?php the_field('sl_title'); ?>
            </div>
            <a href="<?php the_field('sl_link'); ?>" class="btn main-btn">Смотреть каталог</a>
           </div>
          </div>
          <div class="main-right">
           <div class="main-right-main">
            <img src="<?php the_field('sl_right_big'); ?>" class="main-right-main-img" alt="" />
            <div class="main-right-main1"></div>
            <div class="main-right-main2"></div>
            <div class="main-right-main3"></div>
            <div class="main-right-main-dop">
             <div class="main-right-main-dop-img">
              <img src="<?php the_field('sl_right1'); ?>" alt="" />
             </div>
            </div>
           </div>
           <div class="main-right-bottom">
            <div class="main-right-bottom-nav">
             <div class="main-arrows">
              <div class="main-arrow main-arrow-left"></div>
              <div class="main-right-bottom-nav-text">
               <span class="main-nav-curr">1</span>/<span class="main-nav-all">3</span>
              </div>
              <div class="main-arrow main-arrow-right"></div>
             </div>
            </div>
            <div class="main-right-bottom-center">
             <img src="<?php the_field('sl_right2'); ?>" alt="" />
            </div>
            <div class="main-right-bottom-last">
             <img src="<?php the_field('sl_right3'); ?>" alt="" />
            </div>
           </div>
          </div>
         </div>
        </div>
      <?php 
    }

    wp_reset_postdata(); // сброс
   ?>

  </div>
 </div>
 <div class="menu">
  <div class="container">
   <div class="menu-wrap">
    <div class="menu-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/menu-bg1.png') center;">
     <a href="" class="menu-block-title">Свет</a>
     <div class="menu-list">
      <a href="" class="menu-element">Подвесные</a>
      <a href="" class="menu-element">Настеные</a>
      <a href="" class="menu-element">Настольные</a>
      <a href="" class="menu-element">Технические</a>
      <a href="" class="menu-element">Напольные</a>
      <a href="" class="menu-element">Потолочные</a>
      <a href="" class="menu-element">Уличные</a>
     </div>
    </div>
    <div class="menu-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/menu-bg2.png') center;">
     <a href="" class="menu-block-title">Кухни</a>
    </div>
    <div class="menu-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/menu-bg3.png') center;">
     <a href="" class="menu-block-title">Аксессуары</a>
     <div class="menu-list">
      <a href="" class="menu-element">Ковры</a>
      <a href="" class="menu-element">Посуда</a>
      <a href="" class="menu-element">Зеркала</a>
     </div>
    </div>
    <div class="menu-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/menu-bg4.png') center;">
     <a href="" class="menu-block-title">Мебель</a>
     <div class="menu-list">
      <a href="" class="menu-element">Диваны</a>
      <a href="" class="menu-element">Стулья</a>
      <a href="" class="menu-element">Кресла</a>
      <a href="" class="menu-element">Кровати</a>
      <a href="" class="menu-element">Столы</a>
      <a href="" class="menu-element">Уличная</a>
      <a href="" class="menu-element">Пуфы</a>
     </div>
    </div>
    <div class="menu-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/menu-bg5.png') center;">
     <a href="" class="menu-block-title">Паркет</a>
     <div class="menu-list">
      <a href="" class="menu-element">Доска</a>
      <a href="" class="menu-element">Щитовой</a>
      <a href="" class="menu-element">Массив</a>
      <a href="" class="menu-element">Наборный</a>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="brandsh">
  <div class="brandsh-left">
   <div class="brandsh-left-wrap">
    <div class="brandsh-left-red"></div>
    <div class="brandsh-left-yellow"></div>
   </div>
  </div>
  <div class="container">
   <div class="brandsh-title">Бренды</div>
   <div class="brandsh-wrap">
    <div class="brandsh-menu">
     <div class="brandsh-menu__element brandsh-menu__element-active">Cвет</div>
     <div class="brandsh-menu__element">Мебель</div>
     <div class="brandsh-menu__element">Кухни</div>
     <div class="brandsh-menu__element">Паркет</div>
     <div class="brandsh-menu__element">Аксессуары</div>
    </div>
    <div class="brandsh-elements">
     <?php echo do_shortcode( '[pwb-az-listing]' ) ?>
     <a href="/бренды" class="brandsh-more">
      <span>смотреть все бренды</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-arrow.png" alt="" />
     </a>
    </div>
   </div>
  </div>
  <div class="brandsh-right">
   <div class="brandsh-right-wrap">
    <div class="brandsh-right-blue"></div>
    <div class="brandsh-right-yellow"></div>
   </div>
  </div>
 </div>
 <div class="projectsh">
  <div class="projectsh-blue"></div>
  <div class="projectsh-red"></div>
  <div class="container">
   <div class="projectsh-top">
    <div class="projectsh-title">Выполненые проекты</div>
    <a href="/projects" class="btn projectsh-btn">Смотреть все</a>
   </div>
   <div class="projectsh-wrap">
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
      'post_type'   => 'projects',
      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );
    foreach( $posts as $post ){
      ?>
       <a href="<?php the_permalink(); ?>" class="projectsh-block">
        <div class="projectsh-img">
         <img src="<?php the_field('thumb'); ?>" alt="" />
        </div>
        <div class="projectsh-name"><?php the_title(); ?></div>
        <div class="projectsh-descr">
         <span>описание проекта</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-arrow.png" alt="" />
        </div>
       </a>
      <?php 
    }

    wp_reset_postdata(); // сброс
   ?>

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