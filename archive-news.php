<?php get_header(); ?>
<div class="blog">
   <div class="blog-left">
    <div class="blog-left-wrap">
     <div class="blog-left-red">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-left-red.png" alt="" />
     </div>
     <div class="blog-left-blue">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-left-blue.png" alt="" />
     </div>
    </div>
   </div>
   <div class="blog-right">
    <div class="blog-right-blue">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-right-blue.png" alt="" />
    </div>
    <div class="blog-right-yellow">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-right-yellow.png" alt="" />
    </div>
   </div>
   <div class="container">
    <div class="breadcrumbs">
     <a href="/">Главная</a> /
     <a class="current">Блог</a>
    </div>
    <div class="blog-title">Будьте в курсе событий</div>
    <div class="blog-wrap">
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
	<div class="blog-block" style="background-image: url('<?php the_field('thumb'); ?>');">
	 <div class="blog-name"><?php the_title(); ?>
	 </div>
	 <a href="<?php echo get_the_permalink(); ?>" class="blog-btn btn">подробнее</a>
	</div>


      <?php } /* конец while */ ?>
      <?php echo get_the_posts_pagination(  ); ?>

    <?php
    } // конец if
    else 
      echo "<h2>Записей нет.</h2>"; ?>
    
    </div>
   </div>
  </div>
<?php get_footer(); ?>