
<div class="product-product">
  <div class="container">
   <div class="product-product-wrap">
    <div class="product-gallery">
      <?php do_action( 'woocommerce_before_main_content' ); ?>
<!--      <div class="product-breadcrumbs">
 <a href="/" class="product-breadcrumbs-block">Главная</a>
 <a href="category.html" class="product-breadcrumbs-block">Каталог</a>
 <span class="product-breadcrumbs-block-last">Потолочный светильник</span>
</div> -->
     <?php do_action( 'woocommerce_before_single_product_summary' ) ?>
 <!--     <div class="product-slider">
  <div class="product-slider-wrap">
   <div class="product-slider-block">
    <img src="img/product.png" alt="" />
   </div>
  </div>
  <div class="product-slider-wrap">
   <div class="product-slider-block">
    <img src="img/product.png" alt="" />
   </div>
  </div>
  <div class="product-slider-wrap">
   <div class="product-slider-block">
    <img src="img/product.png" alt="" />
   </div>
  </div>
  <div class="product-slider-wrap">
   <div class="product-slider-block">
    <img src="img/product.png" alt="" />
   </div>
  </div>
 </div> -->
     <div class="product-slider-arrows">
      <div class="product-slider-arrow product-slider-arrow_left">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt="" />
      </div>
      <div class="product-slider-arrows-text">
       <div class="product-slider-arrows-curr">1</div>
       /
       <div class="product-slider-arrows-all">3</div>
      </div>
      <div class="product-slider-arrow product-slider-arrow_right">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.png" alt="" />
      </div>
     </div>
    </div>
    <div class="product-info">
     <div class="product-info-top">
      <div class="product-info-brend">Бренд — <?php echo do_shortcode( '[pwb-brand]' ) ?></div>
      <div class="product-info-status">В наличии</div>
     </div>
     <div class="product-info-title">
      <?php the_title(); ?>
     </div>
     <div class="product-info-subtitle">Название</div>
     <div class="product-info-price">
      <div class="product-info-price-title">Цена</div>
      <div class="product-info-price-main">по запросу</div>
     </div>
     <?php  do_action( 'woocommerce_single_product_summary' ); ?>
     
    </div>
    <div class="product-features">
     <div class="product-features-block">Гарантия 2 года</div>
     <div class="product-features-block">Шеф-монтаж</div>
     <div class="product-features-block">Лучшая цена в Минске</div>
     <div class="product-features-block">Множество способов оплаты</div>
    </div>
   </div>
  </div>
 </div>
 
 <div class="product-second">
  <div class="container">
   <div class="product-wrap">
    <div class="product-left">
     <div class="product-left-title">Описание</div>
     <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
     
     
     <a href="<?php the_field('model'); ?>" class="product-model" download>
      <div class="product-model-img">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-model.png" alt="" />
      </div>
      <div class="product-model-text">Скачать 3D модель</div>
     </a>
    </div>
    
   </div>
  </div>
 </div>
 <div class="product-features product-features2">
  <div class="product-features-block">Гарантия 2 года</div>
  <div class="product-features-block">Шеф-монтаж</div>
  <div class="product-features-block">Лучшая цена в Минске</div>
  <div class="product-features-block">Множество способов оплаты</div>
 </div>
 <?php do_action( 'woocommerce_after_single_product' ); ?>
 
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
 <div class="overlay overlay-wishlist">
   <div class="popup popup-wishlist">
    <div class="popup-close">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
    </div>
    <div class="popup-wishlist-title">Вы положили в избранное</div>
    <div class="popup-wishlist-block">
     <div class="popup-wishlist-close">
     </div>
     <div class="popup-wishlist-img">
      <img src="" alt="">
     </div>
     <div class="popup-wishlist-cont">
      <div class="popup-wishlist-name"><?php  the_title(); ?></div>
      <div class="popup-wishlist-count">
       <div class="popup-wishlist-count-minus">-</div>
       <input type="text" class="popup-wishlist-count-quant" value="1">
       <div class="popup-wishlist-count-plus">+</div>
      </div>
     </div>
    </div>
    <div class="popup-wishlist-bottom">
     <a href="/wishlist" class="btn popup-wishlist-btn">перейти в избранное</a>
     <button class="popup-wishlist-btn-o">Продолжить просмотр</button>
    </div>
   </div>
  </div>