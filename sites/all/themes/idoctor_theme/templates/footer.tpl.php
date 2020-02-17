


<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">

   

    <!-- первый столбец - через БЛОК  -->
    <!-- второй столбец - через МЕНЮ  -->
    <!-- третий столбец - через МЕНЮ  -->
    <!-- четвертый столбец - через БЛОК  -->

    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>



 <!-- футер -->
<div class="footer">
  <div class="container">
    <div class="row d-flex j-content-between footerContent a-items-flex-start">
      <div class="col-lg-3 col-md-6 addressWorkTime item">
        <div class="address">
          <p class="title">Адрес:</p>
          <p class="content">г. Томск, пер. 1905 года, д.18</p>
          <p class="find-us green"><a href="#maps" class="green">Как ДОБРАТЬСЯ?</a></p>
        </div>
        <div class="workTime">
          <p class="title">Часы работы:</p>
          <p class="content">Пн - Пт с 10:00 до 19:00,<br>
          Сб с 11:00 до 16:00</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 leftList list item">
        <ul>
          <li><a href="">О компании</a></li>
          <li><a href="">Реквизиты</a></li>
          <li><a href="">Вакансии</a></li>
          <li><a href="">Гарантия качества</a></li>
          <li><a href="">Вакансии</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 rightList list item">
        <ul>
          <li><a href="">О компании</a></li>
          <li><a href="">Реквизиты</a></li>
          <li><a href="">Вакансии</a></li>
          <li><a href="">Гарантия качества</a></li>
          <li><a href="">Вакансии</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 social item">
        <p class="title">Наши соцсети:</p>
        <div class="socialDiv d-flex j-content-between">
          <div class="socialItem vkIcon"><a rel="nofollow" href="https://vk.com/" target="_blank"></a></div>
          <div class="socialItem fbIcon"><a rel="nofollow" href="https://facebook.com/" target="_blank"></a></div>
          <div class="socialItem instaIcon"><a rel="nofollow" href="https://instagram.com/" target="_blank"></a></div>
        </div>
        <div class="copy">Copyright © iDoctor 2019</div>
      </div>        
    </div>
  </div>
</div>

<script src="\sites\all\themes\idoctor_theme\js\iDoctor.js"></script>