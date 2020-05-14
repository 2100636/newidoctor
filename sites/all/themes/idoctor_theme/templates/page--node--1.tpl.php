
<?php require_once 'header.tpl.php'; ?>


<!-- Шпапка -->
<div class="header">
  <div class="headerBottomBanner">
    <div class="bannerContent d-flex j-content-between a-items-flex-start">
      <div class="container">
        <div class="leftBanner">
          <div class="wrapper">
            <div class="heading">
              ремонт СМАРТФОНОВ в томске
            </div>
            <p class="title">от 390 руб за 15 минут</p>
            <ul>
              <li>Работаем в Томске уже 8 лет!</li>
              <li>Сертифицированное оборудование, не имеющее аналогов в Томске</li>
              <li>Оригинальные запчасти Apple</li>
              <li>Гарантия  от 1 месяца</li>
            </ul>
            <div class="phoneBanner d-flex j-content-between">
              <p class="phone">+7 (382) 33-22-77</p>
              <a class="btn btn-warning" data-toggle="modal" data-target="#headerModal">записаться на ремонт</a>
            </div>
          </div>
        </div>
      </div>
      <link href="/sites/all/themes/idoctor_theme/css/twentytwenty.css" rel="stylesheet" type="text/css" />
      <script src="/sites/all/themes/idoctor_theme/js/jquery.event.move.js"></script>
      <script src="/sites/all/themes/idoctor_theme/js/jquery.twentytwenty.js"></script>
      <div class="rightBanner">
        <div class="twentyBlock twentyBlockLaptop twentytwenty-container">
          <img src="/sites/all/themes/idoctor_theme/image/before3.jpg" alt="" class="twenty-laptop">
          <img src="/sites/all/themes/idoctor_theme/image/after3.jpg" alt="" class="twenty-laptop">
        </div>  
        <div class="twentyBlock twentyBlockMobile twentytwenty-container">
          <img src="/sites/all/themes/idoctor_theme/image/after-mobile.jpg" alt="" class="twenty-mobile">
          <img src="/sites/all/themes/idoctor_theme/image/before-mobile.jpg" alt="" class="twenty-mobile">
        </div>
      </div>
    </div>
  </div>
</div>





<!-- крупнейший сервисный центр ...  -->
<div class="serviceCenter">
  <div class="container2">
    <div class="heading">крупнейший сервисный центр по ремонту iphone, samsung, xiaomi в томске</div>
    <div class="row d-flex j-content-between serviceContent">
      <div class="col-md-3 serviceItem">
        <p>Один из первых сервисных центров в томске, работаем <b>с 2011 года</b></p>
      </div>
      <div class="col-md-3 serviceItem">
        <p>Выполняем сложный ремонт мобильной техники,<br> опыт более <b>40000 ремонтов</b></p>
      </div>
      <div class="col-md-3 serviceItem">
        <p><b>170 единиц</b> современного оборудования, не имеющего аналогов в Томске</p>
      </div>
    </div>
  </div>
</div>





<!-- оборудование -->
<div class="equipment">
  <div class="container">
    <?php 
    $block = block_load('views', 'equipments-block');
    $blocks = _block_render_blocks(array($block));
    $blocks_build = _block_get_renderable_array($blocks);
    echo drupal_render($blocks_build);
    ?>
  </div>
</div>






