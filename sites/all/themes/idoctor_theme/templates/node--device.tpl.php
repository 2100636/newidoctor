
<?php 
require_once 'header.tpl.php';
?>


<!-- Шпапка -->
<div class="header">
  <div class="headerBottomBanner">
    <div class="bannerContent d-flex j-content-between a-items-flex-start">
      <div class="container">
        <div class="leftBanner">
          <div class="wrapper">
            <div class="heading">
              <?php echo $node -> title; ?>
            </div>
            <p class="title"><?php  echo $node -> field_device_price_header['und'][0]['value']; ?></p>
            <?php 
            if (!empty($node -> field_device_list_header['und'][0]['value'])) :
              echo $node -> field_device_list_header['und'][0]['value'];
              else : ?>
                <ul>
                  <li>Работаем в Томске уже 8 лет!</li>
                  <li>Сертифицированное оборудование, не имеющее аналогов в Томске</li>
                  <li>Оригинальные запчасти Apple</li>
                  <li>Гарантия  от 1 месяца</li>
                </ul>
              <?php endif; ?>

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
            <img src="/sites/all/themes/idoctor_theme/image/before.jpg" alt="" class="twenty-laptop">
            <img src="/sites/all/themes/idoctor_theme/image/after.jpg" alt="" class="twenty-laptop">
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





  <!-- Доступные цены -->
  <div class="affordable-price">
    <div class="container">
      <div class="heading div-heading">
        ДОСТУПНЫЕ ЦЕНЫ
      </div>
      <p class="heading">выберите модель вашего устройства</p>
    </div>
    <div class="buttonsBlock">
      <div class="container">
        <div class="buttonsBlockContent">

          <?php  
          for ($i = 0; $i < 10; $i++) {
            if(!empty($node -> field_model['und'][$i]['value'])) {
              echo '<a class="btn btn-primary">'. $node -> field_model['und'][$i]['value'].'</a>';
            }
            else {
              break;
            }
          }
          ?>

          <select name="" class="select">
            <option value="Выберите устройство" selected>Выберите устройство</option>
            <option value="iPhone">iPhone</option>
            <option value="iPad">iPad</option>
            <option value="MacBook">MacBook</option>
            <option value="Apple Watch">Apple Watch</option>
          </select>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="affordable-price-content">    

        <?php 
        

        // for($i = 0; $i < 1000; $i++) {
        //   if(!empty($prices = $node -> field_price['und'][$i]['value'])) {
        //     list($name, $time, $cost, $protection, $help) = explode('||', $prices);

        //     echo '<div class="priceRow">
        //             <div class="priceRowItem">
        //               <div class="service-name">
        //                 <p>'. 
        //                   $name . 
        //                   '<span>' . 
        //                     $protection . 
        //                   '</span>
        //                 </p>
        //               </div>
        //               <div class="time">' . 
        //                 $time . 
        //               '</div>
        //               <div class="price">' . 
        //                 $cost . ' &#8381;
        //               </div>
        //             </div>
        //           </div>'; 
        //   }
        //   else {
        //     break;
        //   }
        // }


        if (!empty($node->field_price['und'])):
          foreach($node->field_price['und'] as $key => $value) {
            list($name, $time, $cost, $protection, $help) = explode('||', $value['value']);
            echo '<div class="priceRow">
                    <div class="priceRowItem">
                      <div class="service-name">
                        <p>'. 
                          $name . 
                          '<span>' . 
                            $protection . 
                          '</span>
                        </p>
                      </div>
                      <div class="time">' . 
                        $time . 
                      '</div>
                      <div class="price">' . 
                        $cost . ' &#8381;
                      </div>
                    </div>
                  </div>'; 
          }
        endif;

        ?>






        <div class="wrapper_price_block">

        </div>

      </div>
      <div class="allItems">
        <p class="open_block">Открыть все</p>
        <p class="close_block">Свернуть</p>
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
                    <p class="check">разбилось стекло</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" name="pid[]" value="Не работает экран" class="qwerty"><span></span>
                    <p class="check">не работает экран</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" name="pid[]" value="Нет подсветки" class="qwerty"><span></span>
                    <p class="check">нет подсветки</p>
                  </label><br>  
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title2">ЗАРЯДКА</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не заряжается"><span></span>
                    <p class="check">не заряжается</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Быстро рязряжается"><span></span>
                    <p class="check">быстро рязряжается</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Греется батарея"><span></span>
                    <p class="check">греется батарея</p>  
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает беспр. зарядка"><span></span>
                    <p class="check">не работает беспр. зарядка</p>
                  </label><br>
                </div>

                <div class="btn btn-rimary mobileOpenButton">Показать весь список</div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title3">КНОПКИ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает вкл / выкл"><span></span>
                    <p class="check">не работает вкл / выкл</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает кнопка HOME"><span></span>
                    <p class="check">не работает кнопка HOME</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работают кнопки громкости"><span></span>
                    <p class="check">не работают кнопки громкости</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title4">ОБЩЕЕ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не включается"><span></span>
                    <p class="check">не включается</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Попала влага / утонул"><span></span>
                    <p class="check">попала влага / утонул</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает wi-Fi"><span></span>
                    <p class="check">не работает wi-Fi</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title5">ПО</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Зависает"><span></span>
                    <p class="check">зависает</p><br>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Просит itunes"><span></span>
                    <p class="check">просит itunes</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не обновляется"><span></span>
                    <p class="check">не обновляется</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title6">КАМЕРА</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает задняя камера"><span></span>
                    <p class="check">не работает задняя камера</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает фронтальная"><span></span>
                    <p class="check">не работает фронтальная</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает face id"><span></span>
                    <p class="check">не работает face id</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title7">ДИНАМИКИ / МИКРОФОН</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает динамик"><span></span>
                    <p class="check">не работает динамик</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Собеседник не слышит"><span></span>
                    <p class="check">собеседник не слышит</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает микрофон"><span></span>
                    <p class="check">не работает микрофон</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не слышу собеседника"><span></span>
                    <p class="check">не слышу собеседника</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title8">КОРПУС</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Разбилось заднее стекло"><span></span>
                    <p class="check">разбилось заднее стекло</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Замят / согнут корпус"><span></span>
                    <p class="check">замят / согнут корпус</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Разбито стекло камеры"><span></span>
                    <p class="check">разбито стекло камеры</p>
                  </label><br>
                </div>

                <div class="col-lg-4 col-md-12 selectBreakRowItem">
                  <p class="title" id="title9">ДРУГОЕ</p>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работают наушники"><span></span>
                    <p class="check">не работают наушники</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не работает вибрация"><span></span>
                    <p class="check">не работает вибрация</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не ловит сеть"><span></span>
                    <p class="check">не ловит сеть</p>
                  </label><br>
                  <label class="checkbox-label">
                    <input type="checkbox" value="Не видит sim-карту"><span></span>
                    <p class="check">не видит sim-карту</p>
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
            <div class="header_bottom"></div>
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
            <div class="heading div-heading"><?php echo $node -> field_text_1_header['und'][0]['value']; ?></div>
            <div class="leftContent">
              <ul>
                <!-- <li><p>Каждый владелец <span>IPHONE 10, XS, XS Max, X2</span> старается максимально использовать его возможности. Но иногда случаются неисправности в работе гаджета, которые в один момент лишают человека доступа к обычной мобильной связи. Что делать? Срочно обрашаться к мастерам сервисного центра IDoctor</p></li>
                  <li><p>Наша компания является одной из первых по ремонту смартфонов в городе Томске. Основная специализация СЦ - обслуживающее техники Apple. Мастера сервис-центра имеют в своем арсенале все необходимое оборудование, инструментарий и Оригинальные комплектующие. Поэтому ремонт <span>IPHONE X, XC MAX, XP</span> выполняется на высоком качественном уровне</p></li> -->
                  <?php echo $node -> field_text_1_content['und'][0]['value']; ?>
                </ul>
              </div>
            </div>
            <div class="col-md-6 right"><img src="<?php echo '/sites/default/files/' . $node -> field_photo['und'][0]['filename']; ?>" class="device_image"></div>
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
          <div class="heading div-heading"><?php echo $node -> field_text_2_header ['und'][0]['value']; ?></div>
          <div class="anotherThreeContent d-flex j-content-between">
            <!-- <div class="left"><iframe src="https://www.youtube.com/embed/idEsr8ph0r4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> -->
            <div class="left">
              <video controls="controls" type="video/mp4" class="device_video">
                <source src="<?php echo '/sites/default/files/' . $node -> field_video['und'][0]['filename']; ?>">
                </video>
              </div>
              <div class="right">
            <!-- <p class="title">Доступные цены на ремонт айфон 10, XC, XC Макс, XP с  гарантией</p>
            <p class="content">Своим клиентам мы готовы предложить самые доступные цены в городе. Благодаря тщательно продуманной ценовой политике, стоимость таких услуг находится на стабильном уровне. Отдельные покупки оригинальных запасных частей напрямую у мировых поставщиков позволяют не только не повышать цены, но и всегда иметь в наличии все необходимые комплектующие детали.</p>
            <p class="title">опытные специалисты и высокое качество ремонта</p>
            <p class="content">Важным моментом деятельности компании iDoctor.ru являются профессиональные кадры. Наши мастера обладают большим практическим опытом и работают в этом направлении не менее 5 лет. Поэтому мы готовы выполнять ремонт iPhone X, XS, XS Max, X2 в Томске любой сложности. К нам ежедневно обращаются десятки клиентов, которые нуждаются в нашей помощи.</p> -->
            <?php echo $node -> field_text_2_content['und'][0]['value']; ?>
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