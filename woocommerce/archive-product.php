<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */


?>
<header class="woocommerce-products-header">
<!-- 	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
<?php endif; ?>

<?php
/**
 * Hook: woocommerce_archive_description.
 *
 * @hooked woocommerce_taxonomy_archive_description - 10
 * @hooked woocommerce_product_archive_description - 10
 */
do_action( 'woocommerce_archive_description' );
?> -->
</header>
<?php 
$category = get_queried_object();
 ?>
<?php $sterms = get_terms( array(
	'taxonomy'      => array( 'product_cat' ), // название таксономии с WP 4.5
	'parent'         => $category->term_id,
) ); ?>
<?php if((!$sterms) or ($_GET['swoof'] != "")) {
	?><!-- 
	<?php echo woocommerce_subcategory_thumbnail( $category ); ?> -->
	<div class="subcat">
	   <div class="container">
	    <div class="subcat-top">
	     <div class="subcat-top-left" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/subcat-left.png');">
	      <div class="breadcrumbs">
		    <?php do_action( 'woocommerce_before_main_content' ); ?>
		    </div>
	      <div class="subcat-title">Каталог подвесных
	       светильников</div>
	     </div>
	     <div class="subcat-top-right">
	      <a href="/" class="subcat-top-right1">
	       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/subcat-right.png" alt="">
	       <div class="subcat-top-right1-text">
	        Напольные <br>
	        светильники
	        <div class="subcat-top-right1-arrow"></div>
	       </div>
	      </a>
	      <div class="subcat-top-right-blue"></div>
	     </div>
	    </div>
	   </div>
	   <div class="subcat-products">
	    <div class="container">
	    	<?php echo do_shortcode( '[woof sid="auto_shortcode" autohide=0]' ) ?>
	     
	     <div class="subcat-wrap">
	     	<?php 
	     	if ( wc_get_loop_prop( 'total' ) ) {
	     		while ( have_posts() ) {
	     			the_post();

	     	

	     			wc_get_template_part( 'content', 'product' );
	     		}
	     	}

	     	 ?>
	      
	     </div><!-- 
	     <button class="btn subcat-btn">Показать еще 30 товаров</button> -->
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
	<?php 
	if ( woocommerce_product_loop() ) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );

		

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}

	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
	} else {
		?>
		<div class="category">
		   <style>
		    .footer {
		     position: relative;
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
			.product-breadcrumbs {
				margin-bottom: 0;
			}
		    @media(max-width: 991px) {
		     .footer::after {
		      display: none;
		     }
		    }
		   </style>
		   <div class="category-left">
		    <div class="category-left-1">
		     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-left1.png" alt="">
		    </div>
		    <div class="category-left-2">
		     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-left2.png" alt="">
		    </div>
		   </div>
		   <div class="category-right">
		    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-right.png" alt="">
		    <div class="category-right-top"></div>
		    <div class="category-right-bottom">
		     <div class="category-right-white"></div>
		     <div class="category-right-yellow"></div>
		    </div>
		   </div>
		   <div class="container">
		    <div class="breadcrumbs">
		    <?php do_action( 'woocommerce_before_main_content' ); ?>
		    </div>
		    <div class="category-title"><?php woocommerce_page_title(); ?></div>
		   </div>
		   <div class="category-main">
		    <div class="container">
		    <?php do_action( 'woocommerce_before_shop_loop' ) ?>
		  <!--    <div class="category-wrap">
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category1.png');">
		    <div class="category-block-title">Подвесные</div>
		   </a>
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category2.png');">
		    <div class="category-block-title">Напольные</div>
		   </a>
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category3.png');">
		    <div class="category-block-title">Уличные</div>
		   </a>
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category4.png');">
		    <div class="category-block-title">Настеные</div>
		   </a>
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category5.png');">
		    <div class="category-block-title">Потолочные</div>
		   </a>
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category6.png');">
		    <div class="category-block-title">Технические</div>
		   </a>
		   <a href="subcat.html" class="category-block" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/category7.png');">
		    <div class="category-block-title">Настольные</div>
		   </a>
		  </div> -->
		    </div>
		   </div>
		  </div>
		<?php 
	} ?>
<?php


/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
/*do_action( 'woocommerce_sidebar' );*/

get_footer( 'shop' );
