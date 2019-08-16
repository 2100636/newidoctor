<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<!-- <header id="navbar" class="<?php print $navbar_classes; ?>"> -->
<header id="navbar">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
           <div class="btn btn-primary">
      <a href="">статус заказа</a>
    </div>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>



<div class="maket">
  <!-- <img src="/sites/all/themes/idoctor_theme/image/maket.png" alt=""> -->
</div>

<!-- шапка с логотипом  -->
<div class="header">
    <div class="container">
      <div class="headerTop">
        <div class="row d-flex j-content-between headerTopContent">
          <div class="col-md-3">
            <div class="logotype d-flex">
              <img src="/sites/all/themes/idoctor_theme/image/logo-id.png" alt="">
              <p class="logo">iDoctor</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="find-us">
              <p class="find-us-top">Сервисный центр в Томске</p>
              <p class="find-us-bottom green"><a href="#maps" class="green">Как нас найти?</a></p>
            </div>
          </div>    
          <div class="col-md-3">
            <div class="address">
              <p class="addTop">1905 года переулок, 18</p>
              <p class="addBottom">Пн - Пт <span>с</span> 10 <span>до</span> 19, сб <span>с</span> 11 <span>до</span> 16, вс ВЫХОДНОЙ</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="telephone">
              <p class="telTop"><span>Городской номер</span></p>
              <p class="green telBottom"><a href="tel:8382332277" class="green">+7 (382) 33-22-77</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="headerBottomBanner">
      <div class="bannerContent d-flex j-content-between a-items-flex-start">
        <div class="container">
          <div class="leftBanner">
            <div class="heading">ремонт СМАРТФОНОВ в томске</div>
            <p class="title">от 390 руб за 15 минут</p>
            <ul>
              <li>Работаем в Томске уже 8 лет!</li>
              <li>Сертифицированное оборудование, не имеющее аналогов в Томске</li>
              <li>Оригинальные запчасти Apple</li>
              <li>Гарантия  от 1 месяца</li>
            </ul>
            <div class="phoneBanner d-flex j-content-between">
              <p class="phone">+7 (382) 33-22-77</p>
              <a href="" class="btn btn-warning">записаться на ремонт</a>
            </div>
          </div>
        </div>
        <div class="rightBanner">
          <div class="twentyBlock twentytwenty-container">
            <img src="/sites/all/themes/idoctor_theme/image/before.jpg" alt="">
            <!-- <img src="/sites/all/themes/idoctor_theme/image/after.jpg" alt=""> -->
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
          <p><b>170 единиц</b> современного оборудования, не имеющего аналогов в томске</p>
        </div>
      </div>
    </div>
  </div>

  <!-- оборудование не надо пока -->
  <div class="equipment"></div>




  <!-- низкие цены на ремонт ...  -->
  <div class="lowPrices">
    <div class="container3">
      <div class="heading div-heading">Низкие цены на ремонт iphone в томске</div>
      <p class="heading">выберите модель вашего устройства</p>
      <div class="row d-flex j-content-around topModels">
        <div class="col-md-4 topModelsItem">
          <p class="model">IPHONE</p>
        </div>
        <div class="col-md-4 topModelsItem"><p class="model">IPAD</p></div>
        <div class="col-md-4 topModelsItem"><p class="model">MACBOOK</p></div>
      </div>
      <div class="row d-flex j-content-between bottomModels">
        <div class="col-md-3 bottomModelsItem"><p class="model">XIAOMI</p></div>
        <div class="col-md-3 bottomModelsItem"><p class="model">HONOR</p></div>
        <div class="col-md-3 bottomModelsItem"><p class="model">HUAWEI</p></div>
        <div class="col-md-3 bottomModelsItem"><p class="model">MEIZU</p></div>
        <div class="col-md-3 bottomModelsItem"><p class="model">SAMSUNG</p></div>
      </div>
    </div>
    <div class="container" id="dinamicBlock1">
      <div class="line"></div>
    </div>
    <div class="container3">
      <div class="row d-flex j-content-around buttons" id="dinamicBlock2">
        <a href="" class="btn btn-primary">iphone 8</a>
        <a href="" class="btn btn-primary">iphone 8 plus</a>
        <a href="" class="btn btn-primary">iphone 8</a>
        <a href="" class="btn btn-primary">iphone 8 plus</a>
        <a href="" class="btn btn-primary">Все модели</a>
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




  <!-- скидки и акции не надо пока -->
  <div class="discounts"></div>




  <!-- устройство неисправно   -->
  <div class="selectBreakage">
    <div class="container">
      <div class="heading div-heading">Ваше устройство неисправно?</div>
      <p class="heading">выберите вашу проблему из списка</p>
      <div class="wrap">
        <form action="">
          <div class="selectBreakageContent">
            <div class="row d-flex j-content-between a-items-flex-start selectBreakRow selectBreakRowTop">
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">ЭКРАН / ДИСПЛЕЙ</p>
                <label for="break-1" class="checkbox-label">
                  <input type="checkbox" id="break-1" value="1"><span></span>
                  <p class="check">разбилось стекло</p>
                </label><br>
                <label for="break-2" class="checkbox-label">
                  <input type="checkbox" id="break-2"><span></span>
                  <p class="check">не работает экран</p>
                </label><br>
                <label for="break-3" class="checkbox-label">
                  <input type="checkbox" id="break-3"><span></span>
                  <p class="check">нет подсветки</p>
                </label><br>
              </div>
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">ЗАРЯДКА</p>
                <label for="break-4" class="checkbox-label">
                  <input type="checkbox" id="break-4"><span></span>
                  <p class="check">не заряжается</p>
                </label><br>
                <label for="break-5" class="checkbox-label">
                  <input type="checkbox" id="break-5"><span></span>
                  <p class="check">быстро рязряжается</p>
                </label><br>
                <label for="break-6" class="checkbox-label">
                  <input type="checkbox" id="break-6"><span></span>
                  <p class="check">греется батарея</p>
                </label><br>
                <label for="break-7" class="checkbox-label">
                  <input type="checkbox" id="break-7"><span></span>
                  <p class="check">не работает беспр. зарядка</p>
                </label><br>
              </div>
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">КНОПКИ</p>
                <label for="break-8" class="checkbox-label">
                  <input type="checkbox" id="break-8"><span></span>
                  <p class="check">не работает вкл / выкл</p>
                </label><br>
                <label for="break-9" class="checkbox-label">
                  <input type="checkbox" id="break-9"><span></span>
                  <p class="check">не работает кнопка HOME</p>
                </label><br>
                <label for="break-10" class="checkbox-label">
                  <input type="checkbox" id="break-10"><span></span>
                  <p class="check">не работают кнопки громкости</p>
                </label><br>
              </div>
            </div>
            <div class="row d-flex j-content-between a-items-flex-start selectBreakRow selectBreakRowMiddle">
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">ОБЩЕЕ</p>
                <label for="break-11" class="checkbox-label">
                  <input type="checkbox" id="break-11"><span></span>
                  <p class="check">не включается</p>
                </label><br>
                <label for="break-12" class="checkbox-label">
                  <input type="checkbox" id="break-12"><span></span>
                  <p class="check">попала влага / утонул</p>
                </label><br>
                <label for="break-13" class="checkbox-label">
                  <input type="checkbox" id="break-13"><span></span>
                  <p class="check">не работает wi-Fi</p>
                </label><br>
              </div>
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">ПО</p>
                <label for="break-14" class="checkbox-label">
                  <input type="checkbox" id="break-14"><span></span>
                  <p class="check">зависает</p><br>
                </label><br>
                <label for="break-15" class="checkbox-label">
                  <input type="checkbox" id="break-15"><span></span>
                  <p class="check">просит itunes</p>
                </label><br>
                <label for="break-16" class="checkbox-label">
                  <input type="checkbox" id="break-16"><span></span>
                  <p class="check">не обновляется</p>
                </label><br>
              </div>
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">КАМЕРА</p>
                <label for="break-17" class="checkbox-label">
                  <input type="checkbox" id="break-17"><span></span>
                  <p class="check">не работает задняя камера</p>
                </label><br>
                <label for="break-18" class="checkbox-label">
                  <input type="checkbox" id="break-18"><span></span>
                  <p class="check">не работает фронтальная</p>
                </label><br>
                <label for="break-19" class="checkbox-label">
                  <input type="checkbox" id="break-19"><span></span>
                  <p class="check">не работает face id</p>
                </label><br>
              </div>
            </div>
            <div class="row d-flex j-content-between a-items-flex-start selectBreakRow selectBreakRowBottom">
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">ДИНАМИКИ / МИКРОФОН</p>
                <label for="break-20" class="checkbox-label">
                  <input type="checkbox" id="break-20"><span></span>
                  <p class="check">не работает динамик</p>
                </label><br>
                <label for="break-21" class="checkbox-label">
                  <input type="checkbox" id="break-21"><span></span>
                  <p class="check">собеседник не слышит</p>
                </label><br>
                <label for="break-22" class="checkbox-label">
                  <input type="checkbox" id="break-22"><span></span>
                  <p class="check">не работает микрофон</p>
                </label><br>
                <label for="break-23" class="checkbox-label">
                  <input type="checkbox" id="break-23"><span></span>
                  <p class="check">не слышу собеседника</p>
                </label><br>
              </div>
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">КОРПУС</p>
                <label for="break-24" class="checkbox-label">
                  <input type="checkbox" id="break-24"><span></span>
                  <p class="check">разбилось заднее стекло</p>
                </label><br>
                <label for="break-25" class="checkbox-label">
                  <input type="checkbox" id="break-25"><span></span>
                  <p class="check">замят / согнут корпус</p>
                </label><br>
                <label for="break-26" class="checkbox-label">
                  <input type="checkbox" id="break-26"><span></span>
                  <p class="check">разбито стекло камеры</p>
                </label><br>
              </div>
              <div class="col-lg-4 col-md-12 selectBreakRowItem">
                <p class="title">ДРУГОЕ</p>
                <label for="break-27" class="checkbox-label">
                  <input type="checkbox" id="break-27"><span></span>
                  <p class="check">не работают наушники</p>
                </label><br>
                <label for="break-28" class="checkbox-label">
                  <input type="checkbox" id="break-28"><span></span>
                  <p class="check">не работает вибрация</p>
                </label><br>
                <label for="break-29" class="checkbox-label">
                  <input type="checkbox" id="break-29"><span></span>
                  <p class="check">не ловит сеть</p>
                </label><br>
                <label for="break-30" class="checkbox-label">
                  <input type="checkbox" id="break-30"><span></span>
                  <p class="check">не видит sim</p>
                </label><br>
              </div>
            </div>
            <div class="buttonForm">
              <a href="" class="btn btn-primary">рассчитать стоимость ремонта</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <!-- мастера не надо пока -->
  <div class="masters"></div>



  <!-- БЛОК с какимто текстом   -->
  <div class="another">
    <div class="container">
    <div class="row d-flex j-content-between anotherContent">
      <div class="col-md-6 left">
        <div class="heading div-heading">Какой-то заголовок</div>
        <div class="leftContent">
          <ul>
            <li><p>Каждый владелец <span>IPHONE 10, XS, XS Max, X2</span> старается максимально использовать его возможности. Но иногда случаются<br> неисправности в работе гаджета, которые в один момент лишают человека доступа к обычной мобильной связи. Что делать? Срочно обрашаться к мастерам сервисного центра IDoctor</p></li>
            <li><p>Наша компания является одной из первых по ремонту смартфонов в городе Томске. Основная специализация СЦ - обслуживающее техники Apple. Мастера сервис-центра имеют в своем арсенале все необходимое оборудование, инструментарий и Оригинальные комплектующие. Поэтому ремонт <span>IPHONE X, XC MAX, XP</span><br> выполняется на высоком качественном уровне</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 right"></div>
    </div>
  </div>
