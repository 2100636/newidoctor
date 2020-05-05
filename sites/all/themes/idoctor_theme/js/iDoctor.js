
(function($) {



 // Карусели
 $(document).ready(function(){
  $(".masters .container #block-views-masters-block .view-masters .owl-carousel").owlCarousel({
    loop:true, 
    items : 4,
    autoplay : false,
    dots: true,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    nav : true,
    responsive:{
      0:{items:1},
      767:{items:2},
      991:{items:3},
      1499:{items:4}
    }
  });

  $(".equipment .owl-carousel").owlCarousel({
    loop:true, 
    items : 5,
    autoplay : false,
    dots: true,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    nav : true,
    responsive:{
      0:{items:1},
      767:{items:2},
      991:{items:3},
      1199:{items:4},
      1499:{items:4},
      1709:{items:5}
    }
  });
});





// Плавный якорь
$(".find-us a.green").on("click", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').clearQueue().animate({scrollTop: top-100}, 2000);
  $(document).on("scroll", onScroll);});

$("a.add_comment_scroll").on("click", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').clearQueue().animate({scrollTop: top-100}, 2000);
  $(document).on("scroll", onScroll);});





// Проблемная модалка
$('.problemsButton').on('click', function() {
  var a = $('input:checked');
  var problems = [];
  for (var i = 0; i < a.length; i++) {
    problems.push((i + 1) + '. ' + a[i].value);
    // $('.problemsBlock').text(problems.join("; <br>"));
    $('.problemsBlock').val(problems.join("; \n"));
  }
  $('#problemsModal').modal();
});





// Проблемный блок показать/скрыть
$('.mobileOpenButton').on('click', function() {
  $('.selectBreakageContent').css('height', 'auto');
  $(this).css('display', 'none');
  $('.mobileCloseButton').css('display', 'block');
});

$('.mobileCloseButton').on('click', function() {
  $('.selectBreakageContent').css('height', '404');
  $(this).css('display', 'none');
  $('.mobileOpenButton').css('display', 'block');
});



$('.chooseBlock').on('click', function() {
  if($('#dinamicBlock2').css('display') == 'none') {
   $('p.choose').text('Скрыть список');
 }
 else {
   $('p.choose').text('Выберите устройство');
 }
 $('#dinamicBlock2').slideToggle(500);
});



// Блок выбора устройства - Позиция логотипа

$('.topModelsItem:nth-child(1)').on('click', function() {
  $('.selectedDevice').css('left', '184px').css('top', '171px');
});
$('.topModelsItem:nth-child(2)').on('click', function() {
  $('.selectedDevice').css('left', '619px').css('top', '171px');
});
$('.topModelsItem:nth-child(3)').on('click', function() {
  $('.selectedDevice').css('left', '1059px').css('top', '171px');
});

$('.bottomModelsItem:nth-child(1)').on('click', function() {
  $('.selectedDevice').css('left', '183px').css('top', '712px');
});
$('.bottomModelsItem:nth-child(2)').on('click', function() {
  $('.selectedDevice').css('left', '407px').css('top', '712px');
});
$('.bottomModelsItem:nth-child(3)').on('click', function() {
  $('.selectedDevice').css('left', '620px').css('top', '712px');
});
$('.bottomModelsItem:nth-child(4)').on('click', function() {
  $('.selectedDevice').css('left', '834px').css('top', '712px');
});
$('.bottomModelsItem:nth-child(5)').on('click', function() {
  $('.selectedDevice').css('left', '1057px').css('top', '712px');
});





// Вывод моделей

$('#device_iphone').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_iphone').css('display', 'block');
})
$('#device_ipad').on('click', function() {
 $('#dinamicBlock2 .models').css('display', 'none');
 $('#dinamicBlock2 .models_ipad').css('display', 'block');
})
$('#device_macbook').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_macbook').css('display', 'block');
})
$('#device_xiaomi').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_xiaomi').css('display', 'block');
})
$('#device_honor').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_honor').css('display', 'block');
})
$('#device_huawei').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_huawei').css('display', 'block');
})
$('#device_meizu').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_meizu').css('display', 'block');
})
$('#device_samsung').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_samsung').css('display', 'block');
})






