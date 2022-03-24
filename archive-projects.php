<?php get_header(); ?>
<div class="projects">
   <div class="projects-left">
    <div class="projects-left-wrap">
     <div class="projects-left-yellow">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects-left1.png" alt="">
     </div>
     <div class="projects-left-red">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects-left2.png" alt="">
     </div>
    </div>
   </div>
   <div class="projects-right">
    <div class="projects-right-wrap">
     <div class="projects-right-blue">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects-right1.png" alt="">
     </div>
     <div class="projects-right-red">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects-right2.png" alt="">
     </div>
    </div>
   </div>
   <div class="container">
    <div class="breadcrumbs">
     <a href="/">Главная</a> /
     <a class="current">Проекты</a>
    </div>
    <div class="projects-title">Участвовали и помогли <br> реализовать в 300+ <br> проектах</div>
    <div class="projectsh-wrap projects-wrap">
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

      <a href="<?php echo get_the_permalink(); ?>" class="projectsh-block">
       <div class="projectsh-img">
        <img src="<?php the_field('thumb'); ?>" alt="" />
       </div>
       <div class="projectsh-name"><?php the_title(); ?></div>
       <div class="projectsh-descr">
        <span>описание проекта</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-arrow.png" alt="" />
       </div>
      </a>

      <?php } /* конец while */ ?>

      <div class="navigation">
        <div class="next-posts"><?php next_posts_link(); ?></div>
        <div class="prev-posts"><?php previous_posts_link(); ?></div>
      </div>

    <?php
    } // конец if
    else 
      echo "<h2>Записей нет.</h2>"; ?>

    </div>
   </div>
  </div>
<?php get_footer(); ?>