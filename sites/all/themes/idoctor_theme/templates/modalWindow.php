<!-- Модалка в шапке -->
<div class="modal fade" id="headerModal" role="dialog" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
        <p>Заполните форму ниже и мы свяжемся с Вами!</p>
        <form action="">  
          <input type="text" name="email" class="email" placeholder="имя" >
          <input type="text" name="phone" class="phone" placeholder="телефон" >
          <a class="btn btn-primary">Подробнее</a>
        </form>
      </div>
    </div>
  </div>      
</div>






<!-- "Проблемной" модалки -->
<div class="modal fade" id="problemsModal" role="dialog" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="heading">Что чиним:</div>
        <form method="POST" name="modalProblemsBlock">
          <div class="formProblems">
            <div class="name">
              Устройство:
            </div>
            <select name="" id="mainProblemSelect" onchange="funProblemModal()">
              <option value="IPHONE">IPHONE</option>
              <option value="IPAD">IPAD</option>
              <option value="MACBOOK">MACBOOK</option>
              <option value="XIAOMI">XIAOMI</option>
              <option value="HONOR">HONOR</option>
              <option value="HUAWEI">HUAWEI</option>
              <option value="MEIZU">MEIZU</option>
              <option value="SAMSUNG">SAMSUNG</option>
            </select>
          </div>
          <div class="formProblems">
            <div class="name">
              Модель:
            </div>
            <select name="model" id="model1">
              <option value="IPHONE1">IPHONE1</option>
              <option value="IPHONE1">IPHONE1</option>
              <option value="IPHONE1">IPHONE1</option>
              <option value="IPHONE5">IPHONE4</option>
            </select>
            <select name="model" id="model2">
              <option value="IPAD1">IPAD1</option>
              <option value="IPAD2">IPAD2</option>
              <option value="IPAD3">IPAD3</option>
              <option value="IPAD4">IPAD4</option>
            </select>
            <select name="model" id="model3">
              <option value="MACBOOK1">MACBOOK1</option>
              <option value="MACBOOK2">MACBOOK2</option>
              <option value="MACBOOK3">MACBOOK3</option>
              <option value="MACBOOK4">MACBOOK4</option>
            </select>
            <select name="model" id="model4">
              <option value="XIAOMI1">XIAOMI1</option>
              <option value="XIAOMI2">XIAOMI2</option>
              <option value="XIAOMI3">XIAOMI3</option>
              <option value="XIAOMI4">XIAOMI4</option>
            </select>
            <select name="model" id="model5">
              <option value="HONOR1">HONOR1</option>
              <option value="HONOR2">HONOR2</option>
              <option value="HONOR3">HONOR3</option>
              <option value="HONOR4">HONOR4</option>
            </select>
            <select name="model" id="model6">
              <option value="HUAWEI1">HUAWEI1</option>
              <option value="HUAWEI2">HUAWEI2</option>
              <option value="HUAWEI3">HUAWEI3</option>
              <option value="HUAWEI4">HUAWEI4</option>
            </select>
            <select name="model" id="model7">
              <option value="MEIZU1">MEIZU1</option>
              <option value="MEIZU2">MEIZU2</option>
              <option value="MEIZU3">MEIZU3</option>
              <option value="MEIZU4">MEIZU4</option>
            </select>
            <select name="model" id="model8">
              <option value="SAMSUNG1">SAMSUNG1</option>
              <option value="SAMSUNG2">SAMSUNG2</option>
              <option value="SAMSUNG3">SAMSUNG3</option>
              <option value="SAMSUNG4">SAMSUNG4</option>
            </select>
          </div>

          <script>
           function funProblemModal() {
            var sel = document.getElementById('mainProblemSelect').selectedIndex;
            var options = document.getElementById('mainProblemSelect').options;

            if (options[sel].value == 'IPHONE') {
              document.getElementById('model1').style.display = 'block';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'IPAD') {
              document.getElementById('model2').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'MACBOOK') {
              document.getElementById('model3').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'XIAOMI') {
              document.getElementById('model4').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'HONOR') {
              document.getElementById('model5').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'HUAWEI') {
              document.getElementById('model6').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'MEIZU') {
              document.getElementById('model7').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model8').style.display = 'none';
            }
            else if (options[sel].text == 'SAMSUNG') {
              document.getElementById('model8').style.display = 'block';
              document.getElementById('model1').style.display = 'none';
              document.getElementById('model2').style.display = 'none';
              document.getElementById('model3').style.display = 'none';
              document.getElementById('model4').style.display = 'none';
              document.getElementById('model5').style.display = 'none';
              document.getElementById('model6').style.display = 'none';
              document.getElementById('model7').style.display = 'none';
            }
          }
        </script>

        <div class="formProblems">
          <div class="name">
            Проблема:
          </div>
          <div class="problemsBlock">
            <p class="problem"></p>
          </div>
        </div>
      </form>
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






