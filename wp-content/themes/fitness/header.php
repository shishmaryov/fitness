<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitness
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
	 	<meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Это клуб, который органично вмещает в себе фитнес зоны для тренировок в классических стандартах.">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pe-icon-7-stroke.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
			<?php wp_head(); ?>
		</head>
		<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="/../">
               <img src="<?php the_field('site_logo', 'options'); ?>" alt="">
               </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#timing" class="animate-scroll">Расписание</a></li>
                  <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#sport" class="animate-scroll">Занятия</a></li>
                  <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#about" class="animate-scroll">О нас</a></li>
                  <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#review" class="animate-scroll">Отзывы</a></li>
                  <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#contact" class="animate-scroll">Контакты</a></li>
                  <li class="phone">
                     <a href="tel:<?php the_field('site_logo', 'options'); ?>"><?php the_field('site_phone', 'options'); ?></a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
