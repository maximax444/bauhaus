<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

?>

 <form class="woocommerce-cart-form wishlist" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
 	<table cellspacing="0">
 		<tbody>
    <style>
     .footer {
      background-color: #F9F9F9;
      position: relative;
     }
 		h1 {
 			display: none;
 		}
     .footer::after {
      content: "";
      height: 4px;
      width: 505px;
      position: absolute;
      top: 0;
      right: 0;
      background-color: #000000;
     }
 
     @media(max-width: 767px) {
      .footer {
       background-color: #fff;
      }
 
      .footer::after {
       display: none;
      }
     }
    </style>
    <div class="wishlist-left">
     <div class="wishlist-left-1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wishlist-left1.png" alt="">
     </div>
     <div class="wishlist-left-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wishlist-left2.png" alt="">
     </div>
    </div>
    <div class="wishlist-right">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wishlist-right.png" alt="">
     <div class="wishlist-right-top"></div>
     <div class="wishlist-right-bottom">
      <div class="wishlist-right-white"></div>
      <div class="wishlist-right-yellow"></div>
     </div>
    </div>
    <div class="container">
     <div class="breadcrumbs">
      <a href="/">Главная</a> /
      <a class="current">Избранное</a>
     </div>
     <div class="wishlist-title">Избранное</div>
    </div>
    <div class="wishlist-main">
     <div class="container">
      <div class="wishlist-wrap">
       <div class="wishlist-content">
       	Список желаемого пуст!
       </div>
       <div class="wishlist-aside">
	      <div class="wishlist-aside-form">
	       <div class="wishlist-aside-title">Узнать цену</div>
	       <input type="tel" placeholder="Введите Ваш номер телефона" required>
	       <button class="btn wishlist-aside-btn">оформить заказ</button>
	      </div>
     	</div> 
      </div>
     </div>
    </div>
 
<!--     <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
 
<?php do_action( 'woocommerce_cart_actions' ); ?>
 
<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
 -->
    	</tbody>
    </table>

   </form> 