<!-- Модалка Переклейка дисплея -->
<div class="modal fade" id="repairDisplayModal" role="dialog" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3>
          Переклейка разбитого стекла любых моделей iphone
        </h3>
        <p class="heading">
          Оригинальный дисплей IPhone бывает только непосредственно в  Вашем телефоне. Экран или дисплей IPhone включает в себя само стекло, закрывающее дисплей, на котором показывается изображение и сенсорный компонент. Зачем переплачивать и терять свою оригинальную матрицу, ведь если у Вас повреждено только стекло, а дисплей целый и отлично работает, Вы можете заменить только стекло методом переклейки.
        </p>
        <h4>Как осуществляется процесс переклейки дисплея</h4>
        <div class="bannerBlockModal">
          <div class="banner">
            <img src="/sites/all/themes/idoctor_theme/image/vosstanovlenie-sispleya-1_sm.jpg" alt="">
            <p class="discriptionBanner">Удаление клея после<br> разделки дисплея</p>
          </div>
          <div class="banner">
            <img src="/sites/all/themes/idoctor_theme/image/vosstanovlenie-sispleya-2_sm.jpg" alt="">
            <p class="discriptionBanner">Нанесение ОСА<br> пленки</p>
          </div>
          <div class="banner">
            <img src="/sites/all/themes/idoctor_theme/image/vosstanovlenie-sispleya-3_sm.jpg" alt="">
            <p class="discriptionBanner">Нанесение<br> поляризационной пленки</p>
          </div>
          <div class="banner">
            <img src="/sites/all/themes/idoctor_theme/image/vosstanovlenie-sispleya-4_sm.jpg" alt="">
            <p class="discriptionBanner">Приклеивание рамки</p>
          </div>
          <div class="banner">
            <img src="/sites/all/themes/idoctor_theme/image/vosstanovlenie-sispleya-5_sm.jpg" alt="">
            <p class="discriptionBanner">Закладка в автоклав</p>
          </div>
          <div class="banner">
            <img src="/sites/all/themes/idoctor_theme/image/vosstanovlenie-sispleya-6_sm.jpg" alt="">
            <p class="discriptionBanner">Проверка работы<br> дисплея</p>
          </div>
        </div>
        <p class="heading">
          Мы делаем замену только верхнего стекла, оно по качеству такое же, как и Ваше разбитое, сам экран остается Ваш (оригинальный), а это значит, что он заводской оригинал. Новое стекло будет установлено по заводским технологиям и на специальном оборудовании, что обеспечивает надежную склейку стекла и совершенно исключит попадание пыли, а также обеспечить высокую цветопередачу без искажения цветов.
        </p>
      </div>
      <div class="modal-footer">
       <h4>Как осуществляется процесс переклейки дисплея</h4>
       <ul class="repDispModal">
         <li>
           <h5>Принимаем</h5>
           <p class="content">Мы принимаем дисплей, тестируем, если дисплей в рабочем состоянии, начинаем его переклейку</p>
         </li>
         <li>
           <h5>Переклеиваем</h5>
           <p class="content">Осуществляем переклейку разбитого стекла IPhone от 2 до 5 рабочих дней</p>
         </li>
         <li>
           <h5>Устанавливаем</h5>
           <p class="content">Устанавливаем на Ваш IPhone дисплейный модуль с новым качественным оригинальным стеклом</p>
         </li>
         <li>
           <h5>Готово!</h5>
           <p class="content">Вы осуществляете оплату и радуетесь новому стеклу на Вашем IPhone</p>
         </li>
       </ul>
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>      
</div>