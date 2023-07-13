<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitness
 */

?>

<footer>
         <div class="container">
            <div class="footer-title">Фитнес центр</div>
            <div class="footer-action">
               <a href="<?php echo get_template_directory_uri(); ?>/index.html#modal-call" data-toggle="modal" class="btn main-btn">Заказать звонок</a>
               <div class="contact">
                  <span class="adress">Москва, ул. Большая, д.10</span>
                  <a href="tel:+74950000000">+7 (495) 000-00-00</a>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="copyright">© Все права защищены.
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <a href="index.html#modal-privacy" data-toggle="modal" class="link-privacy">Политика конфиденциальности</a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div id="modal-order" class="modal fade" role="dialog">
         <div class="modal-dialog call_modal">
            <div class="modal-content">
               <form id="form-order" action="thankyou.php" method="post">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Записаться на занятие</h4>
                     <p class="after-modal-title text-center">Оставьте свои данные и наши менеджеры свяжутся с вами для уточнения деталей</p>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <input type="text" name="Имя" class="form-control" placeholder="Ваше имя" required="">
                     </div>
                     <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Ваш E-mail" required="">
                     </div>
                     <div class="form-group">
                        <input type="text" name="Телефон" class="form-control phone-mask" placeholder="+7 (999) 999-99-99" required="">
                     </div>
                     <input type="hidden" name="Форма" value="Оформление записи на занятие">
                     <button type="submit" class="btn main-btn form-btn">Перезвоните мне</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div id="modal-call" class="modal fade" role="dialog">
         <div class="modal-dialog call_modal">
            <div class="modal-content">
               <form id="form-call" action="thankyou.php" method="post">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Заказать обратный звонок</h4>
                     <p class="after-modal-title">Оставьте свой номер телефона и наши менеджеры свяжутся с вами в ближайшее время</p>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <input type="text" name="Телефон" class="form-control phone-mask" placeholder="+7 (999) 999-99-99" required="">
                     </div>
                     <input type="hidden" name="Форма" value="Заказ обратного звонка">
                     <button type="submit" class="btn main-btn form-btn">Перезвоните мне</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div id="modal-privacy" class="modal fade" role="dialog">
         <div class="modal-dialog privacy_modal modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title">Политика конфиденциальности</h4>
               </div>
               <div class="modal-body">
                  <div class="privacy_text">
                     <h4>1.Сбор информации</h4>
                     <p>Мы собираем информацию, когда вы регистрируетесь на сайте, заходите на свой аккаунт, совершаете покупку, участвуете в акции и/или выходите из аккаунта. Информация включает ваше имя, адрес электронной почты, номер телефона и данные
                        по кредитной карте. Кроме того, мы автоматически регистрируем ваш компьютер и браузер, включая IP, ПО и аппаратные данные, а также адрес запрашиваемой страницы.
                     </p>
                     <h4>2. Использование информации</h4>
                     <p>Информация, которую мы получаем от вас, может быть использована, чтобы:
                     </p>
                     <ul>
                        <li>Сделать услуги соответствующими вашим индивидуальным запросам</li>
                        <li>Предложить персонализированную рекламу</li>
                        <li>Улучшить наш сайт</li>
                        <li>Улучшить систему поддержки пользователей</li>
                        <li>Связаться с вами по электронной почте</li>
                        <li>Устроить акцию, конкурс или организовать исследование</li>
                     </ul>
                     <p></p>
                     <h4>3. Защита личных данных при онлайн-продажах</h4>
                     <p>Мы являемся единственным владельцем информации, собранной на данном сайте. Ваши личные данные не будут проданы или каким-либо образом переданы третьим лицам по каким-либо причинам, за исключением необходимых данных для выполнения
                        запроса или транзакции, например, при отправке заказа.
                     </p>
                     <h4>4. Раскрытие информации третьим лицам</h4>
                     <p>Мы не продаем, не обмениваем и не передаем личные данные сторонним компаниям. Это не относится к надежным компаниям, которые помогают нам в работе сайта и ведении бизнеса при условии, что они соглашаются сохранять конфиденциальность
                        информации.
                     </p>
                     <p>Мы готовы делиться информацией, чтобы предотвратить преступления или помочь в их расследовании, если речь идет о подозрении на мошенничество, действиях, физически угрожающих безопасности людей, нарушениях правил использования или
                        в случаях, когда это предусмотрено законом.
                     </p>
                     <p>Неконфиденциальная информация может быть предоставлена другим компаниям в целях маркетинга, рекламы и т.д.</p>
                     <h4>5. Защита информации</h4>
                     <p>Мы используем различные средства безопасности, чтобы гарантировать сохранность ваших личных данных. К вашим услугам самое современное шифрование. VpnMentor также защищает ваши данные в режиме оффлайн. Только те сотрудники, которые
                        работают с конкретным заданием (например, техническая поддержка или проведение оплаты) получают доступ к личным данным. Сервера и компьютеры, на которых записана конфиденциальная информация, находятся в безопасном окружении.
                     </p>
                     <p>
                        <b>Использование файлов «cookie»</b>
                     </p>
                     <p>Наши файлы «cookie» используются для улучшения доступа к сайту и определения повторных посещений. Кроме того, они позволяют отследить наиболее интересующие запросы. Файлы «cookie» не передают никакую конфиденциальную информацию.</p>
                     <h4>6. Отказ от подписки</h4>
                     <p>Мы используем электронную почту, чтобы предоставить вам информацию по вашему заказу, новостям компании, информации по продуктам и т.д. Если вы желаете отказаться от подписки, в каждом письме даны подробные инструкции, как вы можете
                        это сделать.
                     </p>
                     <h4>7. Согласие</h4>
                     <p>Пользуясь услугами нашего сайта, вы автоматически соглашаетесь с нашей политикой конфиденциальности.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         window.addEventListener('load', () => {
            document.querySelector('.nav-pills > li:first-child').classList.add('active');
            document.querySelector('#timing-tab1').classList.add('active');
         });
         </script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
   </body>
</html>

<?php wp_footer(); ?>

</body>
</html>