<!-- низкие цены на ремонт ...  -->
<div class="lowPrices">
  <div class="container3">
    <div class="heading div-heading">
      Низкие цены на ремонт iphone в томске
    </div>
    <p class="heading">выберите модель вашего устройства</p>

    <div class="row d-flex j-content-around topModels">

      <div class="col-md-4 topModelsItem devices" id="device_iphone">
        <p class="model">IPHONE</p>
      </div>

      <div class="col-md-4 topModelsItem devices" id="device_ipad">
        <p class="model">IPAD</p>
      </div>

      <div class="col-md-4 topModelsItem devices" id="device_macbook">
        <p class="model">MACBOOK</p>
      </div>

    </div>

    <div class="row d-flex j-content-between bottomModels">

      <div class="col-md-3 bottomModelsItem devices" id="device_samsung">
        <p class="model">SAMSUNG</p>
      </div>

      <div class="col-md-3 bottomModelsItem devices" id="device_honor">
        <p class="model">HONOR</p>
      </div>

      <div class="col-md-3 bottomModelsItem devices" id="device_huawei">
        <p class="model">HUAWEI</p>
      </div>

      <div class="col-md-3 bottomModelsItem devices" id="device_meizu">
        <p class="model">MEIZU</p>
      </div>

      <div class="col-md-3 bottomModelsItem devices" id="device_xiaomi">
        <p class="model">XIAOMI</p>
      </div>

    </div>
  </div>
  
  <div class="mobileBlock">
    <div class="mobileBlockContent">
      <ul class="mobileLeft">
        <li id="device_iphone">iphone</li>
        <li id="device_ipad">IPAD</li>
        <li id="device_macbook">MACBOOK</li>
        <li id="device_xiaomi">XIAOMI</li>
        <li id="device_honor">HONOR</li>       
      </ul>
      <ul class="mobileRight">
        <li id="device_huawei">HUAWEI</li>
        <li id="device_meizu">MEIZU</li>
        <li id="device_samsung">SAMSUNG</li>
        <li id="device_oppo">Oppo</li>
      </ul>
    </div>
    <div class="chooseBlock">
      <p class="choose">Выберите устройство</p>
    </div>
  </div>

  <div class="container" id="dinamicBlock1">
    <div class="line"></div>
  </div>

  <div class="container3">
    <div class="row buttons" id="dinamicBlock2">
      <div class="models_iphone models hidden_block_models">
        <a href="/node/71" class="btn btn-primary">iphone 4</a>
        <a href="/node/71" class="btn btn-primary">iphone 4s</a>
        <a href="/node/72" class="btn btn-primary">iphone 5</a>
        <a href="/node/72" class="btn btn-primary">iphone 5c</a>
        <a href="/node/72" class="btn btn-primary">iphone 5s</a>
        <a class="btn btn-primary">iphone 6</a>
        <a class="btn btn-primary">iphone 6 Plus</a>
        <a class="btn btn-primary">iphone 6s</a>
        <a class="btn btn-primary">iphone 6s Plus</a>
        <a class="btn btn-primary">iphone SE</a>
        <a href="/node/60" class="btn btn-primary">iphone 7</a>
        <a href="/node/60" class="btn btn-primary">iphone 7 Plus</a>
        <a href="/node/59" class="btn btn-primary">iphone 8</a>
        <a href="/node/59" class="btn btn-primary">iphone 8 Plus</a>
        <a class="btn btn-primary">iphone X</a>
        <a class="btn btn-primary">iphone XS</a>
        <a class="btn btn-primary">iphone XS Max</a>
        <a class="btn btn-primary">iphone XR</a>
        <a class="btn btn-primary">iphone 11</a>
        <a class="btn btn-primary">iphone 11 PRO</a>
        <a class="btn btn-primary">iphone 11 PRO Max</a>
      </div>

      <div class="models_ipad models hidden_block_models">
        <a class="btn btn-primary">ipad 2</a>
        <a class="btn btn-primary">ipad 3</a>
        <a class="btn btn-primary">ipad 4</a>
        <a class="btn btn-primary">ipad mini</a>
        <a class="btn btn-primary">ipad mini 2</a>
        <a class="btn btn-primary">ipad mini 3</a>
        <a class="btn btn-primary">ipad mini 4</a>
        <a class="btn btn-primary">ipad air</a>
        <a class="btn btn-primary">ipad air 2</a>
        <a class="btn btn-primary">ipad air pro</a>
      </div>

      <div class="models_macbook models hidden_block_models">
        <a class="btn btn-primary">MacBook Air 11"</a>
        <a class="btn btn-primary">MacBook Air 13"</a>
        <a class="btn btn-primary">MacBook Air 15"</a>
      </div>

      <div class="models_apple_watch models hidden_block_models">
        <a class="btn btn-primary">Apple Watch Series 1</a>
        <a class="btn btn-primary">Apple Watch Series 2</a>
        <a class="btn btn-primary">Apple Watch Series 3</a>
        <a class="btn btn-primary">Apple Watch Series 4</a>
        <a class="btn btn-primary">Apple Watch Series 5</a>
      </div>

      <div class="models_xiaomi models hidden_block_models">
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi A1</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi A2 Lite</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi 5, 5S, 5S Plus</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi Mix 2</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi Note, Note 2</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi 4, 4i, 4C, 6</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi Note 2 Prime</a>
        <a href="/node/71" class="btn btn-primary">Xaiomi Redmi 3, 3S</a>
        <a href="/node/71" class="btn btn-primary">Xaiomi Redmi 4, 4A, 4X</a>
        <a href="/node/71" class="btn btn-primary">Xaiomi Redmi 5A, 5 Plus</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi Note 4, 4x</a>
        <a href="/node/71" class="btn btn-primary">Xaiomi Redmi Note 5A</a>
        <a href="/node/71" class="btn btn-primary">Xaiomi Redmi 6, 6A</a>
        <a href="/node/71" class="btn btn-primary">Xaiomi Redmi 7, 7A</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi Note 3, 3 PRO</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi Note 5, 5 Lite</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi Note 5 PRO, 6 Pro</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi S2</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi 8, 8 Lite, 8 Pro</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi 9, 9 Lite, 9T Pro</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi 8se</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Redmi Note 7</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Black Shark</a>
        <a href="/node/71" class="btn btn-primary">Xiaomi Mi Max, Max 2</a>
      </div>

      <div class="models_honor models hidden_block_models">
        <a href="/node/71" class="btn btn-primary">Honor 9, 9 Lite</a>
        <a href="/node/71" class="btn btn-primary">Honor 8, 8 Lite, 8 Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 5a, 6A</a>
        <a href="/node/71" class="btn btn-primary">Honor 3X, 4x, 5x, 6x, 7x</a>
        <a href="/node/71" class="btn btn-primary">Honor 7C, 7c Lite, 7c Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 7A, 7a Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 3C Lite</a>
        <a href="/node/71" class="btn btn-primary">Honor 4C Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 8C</a>
        <a href="/node/71" class="btn btn-primary">Honor 5C</a>
        <a href="/node/71" class="btn btn-primary">Honor View 10</a>
        <a href="/node/71" class="btn btn-primary">Honor Play</a>
        <a href="/node/71" class="btn btn-primary">Honor Note 8</a>
        <a href="/node/71" class="btn btn-primary">Honor Magic 2</a>
        <a href="/node/71" class="btn btn-primary">Honor 8X, 8x Max</a>
        <a href="/node/71" class="btn btn-primary">Honor 6, 6 Plus</a>
        <a href="/node/71" class="btn btn-primary">Honor 10, 10 Lite</a>
        <a href="/node/71" class="btn btn-primary">Honor 7, 7 Lite, 7 Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 6C, 6C Lite, 6c Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 10i</a>
        <a href="/node/71" class="btn btn-primary">Honor View 20</a>
        <a href="/node/71" class="btn btn-primary">Honor 20, 20 Pro</a>
        <a href="/node/71" class="btn btn-primary">Honor 8A, 8a Pro,8a Lite</a>
      </div>

      <div class="models_huawei models hidden_block_models">
        <a href="/node/71" class="btn btn-primary">Huawei Y5 II</a>
      </div>

      <div class="models_meizu models hidden_block_models">
        <a href="/node/71" class="btn btn-primary">Meizu MX2</a>
      </div>

      <div class="models_samsung models hidden_block_models">
        <a href="/node/71" class="btn btn-primary">Samsung Galaxy A9</a>
      </div>

    </div>
  </div>
