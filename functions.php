<?php 
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function my_options() {
	add_settings_field("telephone1", "Телефон 1", "display_telephone1" ,"general");
	register_setting("general", "telephone1");
	add_settings_field("telephone2", "Телефон 2", "display_telephone2" ,"general");
	register_setting("general", "telephone2");
	add_settings_field("email", "Email", "display_email" ,"general");
	register_setting("general", "email");
	add_settings_field("adress", "Адрес", "display_adress" ,"general");
	register_setting("general", "adress");
	add_settings_field("time", "Время работы", "display_time" ,"general");
	register_setting("general", "time");
	add_settings_field("fb", "Ссылка на Facebook", "display_fb" ,"general");
	register_setting("general", "fb");
	add_settings_field("inst", "Ссылка на Instagram", "display_inst" ,"general");
	register_setting("general", "inst");
}
function display_telephone1() {
	echo '<input type="text" class="regular-text" name="telephone1" value="'. get_option("telephone1") .'" />' ;
}
function display_telephone2() {
	echo '<input type="text" class="regular-text" name="telephone2" value="'. get_option("telephone2") .'" />' ;
}
function display_email() {
	echo '<input type="text" class="regular-text" name="email" value="'. get_option("email") .'" />' ;
}
function display_adress() {
	echo '<input type="text" class="regular-text" name="adress" value="'. get_option("adress") .'" />' ;
}
function display_time() {
	echo '<input type="text" class="regular-text" name="time" value="'. get_option("time") .'" />' ;
}
function display_fb() {
	echo '<input type="text" class="regular-text" name="fb" value="'. get_option("fb") .'" />' ;
}
function display_inst() {
	echo '<input type="text" class="regular-text" name="inst" value="'. get_option("inst") .'" />' ;
}
add_action('admin_menu', 'my_options');
function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Top menu' );
	register_nav_menu( 'top2', 'Top menu 2' );
	register_nav_menu( 'bottom', 'Bottom menu' );
	register_nav_menu( 'bottom2', 'Bottom menu 2' );
}


function style_theme(){
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.min.css');
	wp_enqueue_style( 'new', get_template_directory_uri() . '/assets/css/my.css');
}
function scripts_theme(){
	wp_enqueue_script('slickJs', get_template_directory_uri() . '/assets/slick/slick.min.js');
	wp_enqueue_script('mask', get_template_directory_uri() . '/assets/js/jquery.inputmask.js');
	wp_enqueue_script('scroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js');
	
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
} 

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );

function change_wp_nav_menu( $classes, $args, $depth ) {
	foreach ( $classes as $key => $class ) {
		if ( $class == 'sub-menu' ) {
			$classes[ $key ] = 'nav-list__drop';
		}
		
	}

	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
	foreach ( $classes as $key => $class ) {
		if ( $class == 'menu-item-has-children' ) {
			$classes[ $key ] = 'nav-list__wrap';
		}
		
	}
    return $classes;
}
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action('woocommerce_after_single_product', 'woocommerce_upsell_display', 15 );
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30 );


add_action( 'woocommerce_after_single_product_summary', 'dev_designs_show_sku', 5 );
function dev_designs_show_sku(){
    global $product;
    echo '<div class="product-sku">Артикул — ' . $product->get_sku() . '</div>';
}


