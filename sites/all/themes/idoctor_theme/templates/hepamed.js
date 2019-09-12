script>
  (function($) { 
    $(document).ready(function() { 



  $(".sidebar").on("click","a", function (event) {

        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href

        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top; 

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').clearQueue().animate({scrollTop: top+2}, 2000);
        $(document).on("scroll", onScroll);
    }); 


 var menu_selector = ".sidebar"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
 function onScroll(){
  var scroll_top = $(document).scrollTop();
  $(menu_selector + " a").each(function(){
    var hash = $(this).attr("href");
    var target = $(hash);
    if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
      $(menu_selector + " a.active").removeClass("active");
      $(this).addClass("active");
    } else {
      $(this).removeClass("active");
    }
  });
 }

 
  $("a[href^=#]").click(function(e){
    e.preventDefault();
    $(document).off("scroll");

    $(menu_selector + " a.active").removeClass("active");
    var hash = $(this).attr("href");
    var target = $(hash);
    $("html, body").animate({
      scrollTop: target.offset().top
    }, 500, function(){
      window.location.hash = hash;
      $(document).on("scroll", onScroll);
    });
  });

}); 


  $('.sidebarButton').click(function() {
    $(this).fadeOut(300);
    $('.sidebarMobile').css('left', '0').css('transition', 'ease 0.6s');
  });
  $('p.closeBar').click(function() {
    
    $('.sidebarMobile').css('left', '-240px');
    $('.sidebarButton').fadeIn(500);
  });
$(document).click(function(e) {
    if($(".sidebarMobile").css('left') == "0px"){
      if($(e.target).closest('.sidebarMobile').length == 0){
        $('.sidebarMobile').css('left', '-220px');
        $('.sidebarButton').fadeIn(800);
      } 
    }       
  });






  $(".siteForm .submit").click(function() {

      var that = $(this);
      var form = that.parents('.siteForm');
      var reqField = form.find('.reqField');
      var error = false;

      reqField.each(function(i,elem) {

        if ($(elem).val() == "") {
          $(elem).css('border', '1px solid red');
          error = true;
        }
        else {
          $(elem).css('border', '1px solid green');
        }         
      });

      if (error == true) {
        form.find('.errorswrap').html('<div class="errors">Обязательно заполните поле</div>');
        return false;
      }
      else {
        form.find('.errorswrap').html('');
      }

      var str = form.serialize();
      $.ajax({
        type: "POST",
        url: "/mail_send.php",
        data: str,
        success: function(msg) {
          console.log(msg);
          if(msg == 'ok') {
            result = '<div class="ok">Спасибо! Ваше сообщение отправлено.</div>';
            form.find('.fieldsWrapp').html(result);
          }
          else {
            form.find('.errorswrap').html('<div class="errors">'+msg+'</div>');
          }
        }
      });
      return false;
    });

  })(jQuery); 

</script>