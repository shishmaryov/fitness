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
         <li><a data-toggle="pill" href="<?php echo get_template_directory_uri(); ?>/index.html#timing-tab<?php echo $i ?>">
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
      <div class="col-md-8 col-sm-12">
         <div class="sport-box sp1">
            <div class="sport-over">
               <span class="title">Силовой тренинг</span>
               <div class="text">От <span>2500</span> рублей в месяц</div>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/sport-item1.jpg" alt="">
         </div>
      </div>
      <div class="col-md-4 col-sm-12">
         <div class="sport-box sp3">
            <div class="sport-over">
               <span class="title">Кроссфит</span>
               <div class="text">От <span>2990</span> рублей в месяц</div>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/sport-item3.jpg" alt="">
         </div>
      </div>
      <div class="col-md-6 col-sm-12">
         <div class="sport-box sp2">
            <div class="sport-over">
               <span class="title">Кардиотренинг</span>
               <div class="text">От <span>2700</span> рублей в месяц</div>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/sport-item2.jpg" alt="">
         </div>
      </div>
      <div class="col-md-6 col-sm-12">
         <div class="sport-box sp5">
            <div class="sport-over">
               <span class="title">Боевые искусства</span>
               <div class="text">От <span>2000</span> рублей в месяц</div>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/sport-item5.jpg" alt="">
         </div>
      </div>
      <div class="col-md-4 col-sm-12">
         <div class="sport-box sp4">
            <div class="sport-over">
               <span class="title">Йога</span>
               <div class="text">От <span>8300</span> рублей в месяц</div>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/sport-item4.jpg" alt="">
         </div>
      </div>
      <div class="col-md-8 col-sm-12">
         <div class="sport-box sp6">
            <div class="sport-over">
               <span class="title">Игровые программы</span>
               <div class="text">От <span>2300</span> рублей в месяц</div>
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" class="btn main-btn"
                  data-toggle="modal">Записаться</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/sport-item6.jpg" alt="">
         </div>
      </div>
   </div>
</section>
<section id="about">
   <div class="container">
      <div class="row">
         <div class="col-sm-8">
            <h2>О нас</h2>
            <div class="after-h2">Рады Вас видеть на сайте нашего фитнес-центра!</div>
            <div class="text">
               <ul>
                  <li>Наш клуб ставит своей первоочередной целью - предоставление качественных услуг в сфере фитнеса;
                  </li>
                  <li>Еще один немаловажный аспект нашей деятельности - доступные цены, ведь, как нам кажется, каждый
                     должен иметь возможность уделить внимание своему здоровью и физической форме;</li>
                  <li>Профессионализм - для нас не пустое слово, наши тренеры и инструкторы - обладатели спортивных
                     разрядов и призеры соревнований по фитнесу, атлетике и силовым видам спорта;</li>
                  <li>Мы приемлем только индивидуальный подход и готовы составить персональный план занятий для Вас с
                     учетом особенностей и расставленных акцентов;</li>
                  <li>Также для нас важны комфорт и качество, потому наши залы оснащены только современными тренажерами,
                     в залах поддерживается оптимальная температура, а также к Вашим услугам удобные и просторные
                     душевые кабинки и раздевалки.</li>
               </ul>
            </div>
            <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-order" data-toggle="modal"
               class="btn main-btn">Заказать сейчас</a>
         </div>
         <div class="col-sm-4">
            <div class="about-item">
               <div class="num">22</div>
               <span>Клуба</span>По всей России
            </div>
            <div class="about-item">
               <div class="num">978</div>
               <span>Постоянных</span>Клиентов
            </div>
            <div class="about-item">
               <div class="num">74</div>
               <span>Лучших</span>Тренеров мира
            </div>
            <div class="about-item">
               <div class="num">980</div>
               <span>Квадратов</span>Площадь центра
            </div>
         </div>
      </div>
   </div>
</section>
<section id="review">
   <div class="container">
      <h2>Отзывы клиентов</h2>
      <div class="after-h2">Что говорят люди о нашем спортивном комплексе</div>
      <div id="review-carousel" class="owl-carousel owl-loaded owl-drag">
         <div class="owl-item ">
            <div>
               <div class="review-box">
                  <div class="re">"</div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/review-item2.jpg">
                  <div class="text">
                     Отличный и современный фитнес клуб. Оплатил услугу персонального тренера, теперь у
                     меня индивидуальная программа занятий и питания, через две недели результат на лицо. Очень доволен.
                     Буду продолжать посещать.
                  </div>
                  <div class="autor">Денис <span class="date">06.02.23</span></div>
               </div>
            </div>
         </div>
         <div class="owl-item active">
            <div>
               <div class="review-box">
                  <div class="re">"</div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/review-item1.jpg">
                  <div class="text">
                     Фитнес-клуб мне очень понравился. Современные тренажеры, инструкторы – профессионалы
                     высшего класса; удобные раздевалки, большой бассейн. Удобное месторасположение клуба.
                  </div>
                  <div class="autor">Ирина <span class="date">09.01.23</span></div>
               </div>
            </div>
         </div>
         <div class="owl-item">
            <div>
               <div class="review-box">
                  <div class="re">"</div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/review-item3.jpg">
                  <div class="text">
                     Отличный клуб! Народу не так много, сам клуб достаточно большой, сделали неплохой ремонт,
                     очередей на тренажеры нет даже в час пик. Тренеры - все приятные ребята. Хорошие массажисты есть
                     при клубе :)
                  </div>
                  <div class="autor">Алексей <span class="date">02.03.23</span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="contact">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <iframe src="<?php echo get_template_directory_uri(); ?>/index_files/saved_resource.html" frameborder="0"
               allowfullscreen="true" width="100%" height="436px" style="display: block;"></iframe>
            <div class="contact-card">
               <h2>Наши контакты</h2>
               <div class="contact-item"><span>Адрес:</span>Москва, ул. Большая, д.10</div>
               <div class="contact-item"><span>Телефон:</span> <a href="tel:+74950000000">+7 (495) 000-00-00</a></div>
               <div class="contact-item"><span>Email:</span> <a href="mailto:info@mail.ru">info@mail.ru</a></div>
               <div class="contact-item"><span>Часы роботы:</span>ПН-ПТ: 8:00 - 23:00<br>Сб-Вс: 8:00 - 21:00</div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>