<?php
/*
Template Name: Шаблон "Контакты"
*/
?>

<?php get_header(); ?>

<section id="contact">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
         <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab52fe6fb537785acbe1cba6f0578de8a03f08afafe7a118811975f9de16b1e00&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            <div class="contact-card">
               <h2>Наши контакты</h2>
               <div class="contact-item"><span>Адрес:</span>Москва, ул. Большая, д.10</div>
               <div class="contact-item"><span>Телефон:</span> <a href="<?php the_field('site_phone', 'options'); ?>"><?php the_field('site_phone', 'options'); ?></a></div>
               <div class="contact-item"><span>Email:</span> <a href="mailto:<?php the_field('site_mail', 'options'); ?>"><?php the_field('site_mail', 'options'); ?></a></div>
               <div class="contact-item"><span>Часы работы</span> <br> <?php the_field('site_worktime', 'options'); ?></div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_Footer(); ?>