<?php
/*
Template Name: Шаблон "Главная страница"
*/
?>

<?php get_header(); ?>
<style>
   header {
      background-image: url(<?php the_field('main_img');
      ?>);
   }
</style>
<header>
   <div class="container">
      <div class="header-box">
         <h1><?php the_field('main_title'); ?></h1>
         <div class="after-h1"><?php the_field('main_subtitle'); ?></div>
         <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-call" data-toggle="modal"
            class="btn main-btn">Перезвоните мне</a>
      </div>
      <div class="header-form">
         <div id="clockdiv">
            <div>
               <span class="days">10</span>
               <div class="smalltext">Дней</div>
            </div>
            <div>
               <span class="hours">23</span>
               <div class="smalltext">Часов</div>
            </div>
            <div>
               <span class="minutes">58</span>
               <div class="smalltext">Минут</div>
            </div>
            <div>
               <span class="seconds">03</span>
               <div class="smalltext">Секунд</div>
            </div>
         </div>
         <?php if( have_rows('main_g1') ): ?>
         <?php while( have_rows('main_g1') ): the_row(); ?>
         <div class="header-form-text">
            <h3><?php the_sub_field('main_g1_title'); ?></h3>
            <div class="text"><?php the_sub_field('main_g1_subtitle'); ?></div>
            <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" data-toggle="modal"><span
                  class="pe-7s-call"></span></a>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</header>
<section id="timing">
   <div class="container">
      <h2><?php the_field('sec2_title') ?></h2>
      <div class="after-h2"><?php the_field('sec2_subtitle') ?></div>
      <ul class="nav nav-pills">
         <?php if(get_field('sec2_repeater')): $i=0; ?>
         <?php while(has_sub_field('sec2_repeater')) : $i++; ?>
         <li><a data-toggle="pill"
               href="<?php echo get_template_directory_uri(); ?>/index.html#timing-tab<?php echo $i ?>">
               <?php the_sub_field('sec2_repeater_day');?>
            </a></li>
         <?php endwhile; ?>
         <?php endif; ?>
      </ul>
      <div class="tab-content">
         <?php if(get_field('sec2_repeater')): $i=0;?>
         <?php while(has_sub_field('sec2_repeater')) : $i++;?>
         <div id="timing-tab<?php echo $i; ?>" class="tab-pane fade in">
            <?php if(get_sub_field('sec2_repeater_repeater')): ?>
            <?php while(has_sub_field('sec2_repeater_repeater')) : ?>
            <div class="time-box">
               <div class="time"><?php the_sub_field('sec2_repeater_g_time'); ?></div>
               <div class="title"><?php the_sub_field('sec2_repeater_g_title'); ?></div>
               <div class="name"><?php the_sub_field('sec2_repeater_g_subtitle'); ?></div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<section id="sale">
   <style>
      #sale {
         background-image: url('<?php the_field('sec3_img'); ?>');
      }
   </style>
   <div class="container">
      <h2><?php the_field('sec3_title') ?></h2>
      <div class="after-h2"><?php the_field('sec3_subtitle') ?></div>
      <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" data-toggle="modal"
         class="btn main-btn">Записаться сейчас</a>
   </div>
</section>
<section id="sport">
   <div class="container">
      <?php
      $args = array(
         'post_type' => 'post',
         'post_status' => 'publish',
         'posts_per_page' => 6
      );
      $query = new WP_Query($args);
      if ($query->have_posts()):
      ?>

      <?php while ($query->have_posts()) : $query->the_post(); ?>
      <div class="col-md-6 col-sm-12">
         <div class="sport-box sp6">
            <div class="sport-over">
               <span class="title"><?php the_title(); ?></span>
               <div class="text">От <span><?php the_field('single_price'); ?></span> рублей в месяц</div>
               <a href="<?php the_permalink(); ?>" class="full-link"></a>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php the_field('single_img'); ?>" alt="">
         </div>
      </div>
         <?php
         endwhile;
         wp_reset_postdata();
         ?>
      <?php endif; ?>
   </div>
</section>
<section id="about">
   <div class="container">
      <div class="row">
         <div class="col-sm-8">
            <h2><?php the_field('sec4_title');?></h2>
            <div class="after-h2"><?php the_field('sec4_subtitle');?></div>
            <div class="text">
               <ul>
                  <?php if(get_field('sec4_repeater')): ?>
                  <?php while(has_sub_field('sec4_repeater')) : ?>
                  <li><?php the_sub_field('sec4_repeater_text'); ?></li>
                  <?php endwhile; ?>
                  <?php endif; ?>
               </ul>
            </div>
            <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" data-toggle="modal"
               class="btn main-btn">Заказать сейчас</a>
         </div>
         <div class="col-sm-4">
         <?php if(get_field('sec4_repeater_2')): ?>
            <?php while(has_sub_field('sec4_repeater_2')) : ?>
            <div class="about-item">
               <div class="num"><?php the_sub_field('sec4_repeater_2_sum') ?></div>
               <span><?php the_sub_field('sec4_repeater_2_title') ?></span><?php the_sub_field('sec4_repeater_2_info') ?>
            </div>
            <?php endwhile; ?>
         <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<section id="review">
   <div class="container">
      <h2><?php the_field('sec5_repeater_title') ?></h2>
      <div class="after-h2">Что говорят люди о нашем спортивном комплексе</div>
      <div id="review-carousel" class="owl-carousel owl-loaded owl-drag">
      <?php if(get_field('sec5_repeater')): ?>
            <?php while(has_sub_field('sec5_repeater')) : ?>
         <div class="owl-item ">
            <div>
               <div class="review-box">
                  <div class="re">"</div>
                  <img src="<?php the_sub_field('sec5_repeater_img'); ?>">
                  <div class="text">
                     <?php the_sub_field('sec5_repeater_info'); ?>
                  </div>
                  <div class="autor"><?php the_sub_field('sec5_repeater_name'); ?><span class="date"><?php the_sub_field('sec5_repeater_date'); ?></span></div>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php get_footer(); ?>