</div>




  <!-- разбили дисплей а он...  -->
  <div class="anotherTwo">
    <div class="container">
      <div class="anotherTwoContent">
        <p class="title">Разбили дисплей Iphone, но он работает?</p>
        <p class="content">Сохраним оригинальную матрицу вашего айфона, поменяем только стекло</p>
        <a href="" class="btn btn-warning">подробнее</a>
      </div>
    </div>
  </div>


  <!-- отзывы не надо пока -->
  <div class="comments"></div>


  <!-- БЛОК с какимто текстом   -->
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
          <p class="find-us green">Как ДОБРАТЬСЯ?</p>
        </div>
        <div class="col-lg-4 col-md-12 workTimeContacts item">
          <p class="title">Часы работы:</p>
          <p class="content">Пн - пт с 10 до 19,</p>
          <p class="content">сб с 11 до 16, вс выходной</p>
        </div>
        <div class="col-lg-4 col-md-12 phoneContacts item">
          <p class="title">ТЕЛЕФОН:</p>
          <p class="content">+7 (382) 33-22-77</p>
          <p class="content">+7 (382) 33-22-77</p>
        </div>
      </div>
      <div class="row" id="maps">
        <div class="bannerContacts d-flex j-content-between">
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
        <div class="row heading div-heading">
          <div class="col-md-4"></div>
          <div class="col-md-8 formHeading">Нужен ремонт? Оформите заявку!</div>
        </div>
        <div class="formContent">
          <form action="" clas="row d-flex j-content-between">
            <div class="col-md-4"></div>
            <div class="col-md-7 formInputs">
              <input type="text" name="name" placeholder="ИМЯ" class="name">
              <input type="text" name="phone" placeholder="Телефон" class="phone">
              <input type="text" name="reason" placeholder="что же у вас сломалось?" class="reason">
              <a href="" class="btn btn-primary">Подробнее</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


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
            <div class="socialItem vkIcon"><a href="https://vk.com/" target="_blank"></a></div>
            <div class="socialItem fbIcon"><a href="https://facebook.com/" target="_blank"></a></div>
            <div class="socialItem instaIcon"><a href="https://instagram.com/" target="_blank"></a></div>
          </div>
          <div class="copy">Copyright © iDoctor 2019</div>
        </div>        
      </div>
    </div>
  </div>




  










<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb;
      endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>





<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">

   

    <!-- первый столбец - через БЛОК  -->
    <!-- второй столбец - через МЕНЮ  -->
    <!-- третий столбец - через МЕНЮ  -->
    <!-- четвертый столбец - через БЛОК  -->

    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>









