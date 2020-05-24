
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
              <li>Работаем в Томске уже 9 лет!</li>
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

      <div class="col-md-4 topModelsItem devices" id="device_apple_watch">
        <p class="model">APPLE WATCH</p>
      </div>

    </div>

    <div class="row d-flex bottomModels">

      <div class="col-md-3 bottomModelsItem devices" id="device_samsung">
        <p class="model">SAMSUNG</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_xiaomi">
        <p class="model">XIAOMI</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_honor">
        <p class="model">HONOR</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_huawei">
        <p class="model">HUAWEI</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_asus">
        <p class="model">ASUS</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_meizu">
        <p class="model">MEIZU</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_zte">
        <p class="model">ZTE</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_lenovo">
        <p class="model">LENOVO</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_sony">
        <p class="model">SONY</p>
      </div>
      <div class="col-md-3 bottomModelsItem devices" id="device_oppo">
        <p class="model">OPPO</p>
      </div>

    </div>
  </div>
  
  <div class="mobileBlock">
    <div class="mobileBlockContent">
      <ul class="mobileLeft">
        <li id="m_device_iphone">iphone</li>
        <li id="m_device_ipad">IPAD</li>
        <li id="m_device_macbook">MACBOOK</li>
        <li id="m_device_apple_watch">Apple Watch</li>
        <li id="m_device_samsung">SAMSUNG</li>
        <li id="m_device_xiaomi">XIAOMI</li>
        <li id="m_device_honor">HONOR</li>       
      </ul>
      <ul class="mobileRight">
        <li id="m_device_huawei">HUAWEI</li>
        <li id="m_device_asus">Asus</li>
        <li id="m_device_meizu">MEIZU</li>
        <li id="m_device_zte">ZTE</li>
        <li id="m_device_lenovo">Lenovo</li>
        <li id="m_device_sony">Sony</li>
        <li id="m_device_oppo">Oppo</li>
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
        <h2>Iphone</h2>
        <div class="wrapper">
          <a href="/node/71/" class="btn btn-primary">4</a>
          <a href="/node/89/" class="btn btn-primary">4s</a>
          <a href="/node/72/" class="btn btn-primary">5</a>
          <a href="/node/90/" class="btn btn-primary">5c</a>
          <a href="/node/91/" class="btn btn-primary">5s</a>
          <a href="/node/92/" class="btn btn-primary">6</a>
          <a href="/node/94/" class="btn btn-primary">6 Plus</a>
          <a href="/node/93/" class="btn btn-primary">6s</a>
          <a href="/node/95/" class="btn btn-primary">6s Plus</a>
          <a href="/node/96/" class="btn btn-primary">SE</a>
          <a href="/node/60/" class="btn btn-primary">7</a>
          <a href="/node/97/" class="btn btn-primary">7 Plus</a>
          <a href="/node/59/" class="btn btn-primary">8</a>
          <a href="/node/98/" class="btn btn-primary">8 Plus</a>
          <a href="/node/99/" class="btn btn-primary">X</a>
          <a href="/node/100/" class="btn btn-primary">XS</a>
          <a href="/node/101/" class="btn btn-primary">XS Max</a>
          <a href="/node/102/" class="btn btn-primary">XR</a>
          <a href="/node/103/" class="btn btn-primary">11</a>
          <a href="/node/104/" class="btn btn-primary">11 Pro</a>
          <a href="/node/105/" class="btn btn-primary">11 Pro Max</a>
        </div>
      </div>

      <div class="models_ipad models hidden_block_models">
        <h2>ipad</h2>
          <div class="wrapper">
            <a href="/node/106/" class="btn btn-primary">2</a>
            <a href="/node/107/" class="btn btn-primary">3</a>
            <a href="/node/108/" class="btn btn-primary">4</a>
            <a href="/node/109/" class="btn btn-primary">mini</a>
            <a href="/node/110/" class="btn btn-primary">mini 2</a>
            <a href="/node/111/" class="btn btn-primary">mini 3</a>
            <a href="/node/112/" class="btn btn-primary">mini 4</a>
            <a href="/node/113/" class="btn btn-primary">air</a>
            <a href="/node/114/" class="btn btn-primary">air 2</a>
            <a href="/node/115/" class="btn btn-primary">air pro</a>
        </div>
    </div>

    <div class="models_macbook models hidden_block_models">
      <h2>macbook</h2>
        <div class="wrapper">
          <a href="/node/116/" class="btn btn-primary">Air 11"</a>
          <a href="/node/117/" class="btn btn-primary">Air 13"</a>
          <a href="/node/118/" class="btn btn-primary">Air 15"</a>
      </div>
  </div>

  <div class="models_apple_watch models hidden_block_models">
      <h2>apple watch</h2>
        <div class="wrapper">
          <a href="/node/119/" class="btn btn-primary">Series 1</a>
          <a href="/node/120/" class="btn btn-primary">Series 2</a>
          <a href="/node/121/" class="btn btn-primary">Series 3</a>
          <a href="/node/122/" class="btn btn-primary">Series 4</a>
          <a href="/node/123/" class="btn btn-primary">Series 5</a>
        </div>
    </div>

  <div class="models_samsung models hidden_block_models">
    <h2>samsung</h2>
    <div class="wrapper">
      <a href="/node/130/" class="btn btn-primary">Galaxy S6</a>
      <a href="/node/131/" class="btn btn-primary">Galaxy S6 Edge</a>
      <a href="/node/132/" class="btn btn-primary">Galaxy S6 Edge Plus</a>
      <a href="/node/133/" class="btn btn-primary">Galaxy S3</a>
      <a href="/node/134/" class="btn btn-primary">Galaxy S4</a>
      <a href="/node/135/" class="btn btn-primary">Galaxy S5</a>
      <a href="/node/136/" class="btn btn-primary">Galaxy A6</a>
      <a href="/node/137/" class="btn btn-primary">Galaxy A6 Plus</a>
      <a href="/node/138/" class="btn btn-primary">Galaxy A9</a>
      <a href="/node/139/" class="btn btn-primary">Galaxy A30</a>
      <a href="/node/140/" class="btn btn-primary">Galaxy A40</a>
      <a href="/node/141/" class="btn btn-primary">Galaxy A50</a>
      <a href="/node/142/" class="btn btn-primary">Galaxy Note 8</a>
      <a href="/node/143/" class="btn btn-primary">Galaxy Note 9</a>
      <a href="/node/144/" class="btn btn-primary">Galaxy S9</a>
      <a href="/node/145/" class="btn btn-primary">Galaxy S9 Plus</a>
      <a href="/node/146/" class="btn btn-primary">Galaxy S7</a>
      <a href="/node/147/" class="btn btn-primary">Galaxy S7 Edge</a>
      <a href="/node/148/" class="btn btn-primary">Galaxy S8</a>
      <a href="/node/149/" class="btn btn-primary">Galaxy S8 Plus</a>
      <a href="/node/150/" class="btn btn-primary">Galaxy J1</a>
      <a href="/node/151/" class="btn btn-primary">Galaxy J2</a>
      <a href="/node/152/" class="btn btn-primary">Galaxy S10</a>
      <a href="/node/153/" class="btn btn-primary">Galaxy S10 Plus</a>
      <a href="/node/154/" class="btn btn-primary">Galaxy A3</a>
      <a href="/node/155/" class="btn btn-primary">Galaxy A5</a>
      <a href="/node/156/" class="btn btn-primary">Galaxy A7</a>
      <a href="/node/157/" class="btn btn-primary">Galaxy A8</a>
      <a href="/node/158/" class="btn btn-primary">Galaxy J3</a>
      <a href="/node/159/" class="btn btn-primary">Galaxy J4</a>
      <a href="/node/160/" class="btn btn-primary">Galaxy J5</a>
      <a href="/node/161/" class="btn btn-primary">Galaxy J6</a>
      <a href="/node/162/" class="btn btn-primary">Galaxy J7</a>
      <a href="/node/163/" class="btn btn-primary">Galaxy J8</a>
      <a href="/node/164/" class="btn btn-primary">Galaxy Grand 2</a>
    </div>
  </div>

  <div class="models_xiaomi models hidden_block_models">
    <h2>xiaomi</h2>
    <div class="wrapper">
      <a href="/node/165/" class="btn btn-primary">Mi A1</a>
      <a href="/node/166/" class="btn btn-primary">Mi A2 Lite</a>
      <a href="/node/167/" class="btn btn-primary">Mi 5</a>
      <a href="/node/168/" class="btn btn-primary">Mi 5S</a>
      <a href="/node/169/" class="btn btn-primary">Mi 5S Plus</a>
      <a href="/node/170/" class="btn btn-primary">Mi Mix 2</a>
      <a href="/node/171/" class="btn btn-primary">Mi Note</a>
      <a href="/node/172/" class="btn btn-primary">Mi Note 2</a>
      <a href="/node/173/" class="btn btn-primary">Mi 4</a>
      <a href="/node/174/" class="btn btn-primary">Mi 4i</a>
      <a href="/node/175/" class="btn btn-primary">Mi 4C</a>
      <a href="/node/176/" class="btn btn-primary">Mi 6</a>
      <a href="/node/177/" class="btn btn-primary">Redmi Note 2 Prime</a>
      <a href="/node/178/" class="btn btn-primary">Redmi 3</a>
      <a href="/node/179/" class="btn btn-primary">Redmi 3S</a>
      <a href="/node/180/" class="btn btn-primary">Redmi 4</a>
      <a href="/node/181/" class="btn btn-primary">Redmi 4A</a>
      <a href="/node/182/" class="btn btn-primary">Redmi 4X</a>
      <a href="/node/183/" class="btn btn-primary">Redmi 5A</a>
      <a href="/node/184/" class="btn btn-primary">Redmi 5 Plus</a>
      <a href="/node/185/" class="btn btn-primary">Redmi Note 4</a>
      <a href="/node/186/" class="btn btn-primary">Redmi Note 4x</a>
      <a href="/node/187/" class="btn btn-primary">Redmi Note 5a</a>
      <a href="/node/188/" class="btn btn-primary">Redmi 6</a>
      <a href="/node/189/" class="btn btn-primary">Redmi 6A</a>
      <a href="/node/190/" class="btn btn-primary">Redmi 7</a>
      <a href="/node/191/" class="btn btn-primary">Redmi 7A</a>
      <a href="/node/192/" class="btn btn-primary">Redmi Note 3</a>
      <a href="/node/193/" class="btn btn-primary">Redmi Note 3 Pro</a>
      <a href="/node/194/" class="btn btn-primary">Redmi Note 5</a>
      <a href="/node/195/" class="btn btn-primary">Redmi Note 5 Lite</a>
      <a href="/node/196/" class="btn btn-primary">Redmi Note 5 Pro</a>
      <a href="/node/197/" class="btn btn-primary">Redmi Note 6 Pro</a>
      <a href="/node/198/" class="btn btn-primary">Redmi S2</a>
      <a href="/node/199/" class="btn btn-primary">Mi 8</a>
      <a href="/node/200/" class="btn btn-primary">Mi 8 Lite</a>
      <a href="/node/201/" class="btn btn-primary">Mi 8 Pro</a>
      <a href="/node/202/" class="btn btn-primary">Mi 9</a>
      <a href="/node/203/" class="btn btn-primary">Mi 9 Lite</a>
      <a href="/node/204/" class="btn btn-primary">Mi 9T Pro</a>
      <a href="/node/205/" class="btn btn-primary">Mi 8se</a>
      <a href="/node/206/" class="btn btn-primary">Redmi Note 7</a>
      <a href="/node/207/" class="btn btn-primary">Black Shark</a>
      <a href="/node/208/" class="btn btn-primary">Mi Max</a>
      <a href="/node/209/" class="btn btn-primary">Mi Max 2</a>
    </div>
  </div>

  <div class="models_honor models hidden_block_models">
    <h2>honor</h2>
    <div class="wrapper">
      <a href="/node/210/" class="btn btn-primary">9</a>
      <a href="/node/211/" class="btn btn-primary">9 Lite</a>
      <a href="/node/212/" class="btn btn-primary">8</a>
      <a href="/node/213/" class="btn btn-primary">8 Pro</a>
      <a href="/node/214/" class="btn btn-primary">5a</a>
      <a href="/node/215/" class="btn btn-primary">6A</a>
      <a href="/node/216/" class="btn btn-primary">3X</a>
      <a href="/node/217/" class="btn btn-primary">4x</a>
      <a href="/node/218/" class="btn btn-primary">5x</a>
      <a href="/node/219/" class="btn btn-primary">6x</a>
      <a href="/node/220/" class="btn btn-primary">7x</a>
      <a href="/node/221/" class="btn btn-primary">7C</a>
      <a href="/node/222/" class="btn btn-primary">7c Lite</a>
      <a href="/node/223/" class="btn btn-primary">7c Pro</a>   
      <a href="/node/224/" class="btn btn-primary">7A</a>
      <a href="/node/225/" class="btn btn-primary">7a Pro</a>
      <a href="/node/226/" class="btn btn-primary">3C Lite</a>
      <a href="/node/227/" class="btn btn-primary">4C Pro</a>
      <a href="/node/228/" class="btn btn-primary">8C</a>
      <a href="/node/229/" class="btn btn-primary">5C</a>
      <a href="/node/230/" class="btn btn-primary">View 10</a>
      <a href="/node/231/" class="btn btn-primary">Play</a>
      <a href="/node/232/" class="btn btn-primary">Note 8</a>
      <a href="/node/233/" class="btn btn-primary">Magic 2</a>
      <a href="/node/234/" class="btn btn-primary">8X</a>
      <a href="/node/235/" class="btn btn-primary">8x Max</a>      
      <a href="/node/236/" class="btn btn-primary">6</a>
      <a href="/node/237/" class="btn btn-primary">6 Plus</a>
      <a href="/node/238/" class="btn btn-primary">10</a>
      <a href="/node/239/" class="btn btn-primary">10 Lite</a>
      <a href="/node/240/" class="btn btn-primary">7</a>
      <a href="/node/241/" class="btn btn-primary">7 Lite</a>
      <a href="/node/242/" class="btn btn-primary">7 Pro</a>
      <a href="/node/243/" class="btn btn-primary">6C</a>
      <a href="/node/244/" class="btn btn-primary">6C Lite</a>
      <a href="/node/245/" class="btn btn-primary">6c Pro</a>
      <a href="/node/246/" class="btn btn-primary">10i</a>
      <a href="/node/247/" class="btn btn-primary">View 20</a>
      <a href="/node/248/" class="btn btn-primary">20</a>
      <a href="/node/249/" class="btn btn-primary">20 Pro</a>
      <a href="/node/250/" class="btn btn-primary">8A</a>
      <a href="/node/251/" class="btn btn-primary">8a Pro</a>
      <a href="/node/252/" class="btn btn-primary">8a Lite</a>
    </div>
  </div>

  

  <div class="models_huawei models hidden_block_models">
    <h2>huawei</h2>
    <div class="wrapper">
      <a href="/node/254/" class="btn btn-primary">Ascend Mate 2</a>
      <a href="/node/255*" class="btn btn-primary">Ascend Mate 7</a>
      <a href="/node/256/" class="btn btn-primary">P10</a>
      <a href="/node/257/" class="btn btn-primary">P10 Lite</a>
      <a href="/node/258/" class="btn btn-primary">Ascend Mate 10</a>
      <a href="/node/259/" class="btn btn-primary">Ascend Mate 10 Lite</a>
      <a href="/node/260/" class="btn btn-primary">Ascend Mate 10 Pro</a>
      <a href="/node/261/" class="btn btn-primary">Ascend P7</a>
      <a href="/node/262/" class="btn btn-primary">Y5 II</a>
      <a href="/node/263/" class="btn btn-primary">Y3 2017</a>
      <a href="/node/264/" class="btn btn-primary">P20</a>
      <a href="/node/265/" class="btn btn-primary">P20 Lite</a>
      <a href="/node/266/" class="btn btn-primary">P20 Pro</a>
      <a href="/node/267/" class="btn btn-primary">P8 Lite</a>
      <a href="/node/268/" class="btn btn-primary">P9</a>
      <a href="/node/269/" class="btn btn-primary">P9 Lite</a>
      <a href="/node/270/" class="btn btn-primary">P9 Pro</a>
      <a href="/node/271/" class="btn btn-primary">Y9</a>
      <a href="/node/272/" class="btn btn-primary">Y6 Prime</a>
      <a href="/node/273/" class="btn btn-primary">Mate 20</a>
      <a href="/node/274/" class="btn btn-primary">Mate 20 Pro</a>
      <a href="/node/275/" class="btn btn-primary">Mate 20 Lite</a>
      <a href="/node/276/" class="btn btn-primary">Y7</a>
      <a href="/node/277/" class="btn btn-primary">Y5</a>
      <a href="/node/278/" class="btn btn-primary">Y3 II</a>
      <a href="/node/279/" class="btn btn-primary">Nova 2s</a>
      <a href="/node/280/" class="btn btn-primary">Nova 3i</a>
      <a href="/node/281/" class="btn btn-primary">P Smart</a>
      <a href="/node/282/" class="btn btn-primary">Nova 2 Plus</a>
      <a href="/node/283/" class="btn btn-primary">P9 Plus</a>
      <a href="/node/284/" class="btn btn-primary">P10 Plus</a>
      <a href="/node/285/" class="btn btn-primary">Nova 2i</a>
      <a href="/node/286/" class="btn btn-primary">Mate 9</a>
      <a href="/node/287/" class="btn btn-primary">Mate 9 Lite</a>
      <a href="/node/288/" class="btn btn-primary">Mate 9 Pro</a>
    </div>
  </div>

  <div class="models_asus models hidden_block_models">
    <h2>asus</h2>
    <div class="wrapper">
      <a href="/node/290/" class="btn btn-primary">Zenfone Max</a>
      <a href="/node/291/" class="btn btn-primary">Zenfone 2</a>
      <a href="/node/292/" class="btn btn-primary">Zenfone 3</a>
      <a href="/node/293/" class="btn btn-primary">Zenfone 2 Laser</a>
      <a href="/node/294/" class="btn btn-primary">Zenfone 3 Max</a>
    </div>
  </div>

  <div class="models_meizu models hidden_block_models">
    <h2>meizu</h2>
    <div class="wrapper">
      <a href="/node/296/" class="btn btn-primary">MX4</a>
      <a href="/node/297/" class="btn btn-primary">MX4 PRO</a>
      <a href="/node/298/" class="btn btn-primary">MX 6</a>
      <a href="/node/299/" class="btn btn-primary">U10</a>
      <a href="/node/300/" class="btn btn-primary">U20</a>
      <a href="/node/301/" class="btn btn-primary">M5</a>
      <a href="/node/302/" class="btn btn-primary">M5 Note</a>
      <a href="/node/303/" class="btn btn-primary">M5S</a>
      <a href="/node/304/" class="btn btn-primary">MX2</a>
      <a href="/node/305/" class="btn btn-primary">M3s mini</a>
      <a href="/node/306/" class="btn btn-primary">M3 Note</a>
    </div>
  </div>

  <div class="models_zte models hidden_block_models">
    <h2>zte</h2>
    <div class="wrapper">
      <a href="/node/308/" class="btn btn-primary">Blade V7</a>
      <a href="/node/309/" class="btn btn-primary">Blade V8</a>
      <a href="/node/310/" class="btn btn-primary">Blade X3</a>
      <a href="/node/311/" class="btn btn-primary">Blade A6</a>
      <a href="/node/312/" class="btn btn-primary">Blade A610</a>
    </div>
  </div>

  <div class="models_lenovo models hidden_block_models">
    <h2>lenovo</h2>
    <div class="wrapper">
      <a href="/node/314/" class="btn btn-primary">P780</a>
      <a href="/node/315/" class="btn btn-primary">Vibe Z2</a>
      <a href="/node/316/" class="btn btn-primary">A2010</a>
      <a href="/node/317/" class="btn btn-primary">P70</a>
      <a href="/node/318/" class="btn btn-primary">K910 Vibe Z</a>
    </div>
  </div>

  <div class="models_sony models hidden_block_models">
    <h2>sony</h2>
    <div class="wrapper">
      <a href="/node/320/" class="btn btn-primary">Xperia Z3</a>
      <a href="/node/321/" class="btn btn-primary">Xperia Z3 Compact</a>
      <a href="/node/322/" class="btn btn-primary">Xperia Z</a>
      <a href="/node/323/" class="btn btn-primary">Xperia Z1</a>
      <a href="/node/324/" class="btn btn-primary">Xperia Z2</a>
      <a href="/node/325/" class="btn btn-primary">Xperia Z5</a>
    </div>
  </div>

  <div class="models_oppo models hidden_block_models">
    <h2>oppo</h2>
    <div class="wrapper">
      <a href="/node/327/" class="btn btn-primary">А5 2020</a>
      <a href="/node/328/" class="btn btn-primary">А9 2020</a>
      <a href="/node/329/" class="btn btn-primary">Realme 5</a>
      <a href="/node/330/" class="btn btn-primary">Reno 2</a>
      <a href="/node/331/" class="btn btn-primary">Viva Y17</a>
      <a href="/node/332/" class="btn btn-primary">Reno 2z</a>
    </div>
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
            $block = block_load('views', 'review_audio_main-block');
            $blocks = _block_render_blocks(array($block));
            $blocks_build = _block_get_renderable_array($blocks);
            echo drupal_render($blocks_build);
            ?>
          </div>
          <div id="menu1" class="tab-pane fade">
            <?php 
            $block = block_load('views', 'review_flamp_main-block');
            $blocks = _block_render_blocks(array($block));
            $blocks_build = _block_get_renderable_array($blocks);
            echo drupal_render($blocks_build);
            ?>
          </div>
          <div id="menu2" class="tab-pane fade">
            <?php 
            $block = block_load('views', 'review_social_main-block');
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