</div>





<!-- БЛОК комплектующие высокого качества -->
<div class="completing">
  <div class="container">
    <div class="heading div-heading">комплектующие высокого качества!</div>
    <div class="completingContent d-flex j-content-between">
      <div class="left">
        <ul>
          <li>
            <p class="title">дисплеи с оригинальной матрицей</p>
            <p class="content">Дисплеи, произведенные на заводах Apple, Samsung и Xiaomi, с восстановленным стеклом. Оригинальная сочность и цветопередача изображения, не идет в сравнение с некачественными китайскими аналогами “Класса ориджинал”</p>
          </li>
          <li>
            <p class="title">аккумуляторые батареи</p>
            <p class="content">За 8 лет работы, мы научились выбирать поставщиков с действительно новыми батареями, на которые даем гарантию 6 месяцев</p>
          </li>
          <li>
            <p class="title">ОБЯЗАТЕЛЬНАЯ ПРОВЕРКА</p>
            <p class="content">Все запчасти и комплектующие проходят обязательную проверку, и тестируются на 100% работоспособность преждем, чем их установят на Ваше устройство</p>
          </li>
        </ul>
      </div>
      <div class="right">
        <iframe src="https://www.youtube.com/embed/idEsr8ph0r4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>





<!-- СКИДКИ И АКЦИИ -->
<div class="discounts">
  <!-- <div class="discounts" data-toggle="modal" data-target="#discountModal"> -->
    <div class="container">
      <?php 
      $block = block_load('views', 'promotions-block');
      $blocks = _block_render_blocks(array($block));
      $blocks_build = _block_get_renderable_array($blocks);
      echo drupal_render($blocks_build);
      ?>
    </div>
  </div>

  <script>
    (function($) {
      $('.discounts .container .view-promotions .views-row').on('click', function() {
        $(this).attr('data-toggle', 'modal').attr('data-target', '#discountModal');
        var text = $(this).find('.views-field-field-modal-description').text();
        $(this).parents().find('#discountModal').children().find('.header_bottom').text(text);
        var modalBg = $(this).css('background');
        $(this).parents().find('#discountModal').children().find('.header_top').css('background', modalBg);
      })

    })(jQuery); 
  </script>


  <div class="modal fade" id="discountModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">
            <span>&times;</span>
          </button>
          <div class="header_top"></div>
          <div class="header_bottom">
          </div>
        </div>
        <div class="modal-body text-justify">
          <p>Заполните форму ниже и мы свяжемся с Вами!</p>
          <form action="">  
            <input type="text" name="email" class="email" placeholder="email" >
            <input type="text" name="phone" class="phone" placeholder="телефон" >
            <a class="btn btn-primary">Подробнее</a>
          </form>
        </div>
      </div>
    </div>      
  </div>




  <!-- "ПРОБЛЕМНЫЙ" БЛОК  -->
  <div class="selectBreakage">
    <div class="container">
      <div class="heading div-heading">Ваше устройство неисправно?</div>
      <p class="heading">выберите вашу проблему из списка</p>
      <div class="wrap">
        <form method="POST">
          <div class="selectBreakageContent">
            <div class="selectBreakWrapp">
              <div class="selectBreakWrapp2">

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title1">ЭКРАН / ДИСПЛЕЙ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" name="pid[]" value="Разбилось стекло" class="qwerty"><span></span>
                    <p class="check">Разбилось стекло</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" name="pid[]" value="Не работает экран" class="qwerty"><span></span>
                    <p class="check">Не работает экран</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" name="pid[]" value="Нет подсветки" class="qwerty"><span></span>
                    <p class="check">Нет подсветки</p>
                  </label><br>  
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title2">ЗАРЯДКА</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не заряжается"><span></span>
                    <p class="check">Не заряжается</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Быстро рязряжается"><span></span>
                    <p class="check">Быстро рязряжается</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Греется батарея"><span></span>
                    <p class="check">Греется батарея</p>  
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает беспр. зарядка"><span></span>
                    <p class="check">Не работает беспр. зарядка</p>
                  </label><br>
                </div>

                <div class="btn btn-rimary mobileOpenButton">Показать весь список</div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title3">КНОПКИ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает вкл / выкл"><span></span>
                    <p class="check">Не работает вкл / выкл</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает кнопка HOME"><span></span>
                    <p class="check">Не работает кнопка HOME</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работают кнопки громкости"><span></span>
                    <p class="check">Не работают кнопки громкости</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title4">ОБЩЕЕ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не включается"><span></span>
                    <p class="check">Не включается</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Попала влага / утонул"><span></span>
                    <p class="check">Попала влага / утонул</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает wi-Fi"><span></span>
                    <p class="check">Не работает wi-Fi</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title5">ПО</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Зависает"><span></span>
                    <p class="check">Зависает</p><br>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Просит itunes"><span></span>
                    <p class="check">Просит itunes</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не обновляется"><span></span>
                    <p class="check">Не обновляется</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title6">КАМЕРА</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает задняя камера"><span></span>
                    <p class="check">Не работает задняя камера</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает фронтальная"><span></span>
                    <p class="check">Не работает фронтальная</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает face id"><span></span>
                    <p class="check">Не работает face id</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title7">ДИНАМИКИ / МИКРОФОН</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает динамик"><span></span>
                    <p class="check">Не работает динамик</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Собеседник не слышит"><span></span>
                    <p class="check">Собеседник не слышит</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает микрофон"><span></span>
                    <p class="check">Не работает микрофон</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не слышу собеседника"><span></span>
                    <p class="check">Не слышу собеседника</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title8">КОРПУС</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Разбилось заднее стекло"><span></span>
                    <p class="check">Разбилось заднее стекло</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Замят / согнут корпус"><span></span>
                    <p class="check">Замят / согнут корпус</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Разбито стекло камеры"><span></span>
                    <p class="check">Разбито стекло камеры</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title9">ДРУГОЕ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работают наушники"><span></span>
                    <p class="check">Не работают наушники</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает вибрация"><span></span>
                    <p class="check">Не работает вибрация</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не ловит сеть"><span></span>
                    <p class="check">Не ловит сеть</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не видит sim-карту"><span></span>
                    <p class="check">Не видит sim-карту</p>
                  </label><br>
                </div>

                <div class="btn btn-rimary mobileCloseButton">Скрыть список</div>
              </div>
              <div class="buttonForm">
                <div class="btn btn-primary problemsButton">рассчитать стоимость ремонта</div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 





  <!-- Мастера -->
  <div class="masters">
    <div class="container">
      <?php 
      $block = block_load('views', 'masters-block');
      $blocks = _block_render_blocks(array($block));
      $blocks_build = _block_get_renderable_array($blocks);
      echo drupal_render($blocks_build);
      ?>
    </div>
  </div>





  <!-- БЛОК с каким-то текстом   -->
  <div class="another">
    <div class="container">
      <div class="row d-flex j-content-between anotherContent">
        <div class="col-md-6 left">
          <div class="heading div-heading">Какой-то заголовок</div>
          <div class="leftContent">
            <ul>
              <li><p>Каждый владелец <span>IPHONE 10, XS, XS Max, X2</span> старается максимально использовать его возможности. Но иногда случаются неисправности в работе гаджета, которые в один момент лишают человека доступа к обычной мобильной связи. Что делать? Срочно обрашаться к мастерам сервисного центра IDoctor</p></li>
              <li><p>Наша компания является одной из первых по ремонту смартфонов в городе Томске. Основная специализация СЦ - обслуживающее техники Apple. Мастера сервис-центра имеют в своем арсенале все необходимое оборудование, инструментарий и Оригинальные комплектующие. Поэтому ремонт <span>IPHONE X, XC MAX, XP</span> выполняется на высоком качественном уровне</p></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 right"></div>
      </div>
    </div>
  </div>





  <!-- РАЗБИЛИ ДИСПЛЕЙ  -->
  <div class="anotherTwo">
    <div class="container">
      <div class="anotherTwoContent">
        <div class="wrap">
          <p class="title">Разбили дисплей Iphone, но он работает?</p>
          <p class="content">Сохраним оригинальную матрицу вашего айфона, поменяем только стекло</p>
          <a class="btn btn-warning" role="button" data-toggle="modal" data-target="#repairDisplayModal">подробнее</a>
        </div>
      </div>
    </div>
  </div>





  <!-- Oтзывы -->
  <div class="comments">
    <div class="container">
      <div class="comments_content">
        <h2>Отзывы клиентов</h2>
        <p class="heading">за время работы мы отремонтировали тысячи устройств. вот некоторые отзывы наших клиентов</p>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Аудио</a></li>
          <li><a data-toggle="tab" href="#menu1">Flamp</a></li>
          <li><a data-toggle="tab" href="#menu2">Соцсети</a></li>
        </ul>
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <?php 
            $block = block_load('views', 'review_audio-block');
            $blocks = _block_render_blocks(array($block));
            $blocks_build = _block_get_renderable_array($blocks);
            echo drupal_render($blocks_build);
            ?>
          </div>
          <div id="menu1" class="tab-pane fade">
            <?php 
            $block = block_load('views', 'review_flamp-block');
            $blocks = _block_render_blocks(array($block));
            $blocks_build = _block_get_renderable_array($blocks);
            echo drupal_render($blocks_build);
            ?>
          </div>
          <div id="menu2" class="tab-pane fade">
            <?php 
            $block = block_load('views', 'review_social-block');
            $blocks = _block_render_blocks(array($block));
            $blocks_build = _block_get_renderable_array($blocks);
            echo drupal_render($blocks_build);
            ?>
          </div>
        </div>
        <div class="buttons_block">
          <a href="/node/70" class="btn btn-primary">Все отзывы</a>
          <a href="/node/70" class="btn btn-primary">Добавить отзыв</a>
        </div>
      </div>
    </div>
  </div>





  <!-- БЛОК 3 с каки-мто текстом   -->
  <div class="anotherThree">
    <div class="container">
      <div class="heading div-heading">Какой-то заголовок</div>
      <div class="anotherThreeContent d-flex j-content-between">
        <div class="left"><iframe src="https://www.youtube.com/embed/idEsr8ph0r4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="right">
          <p class="title">Доступные цены на ремонт айфон 10, XC, XC Макс, XP с  гарантией</p>
          <p class="content">Своим клиентам мы готовы предложить самые доступные цены в городе. Благодаря тщательно продуманной ценовой политике, стоимость таких услуг находится на стабильном уровне. Отдельные покупки оригинальных запасных частей напрямую у мировых поставщиков позволяют не только не повышать цены, но и всегда иметь в наличии все необходимые комплектующие детали.</p>
          <p class="title">опытные специалисты и высокое качество ремонта</p>
          <p class="content">Важным моментом деятельности компании iDoctor.ru являются профессиональные кадры. Наши мастера обладают большим практическим опытом и работают в этом направлении не менее 5 лет. Поэтому мы готовы выполнять ремонт iPhone X, XS, XS Max, X2 в Томске любой сложности. К нам ежедневно обращаются десятки клиентов, которые нуждаются в нашей помощи.</p>
        </div>
      </div>
    </div>
  </div>





  <!-- контакты  -->
  <div class="contacts">
    <div class="container">
      <div class="heading div-heading">Контакты</div>
      <div class="row d-flex j-content-around contactsContent">
        <div class="col-lg-4 col-md-12 addressContacts item">
          <p class="title">Адрес:</p>
          <p class="content">г. Томск, пер. 1905 года, д.18</p>
          <p class="find-us"><a href="#maps" class="green">Как ДОБРАТЬСЯ?</a></p>
        </div>
        <div class="col-lg-4 col-md-12 workTimeContacts item">
          <p class="title">Часы работы:</p>
          <p class="content">Пн - Пт с 10 до 19,</p>
          <p class="content">Сб с 11 до 16, вс выходной</p>
        </div>
        <div class="col-lg-4 col-md-12 phoneContacts item">
          <p class="title">ТЕЛЕФОН:</p>
          <p class="content">+7 (382) 33-22-77</p>
          <p class="content">+7 (382) 33-22-77</p>
        </div>
      </div>
      <div class="row">
        <div class="bannerContacts d-flex j-content-between" id="maps">
          <div class="banner"></div>
          <div class="banner"></div>
          <div class="banner"></div>
        </div>
      </div>
    </div>
  </div>





  <!-- карта -->
  <div class="maps">
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2202.4968933092155!2d84.94933681626166!3d56.49365208075793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4326937ca6628e19%3A0xaf9e065e11ea6ce6!2siDoctor!5e0!3m2!1sru!2s!4v1561408834188!5m2!1sru!2s" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>





  <!-- нужен ремонт?  -->
  <div class="forma">
    <div class="container">
      <div class="formWrapp">
        <div class="wrap">
          <div class="row heading div-heading">
            <div class="col-md-4">
            </div>
            <div class="col-md-8 formHeading">Нужен ремонт? Оформите заявку!
            </div>
          </div>
          <div class="formContent">
            <form action="" clas="row d-flex j-content-between">
              <div class="col-md-4">
              </div>
              <div class="col-md-7 formInputs">
                <input type="text" name="name" placeholder="ИМЯ" class="name">
                <input type="text" name="phone" placeholder="Телефон" class="phone">
                <input type="text" name="reason" placeholder="что же у вас сломалось?" class="reason">
                <a class="btn btn-primary">Отправить</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





  <link rel="stylesheet" href="/sites/all/libraries/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/sites/all/libraries/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <script src="/sites/all/libraries/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>


  <?php require_once 'footer.tpl.php';?>

  <?php require_once 'modalWindow.php';?>