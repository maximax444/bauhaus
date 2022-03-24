 <footer class="footer">
  <div class="footer-wrap">
   <a href="/" class="footer-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="" />
   </a>
   <div class="footer-menu">
    <?php 
      wp_nav_menu( [
        'theme_location'            => 'bottom', 
        'container'       => false, 
        'menu_class'      => 'footer-menu__block', 
        'items_wrap'      => '<div class="footer-menu__block">%3$s</div>'
      ] );
     ?>
    <?php 
      wp_nav_menu( [
        'theme_location'            => 'bottom2', 
        'container'       => false, 
        'menu_class'      => 'footer-menu__block', 
        'items_wrap'      => '<div class="footer-menu__block">%3$s</div>'
      ] );
     ?>

    </div> 
   <div class="footer-right">
    <div class="footer-right__content">
     <a href="" class="footer-right__link footer-right-polit">Политика конфиденциальности</a>
     <a href="" class="footer-right__link footer-right-rekv">Реквизиты</a>
     <div class="footer-right__text">
      Разработка сайта — <a href="">leadme.agency</a>
     </div>
    </div>
    <div class="footer-soc">
     <a href="<?php echo get_option('fb'); ?>" class="footer-soc__block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-b.png" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png" alt="" />
     </a>
     <a href="<?php echo get_option('inst'); ?>" class="footer-soc__block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-b.png" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst.png" alt="" />
     </a>
    </div>
   </div>
  </div>
 </footer>
 </div>
 <div class="overlay overlay-manager">
  <div class="popup popup-manager">
   <div class="popup-close">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
   </div>
   <div class="popup-manager-title">Отправьте свой номер менеджеру</div>
   <div class="popup-manager-subtitle">
    Для того, чтобы он смог вам перезвонить и проконсультировать
   </div>
   <form action="" class="popup-manager-form popup-manager-form1">
    <input type="tel" name="manager_phone" placeholder="Введите Ваш номер телефона" required />
    <button class="btn">Отправить номер менеджеру</button>
   </form>
  </div>
 </div>
 <div class="overlay overlay-manager2">
  <div class="popup popup-manager">
   <div class="popup-close">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
   </div>
   <div class="popup-manager-title">Отправьте свой номер менеджеру</div>
   <div class="popup-manager-subtitle">
    Для того, чтобы он смог вам перезвонить и проконсультировать
   </div>
   <form action="" class="popup-manager-form popup-manager-form2">
    <input type="tel" name="manager_phone" placeholder="Введите Ваш номер телефона" required />
    <button class="btn">Отправить номер менеджеру</button>
   </form>
  </div>
 </div>
 <div class="overlay overlay-manager3">
  <div class="popup popup-manager">
   <div class="popup-close">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
   </div>
   <div class="popup-manager-title">Отправьте свой номер менеджеру</div>
   <div class="popup-manager-subtitle">
    Для того, чтобы он смог вам перезвонить и проконсультировать
   </div>
   <form action="" class="popup-manager-form popup-manager-form3">
    <input type="tel" name="manager_phone" placeholder="Введите Ваш номер телефона" required />
    <button class="btn">Отправить номер менеджеру</button>
   </form>
  </div>
 </div>
 <div class="overlay overlay-manager4">
  <div class="popup popup-manager">
   <div class="popup-close">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
   </div>
   <div class="popup-manager-title">Отправьте свой номер менеджеру</div>
   <div class="popup-manager-subtitle">
    Для того, чтобы он смог вам перезвонить и проконсультировать
   </div>
   <form action="" class="popup-manager-form popup-manager-form4">
    <input type="tel" name="manager_phone" placeholder="Введите Ваш номер телефона" required />
    <button class="btn">Отправить номер менеджеру</button>
   </form>
  </div>
 </div>
 <div class="overlay overlay-manager5">
  <div class="popup popup-manager">
   <div class="popup-close">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
   </div>
   <div class="popup-manager-title">Отправьте свой номер менеджеру</div>
   <div class="popup-manager-subtitle">
    Для того, чтобы он смог вам перезвонить и проконсультировать
   </div>
   <form action="" class="popup-manager-form popup-manager-form5">
    <input type="tel" name="manager_phone" placeholder="Введите Ваш номер телефона" required />
    <button class="btn">Отправить номер менеджеру</button>
   </form>
  </div>
 </div>
 <div class="overlay overlay-polit">
   <div class="popup popup-polit">
    <div class="popup-close">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
    </div>
    <div class="popup-polit-content">
     <div class="popup-polit-title">Политика конфиденциальности</div>
     <div class="popup-polit-text">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
      Lorem Ipsum

      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
      Lorem Ipsum

      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
      Lorem Ipsum

      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap
     </div>
    </div>
   </div>
  </div>
  <div class="overlay overlay-rekv">
   <div class="popup popup-rekv">
    <div class="popup-close">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
    </div>
    <div class="popup-rekv-title">Реквизиты</div>
    <div class="popup-rekv-block">
     <span>Частное торгово-производственное унитарное предприятие</span> «Баухауз Концепт»
    </div>
    <div class="popup-rekv-block">УНП 11212313213</div>
    <div class="popup-rekv-block">Р/C 456989894512131321321</div>
    <div class="popup-rekv-block">Юр. Адрес, Москвина 6</div>
    <div class="popup-rekv-yellow"></div>
    <div class="popup-rekv-img">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rekv-img.png" alt="">
    </div>
   </div>
  </div>
 <div class="overlay overlay-thx">
  <div class="popup popup-thx">
   <div class="popup-close">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close.png" alt="" />
   </div>
   <div class="popup-thx-img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-thx.png" alt="" />
   </div>
   <div class="popup-thx-title">
    Спасибо! <br />
    Ваша заявка принята
   </div>
   <div class="popup-thx-text">
    В рабочее время менеджер перезвонит вам в течение 5 минут.
   </div>
  </div>
 </div>

 <?php wp_footer(); ?>
</body>

</html>