add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('slider', array(
		'labels'             => array(
			'name'               => 'Слайдер на главной', // Основное название типа записи
			'singular_name'      => 'Слайдер на главной', // отдельное название записи типа Book
			'add_new'            => 'Добавить слайд',
			'add_new_item'       => 'Добавить новый слайд',
			'edit_item'          => 'Редактировать слайд',
			'new_item'           => 'Новый слайд',
			'view_item'          => 'Посмотреть слайд',
			'search_items'       => 'Найти слайд',
			'not_found'          =>  'Слайдов не найдено',
			'not_found_in_trash' => 'В корзине Слайдов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Слайдер на главной'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'Услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить услугу',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          =>  'Услуг не найдено',
			'not_found_in_trash' => 'В корзине Услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
	register_post_type('team', array(
		'labels'             => array(
			'name'               => 'Сотрудники', // Основное название типа записи
			'singular_name'      => 'Сотрудник', // отдельное название записи типа Book
			'add_new'            => 'Добавить сотрудника',
			'add_new_item'       => 'Добавить нового сотрудника',
			'edit_item'          => 'Редактировать сотрудника',
			'new_item'           => 'Новый сотрудника',
			'view_item'          => 'Посмотреть сотрудника',
			'search_items'       => 'Найти сотрудника',
			'not_found'          =>  'Сотрудников не найдено',
			'not_found_in_trash' => 'В корзине сотрудников не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Сотрудники'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
	register_post_type('brands', array(
		'labels'             => array(
			'name'               => 'Бренды', // Основное название типа записи
			'singular_name'      => 'Бренд', // отдельное название записи типа Book
			'add_new'            => 'Добавить бренд',
			'add_new_item'       => 'Добавить новый бренд',
			'edit_item'          => 'Редактировать бренд',
			'new_item'           => 'Новый бренд',
			'view_item'          => 'Посмотреть бренд',
			'search_items'       => 'Найти бренд',
			'not_found'          =>  'Брендов не найдено',
			'not_found_in_trash' => 'В корзине Брендов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Бренды'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
	register_post_type('projects', array(
		'labels'             => array(
			'name'               => 'Проекты', // Основное название типа записи
			'singular_name'      => 'Проект', // отдельное название записи типа Book
			'add_new'            => 'Добавить проект',
			'add_new_item'       => 'Добавить новый проект',
			'edit_item'          => 'Редактировать проект',
			'new_item'           => 'Новый проект',
			'view_item'          => 'Посмотреть проект',
			'search_items'       => 'Найти проект',
			'not_found'          =>  'Проектов не найдено',
			'not_found_in_trash' => 'В корзине Проектов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Проекты'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
	register_post_type('news', array(
		'labels'             => array(
			'name'               => 'Новости и акции', // Основное название типа записи
			'singular_name'      => 'Новость', // отдельное название записи типа Book
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавить новую новость',
			'edit_item'          => 'Редактировать новость',
			'new_item'           => 'Новая новость',
			'view_item'          => 'Посмотреть новость',
			'search_items'       => 'Найти новость',
			'not_found'          =>  'Новостей не найдено',
			'not_found_in_trash' => 'В корзине Новостей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Новости и акции'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
}
set_post_thumbnail_size(150,150,TRUE);
function mynew_product_subcategories( $args = array() ) {
	$parentid = get_queried_object_id();
	$args = array(
	    'parent' => $parentid
	);
	$terms = get_terms( 'product_cat', $args );
	if ( $terms ) {   
	    echo '<div class="category-wrap">';
	        foreach ( $terms as $term ) {              
	            echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="category-block">';                        
	                woocommerce_subcategory_thumbnail( $term ); 
	                echo '<div class="category-block-title">';
	                        echo $term->name;
	                echo '</div>';                                                        
	            echo '</a>';                                                        
	    }
	    echo '</div>';
	}
}

add_action( 'woocommerce_before_shop_loop', 'mynew_product_subcategories', 50 );

add_filter( 'woocommerce_sale_price', 'woocommerce_custom_sales_price', 10, 2 );
function woocommerce_custom_sales_price( $price, $product ) {
$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
return $price . sprintf( __(' Экономия %s', 'woocommerce' ), $percentage . '%' );
}


add_filter('woocommerce_get_image_size_single','add_single_size',1,10);
function add_single_size($size){

    $size['width'] = 440;
    $size['height'] = 440;
    $size['crop']   = 1;
    return $size;
}
add_filter('woocommerce_get_image_size_gallery_thumbnail','add_gallery_thumbnail_size',1,10);
function add_gallery_thumbnail_size($size){

    $size['width'] = 440;
    $size['height'] = 440;
    $size['crop']   = 1;
    return $size;
}
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_loop_add_to_cart', 30 );