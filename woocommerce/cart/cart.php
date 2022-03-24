<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
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
       	<?php
       	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
       		$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
       		$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
 
       		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
       			$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
       			?>
       			<div class="wishlist-block woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
       			 <div class="wishlist-block-close">
       			 	<?php
       			 		echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
       			 			'woocommerce_cart_item_remove_link',
       			 			sprintf(
       			 				'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
       			 				esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
       			 				esc_html__( 'Remove this item', 'woocommerce' ),
       			 				esc_attr( $product_id ),
       			 				esc_attr( $_product->get_sku() )
       			 			),
       			 			$cart_item_key
       			 		);
       			 	?>
       			 </div>
       			 <div class="wishlist-block-wrap">
       			   <?php
       			   $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
 
       			   if ( ! $product_permalink ) {
       			   	echo $thumbnail; // PHPCS: XSS ok.
       			   } else {
       			   	printf( '<a href="%s" class="wishlist-block-img">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
       			   }
       			   ?>
       			  <div class="wishlist-block-main">
       			   <div class="wishlist-block-status">В наличии</div>
 					<?php
 					if ( ! $product_permalink ) {
 						echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
 					} else {
 						echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="wishlist-block-title">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
 					}
 
 					do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
 
 					// Meta data.
 					echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
 
 					// Backorder notification.
 					if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
 						echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
 					}
 					?>
 
       			   <div class="wishlist-count">
       			    <div class="wishlist-count-minus">-</div>
       			    <input type="text" class="wishlist-count-quant" name="cart[%s][qty]" value="<?php echo $cart_item['quantity'] ?>">
       			    <div class="wishlist-count-plus">+</div>
       			   </div>
       			
       			  </div>
       			 </div>
       			</div>
       			<?php
       		}
       	}
       	?>
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
 
 


