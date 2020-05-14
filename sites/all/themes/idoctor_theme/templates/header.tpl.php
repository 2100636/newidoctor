
  <!-- шапка с логотипом  -->
  <div class="header">
    <div class="container">
      <div class="headerTop">
        <div class="row d-flex j-content-between headerTopContent">
          <div class="col-md-3">
            <a href="/" class="logotype d-flex">
              <img src="/sites/all/themes/idoctor_theme/image/logo-id.png" alt="iDoctor">
              <p class="logo">iDoctor</p>
            </a>
          </div>
          <div class="col-md-3" id="find-us">
            <div class="find-us">
              <p class="find-us-top">Сервисный центр в Томске</p>
              <p class="find-us-bottom green"><a href="#maps" class="green">Как нас найти?</a></p>
            </div>
          </div>    
          <div class="col-md-3" id="address">
            <div class="address">
              <p class="addTop">1905 года переулок, 18</p>
              <p class="addBottom">Пн - Пт <span>с</span> 10 <span>до</span> 19, сб <span>с</span> 11 <span>до</span> 16, вс ВЫХОДНОЙ</p>
            </div>
          </div>
          <div class="col-md-3" id="telephone">
            <div class="telephone">
              <p class="telTop"><span>Городской номер</span></p>
              <p class="green telBottom"><a href="tel:8382332277" class="green">+7 (382) 33-22-77</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
          <a role="button" data-toggle="modal" data-target="#">статус заказа</a>
        </div>
      </nav>
    </div>
  <?php endif; ?>
</div>
</header>