// Создание нового select с соответствующими моделями

$('.select').change(function() {
  $('.new_select').remove();
  $('.select').after('<select class="new_select"><option>Выберите модель</option></select>');
  for (var key in devices) {
    for (var subKey in devices[key]) {
      if($('.select').val() == key) {
        $('.new_select').append('<option>' + (devices[key][subKey]['model']) + '</option>');
      }
    }
  }
  $('.new_select').change(function() {
    for (var key in devices) {
      for (var subKey in devices[key]) {
        if($('.new_select').val() == devices[key][subKey]['model']) {
          location.href = (devices[key][subKey]['url']);
        }
      }
    }
  })
})


var devices = {
  'iPhone' : {
    0 : {
      'model' : 'Ремонт iPhone 4, 4s',
      'url' : '/node/71'
    },
    1 : {
      'model' : 'Ремонт iPhone 5, 5с, 5s',
      'url' : '/node/72'
    }, 
    2 : {
      'model' : 'Ремонт iPhone 6, 6 Plus',
      'url' : '/node/3'
    }, 
    3 : {
      'model' : 'Ремонт iPhone 6s, 6s Plus',
      'url' : '/node/4'
    }, 
    4 : {
      'model' : 'Ремонт iPhone SE',
      'url' : '/node/5'
    }, 
    5 : {
      'model' : 'Ремонт iPhone 7, 7 Plus',
      'url' : '/node/60'
    }, 
    6 : {
      'model' : 'Ремонт iPhone 8, 8 Plus',
      'url' : '/node/59'
    }, 
    7 : {
      'model' : 'Ремонт iPhone X, XS, XS Max, XR',
      'url' : '/node/8'
    }, 
    9 : {
      'model' : 'Ремонт iPhone 11, 11 PRO, 11 PRO Max',
      'url' : '/node/9'
    },
  },
  'iPad' : {
    0 : {
      'model' : 'Ремонт iPad 2, 3, 4',
      'url' : '/node/10'
    },
    1 : {
      'model' : 'Ремонт iPad Mini, Mini 2, Mini 3, Mini 4',
      'url' : '/node/11'
    },
    2 : {
      'model' : 'Ремонт iPad Air, Air 2',
      'url' : '/node/12'
    },
    3 : {
      'model' : 'Ремонт iPad Pro',
      'url' : '/node/13'
    },
  },
  'MacBook' : {
    0 : {
      'model': 'Ремонт MacBook Air 11"', 
      'url' : '/node/14/'
    },
    1 : {
      'model' : 'Ремонт MacBook Air 13"', 
      'url' : '/node/15/'
    },
    2 : {
      'model' : 'Ремонт MacBook Air 15"',
      'url' : '/node/16/'
    }
  },
  'Apple Watch' : {
    0 : {
      'model' : 'Ремонт Apple Watch Series 1',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Apple Watch Series 2',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Apple Watch Series 3',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Apple Watch Series 4',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Apple Watch Series 5',
      'url' : 'node/21/'
    }
  }
}




// Показать/Свернуть - Цены в шаблоне Device

$('.allItems p.open_block').on('click', function() {
  $('.wrapper_price_block').css('display', 'flex');
  $(this).css('display', 'none');
  $('p.close_block').css('display', 'inline');
});

$('.allItems p.close_block').on('click', function() {
  $('.wrapper_price_block').css('display', 'none');
  $('p.close_block').css('display', 'none');
  $('p.open_block').css('display', 'inline');
});




$('ul.nav > li').hover(
  function() {
    if ($(window).width() > '768'){
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }
  }, 
  function() {
    if ($(window).width() > '768'){
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    }
  })

  $('a.dropdown-toggle').click(function(){
    console.log($(this));
    if ($(window).width() > '768'){
      console.log($(window).width());
      var url = $(this).attr('href');
      $(location).attr('href',url);
    }
  });






// 20/20

$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.8});


})(jQuery);