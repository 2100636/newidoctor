
(function($) {



 // Карусели
 $(document).ready(function(){
  $(".masters .container #block-views-masters-block .view-masters .owl-carousel").owlCarousel({
    loop:true, 
    items : 4,
    autoplay : true,
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
    autoplay : true,
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

// $('.topModelsItem:nth-child(1)').on('click', function() {
//   $('.selectedDevice').css('left', '184px').css('top', '171px');
// });
// $('.topModelsItem:nth-child(2)').on('click', function() {
//   $('.selectedDevice').css('left', '619px').css('top', '171px');
// });
// $('.topModelsItem:nth-child(3)').on('click', function() {
//   $('.selectedDevice').css('left', '1059px').css('top', '171px');
// });

// $('.bottomModelsItem:nth-child(1)').on('click', function() {
//   $('.selectedDevice').css('left', '183px').css('top', '712px');
// });
// $('.bottomModelsItem:nth-child(2)').on('click', function() {
//   $('.selectedDevice').css('left', '407px').css('top', '712px');
// });
// $('.bottomModelsItem:nth-child(3)').on('click', function() {
//   $('.selectedDevice').css('left', '620px').css('top', '712px');
// });
// $('.bottomModelsItem:nth-child(4)').on('click', function() {
//   $('.selectedDevice').css('left', '834px').css('top', '712px');
// });
// $('.bottomModelsItem:nth-child(5)').on('click', function() {
//   $('.selectedDevice').css('left', '1057px').css('top', '712px');
// });





// Вывод моделей

$('#device_iphone').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_iphone').css('display', 'flex');
})
$('#device_ipad').on('click', function() {
 $('#dinamicBlock2 .models').css('display', 'none');
 $('#dinamicBlock2 .models_ipad').css('display', 'flex');
})
$('#device_macbook').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_macbook').css('display', 'flex');
})
$('#device_xiaomi').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_xiaomi').css('display', 'flex');
})
$('#device_honor').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_honor').css('display', 'flex');
})
$('#device_huawei').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_huawei').css('display', 'flex');
})
$('#device_meizu').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_meizu').css('display', 'flex');
})
$('#device_samsung').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_samsung').css('display', 'flex');
})



// Вывод моделей на мобилке

$('li#device_iphone').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_iphone').css('display', 'flex');
})
$('li#device_ipad').on('click', function() {
 $('#dinamicBlock2 .models').css('display', 'none');
 $('#dinamicBlock2 .models_ipad').css('display', 'flex');
})
$('li#device_macbook').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_macbook').css('display', 'flex');
})
$('li#device_xiaomi').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_xiaomi').css('display', 'flex');
})
$('li#device_honor').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_honor').css('display', 'flex');
})
$('li#device_huawei').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_huawei').css('display', 'flex');
})
$('li#device_meizu').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_meizu').css('display', 'flex');
})
$('li#device_samsung').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_samsung').css('display', 'flex');
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
  },
  'Samsung' : {
    0 : {
      'model' : 'Ремонт Samsung Galaxy S6',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Samsung Galaxy S6 Edge',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Samsung Galaxy S6 Edge Plus',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Samsung Galaxy S3',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Samsung Galaxy S4',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Samsung Galaxy S5',
      'url' : 'node/20/'
    },
    6 : {
      'model' : 'Ремонт Samsung Galaxy A9',
      'url' : 'node/21/'
    },
    7 : {
      'model' : 'Ремонт Samsung Galaxy A30',
      'url' : 'node/20/'
    },
    8 : {
      'model' : 'Ремонт Samsung Galaxy A40',
      'url' : 'node/21/'
    },
    9 : {
      'model' : 'Ремонт Samsung Galaxy A50',
      'url' : 'node/20/'
    },
    10 : {
      'model' : 'Ремонт Samsung Galaxy Grand 2',
      'url' : 'node/21/'
    },
    11 : {
      'model' : 'Ремонт Samsung Galaxy Note 8',
      'url' : 'node/21/'
    },
    12 : {
      'model' : 'Ремонт Samsung Galaxy Note 9',
      'url' : 'node/20/'
    },
    13 : {
      'model' : 'Ремонт Samsung Galaxy S9',
      'url' : 'node/21/'
    },
    14 : {
      'model' : 'Ремонт Samsung Galaxy S9 Plus',
      'url' : 'node/20/'
    },
    15 : {
      'model' : 'Ремонт Samsung Galaxy S7',
      'url' : 'node/21/'
    },
    16 : {
      'model' : 'Ремонт Samsung Galaxy S7 Edge',
      'url' : 'node/21/'
    },
    17 : {
      'model' : 'Ремонт Samsung Galaxy J1',
      'url' : 'node/20/'
    },
    18 : {
      'model' : 'Ремонт Samsung Galaxy J2',
      'url' : 'node/21/'
    },
    19 : {
      'model' : 'Ремонт Samsung Galaxy A3',
      'url' : 'node/20/'
    },
    20 : {
      'model' : 'Ремонт Samsung Galaxy A5',
      'url' : 'node/21/'
    },
    21 : {
      'model' : 'Ремонт Samsung Galaxy A7',
      'url' : 'node/21/'
    },
    22 : {
      'model' : 'Ремонт Samsung Galaxy A8',
      'url' : 'node/21/'
    },
    23 : {
      'model' : 'Ремонт Samsung Galaxy J3',
      'url' : 'node/20/'
    },
    24 : {
      'model' : 'Ремонт Samsung Galaxy J4',
      'url' : 'node/21/'
    },
    25 : {
      'model' : 'Ремонт Samsung Galaxy J5',
      'url' : 'node/20/'
    },
    26 : {
      'model' : 'Ремонт Samsung Galaxy J6',
      'url' : 'node/21/'
    },
    27 : {
      'model' : 'Ремонт Samsung Galaxy J7',
      'url' : 'node/20/'
    },
    28 : {
      'model' : 'Ремонт Samsung Galaxy J8',
      'url' : 'node/21/'
    }
  },
  'Xiaomi' : {
    0 : {
      'model' : 'Ремонт Xiaomi Mi A1',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Xiaomi Mi A2 Lite',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Xiaomi Mi 5',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Xiaomi Mi 5S',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Xiaomi Mi 5S Plus',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Xiaomi Mi Mix 2',
      'url' : 'node/17/'
    },
    6 : {
      'model' : 'Ремонт Xiaomi Mi Note',
      'url' : 'node/18/'
    },
    7 : {
      'model' : 'Ремонт Xiaomi Mi Note 2',
      'url' : 'node/19/'
    },
    8 : {
      'model' : 'Ремонт Xiaomi Mi 4',
      'url' : 'node/20/'
    },
    9 : {
      'model' : 'Ремонт Xiaomi Mi 4i',
      'url' : 'node/21/'
    },
    10 : {
      'model' : 'Ремонт Xiaomi Mi 4C',
      'url' : 'node/17/'
    },
    11 : {
      'model' : 'Ремонт Xiaomi Mi 6',
      'url' : 'node/18/'
    },
    12 : {
      'model' : 'Ремонт Xaiomi Redmi 3',
      'url' : 'node/19/'
    },
    13 : {
      'model' : 'Ремонт Xaiomi Redmi 3S',
      'url' : 'node/20/'
    },
    14 : {
      'model' : 'Ремонт Xaiomi Redmi 4',
      'url' : 'node/21/'
    },
    15 : {
      'model' : 'Ремонт Xaiomi Redmi 4A',
      'url' : 'node/17/'
    },
    16 : {
      'model' : 'Ремонт Xaiomi Redmi 4X',
      'url' : 'node/18/'
    },
    17 : {
      'model' : 'Ремонт Xiaomi Redmi Note 2 Prime',
      'url' : 'node/19/'
    },
    18 : {
      'model' : 'Ремонт Xaiomi Redmi 5A',
      'url' : 'node/20/'
    },
    19 : {
      'model' : 'Ремонт Xaiomi Redmi Note 5A',
      'url' : 'node/21/'
    },
    20 : {
      'model' : 'Ремонт Xiaomi Redmi Note 4',
      'url' : 'node/17/'
    },
    21 : {
      'model' : 'Ремонт Xiaomi Redmi Note 4X',
      'url' : 'node/18/'
    },
    22 : {
      'model' : 'Ремонт Xaiomi Redmi 6',
      'url' : 'node/19/'
    },
    23 : {
      'model' : 'Ремонт Xaiomi Redmi 6A',
      'url' : 'node/20/'
    },
    24 : {
      'model' : 'Ремонт Xaiomi Redmi 7',
      'url' : 'node/21/'
    },
    25 : {
      'model' : 'Ремонт Xaiomi Redmi 7A',
      'url' : 'node/17/'
    },
    26 : {
      'model' : 'Ремонт Xiaomi Redmi Note 5',
      'url' : 'node/18/'
    },
    27 : {
      'model' : 'Ремонт Xiaomi Redmi Note 5 Pro',
      'url' : 'node/19/'
    },
    28 : {
      'model' : 'Ремонт Xiaomi Redmi Note 5 Lite',
      'url' : 'node/20/'
    },
    29 : {
      'model' : 'Ремонт Xiaomi Redmi Note 3',
      'url' : 'node/21/'
    },
    30 : {
      'model' : 'Ремонт Xiaomi Redmi Note 3 Pro',
      'url' : 'node/21/'
    },
    31 : {
      'model' : 'Ремонт Xiaomi Redmi S2',
      'url' : 'node/17/'
    },
    32 : {
      'model' : 'Ремонт Xaiomi Redmi 5 Plus',
      'url' : 'node/18/'
    },
    33 : {
      'model' : 'Ремонт Xiaomi Mi 8',
      'url' : 'node/19/'
    },
    34 : {
      'model' : 'Ремонт Xiaomi Mi 8 Lite',
      'url' : 'node/20/'
    },
    35 : {
      'model' : 'Ремонт Xiaomi Mi 8 Pro',
      'url' : 'node/21/'
    },
    36 : {
      'model' : 'Ремонт Xiaomi Mi 9 Lite',
      'url' : 'node/17/'
    },
    37 : {
      'model' : 'Ремонт Xiaomi Mi 9',
      'url' : 'node/18/'
    },
    38 : {
      'model' : 'Ремонт Xiaomi Mi 8se',
      'url' : 'node/19/'
    },
    39 : {
      'model' : 'Ремонт Xiaomi Redmi Note 7',
      'url' : 'node/20/'
    },
    40 : {
      'model' : 'Ремонт Xiaomi Redmi Note 6 Pro',
      'url' : 'node/21/'
    },
    41 : {
      'model' : 'Ремонт Xiaomi Black Shark',
      'url' : 'node/21/'
    },
    42 : {
      'model' : 'Ремонт Xiaomi MI 9T Pro',
      'url' : 'node/20/'
    },
    43 : {
      'model' : 'Ремонт Xiaomi Mi Max',
      'url' : 'node/21/'
    },
    44 : {
      'model' : 'Ремонт Xiaomi Mi Max 2',
      'url' : 'node/21/'
    }
  },
  'Honor' : {
    0 : {
      'model' : 'Ремонт Honor 3X',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Honor 4X',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Honor 5X',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Honor 6X',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Honor 7C',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Honor 7C Lite',
      'url' : 'node/17/'
    },
    6 : {
      'model' : 'Ремонт Honor 7C Pro',
      'url' : 'node/18/'
    },
    7 : {
      'model' : 'Ремонт Honor 7A',
      'url' : 'node/19/'
    },
    8 : {
      'model' : 'Ремонт Honor 7A Pro',
      'url' : 'node/20/'
    },
    9 : {
      'model' : 'Ремонт Honor 3C Lite',
      'url' : 'node/21/'
    },
    10 : {
      'model' : 'Ремонт Honor 4C Pro',
      'url' : 'node/17/'
    },
    11 : {
      'model' : 'Ремонт Honor 8C',
      'url' : 'node/18/'
    },
    12 : {
      'model' : 'Ремонт Honor 5A',
      'url' : 'node/19/'
    },
    13 : {
      'model' : 'Ремонт Honor 5C',
      'url' : 'node/20/'
    },
    14 : {
      'model' : 'Ремонт Honor 7X',
      'url' : 'node/21/'
    },
    15 : {
      'model' : 'Ремонт Honor View 10',
      'url' : 'node/17/'
    },
    16 : {
      'model' : 'Ремонт Honor Play',
      'url' : 'node/18/'
    },
    17 : {
      'model' : 'Ремонт Honor Note 8',
      'url' : 'node/19/'
    },
    18 : {
      'model' : 'Ремонт Honor Magic 2',
      'url' : 'node/20/'
    },
    19 : {
      'model' : 'Ремонт Honor 8X',
      'url' : 'node/21/'
    },
    20 : {
      'model' : 'Ремонт Honor 8X Max',
      'url' : 'node/17/'
    },
    21 : {
      'model' : 'Ремонт Honor 6',
      'url' : 'node/18/'
    },
    22 : {
      'model' : 'Ремонт Honor 6 Plus',
      'url' : 'node/19/'
    },
    23 : {
      'model' : 'Ремонт Honor 10',
      'url' : 'node/20/'
    },
    24 : {
      'model' : 'Ремонт Honor 10 Lite',
      'url' : 'node/21/'
    },
    25 : {
      'model' : 'Ремонт Honor 7',
      'url' : 'node/17/'
    },
    26 : {
      'model' : 'Ремонт Honor 7 Lite',
      'url' : 'node/18/'
    },
    27 : {
      'model' : 'Ремонт Honor 6C',
      'url' : 'node/19/'
    },
    28 : {
      'model' : 'Ремонт Honor 6C Lite',
      'url' : 'node/20/'
    },
    29 : {
      'model' : 'Ремонт Honor 6C Pro',
      'url' : 'node/21/'
    },
    30 : {
      'model' : 'Ремонт Honor 10i',
      'url' : 'node/21/'
    },
    31 : {
      'model' : 'Ремонт Honor View 20',
      'url' : 'node/17/'
    },
    32 : {
      'model' : 'Ремонт Honor 20',
      'url' : 'node/18/'
    },
    33 : {
      'model' : 'Ремонт Honor 20 Pro',
      'url' : 'node/19/'
    },
    34 : {
      'model' : 'Ремонт Honor 8A',
      'url' : 'node/20/'
    },
    35 : {
      'model' : 'Ремонт Honor 8A Pro',
      'url' : 'node/21/'
    },
    36 : {
      'model' : 'Ремонт Honor 8A Lite',
      'url' : 'node/17/'
    }
  },
  'Huawei' : {
    0 : {
      'model' : 'Ремонт Huawei Ascend Mate 2',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Huawei Ascend Mate 7',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Huawei P10',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Huawei P10 Lite',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Huawei Ascend Mate 10',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Huawei Ascend Mate 10 Lite',
      'url' : 'node/17/'
    },
    6 : {
      'model' : 'Ремонт Huawei Ascend Mate 10 Pro',
      'url' : 'node/18/'
    },
    7 : {
      'model' : 'Ремонт Huawei Ascend P7',
      'url' : 'node/19/'
    },
    8 : {
      'model' : 'Ремонт Huawei Y5 II',
      'url' : 'node/20/'
    },
    9 : {
      'model' : 'Ремонт Huawei Y3 2017',
      'url' : 'node/21/'
    },
    10 : {
      'model' : 'Ремонт Huawei Nova',
      'url' : 'node/17/'
    },
    11 : {
      'model' : 'Ремонт Huawei Nova 2',
      'url' : 'node/18/'
    },
    12 : {
      'model' : 'Ремонт Huawei Nova 3',
      'url' : 'node/19/'
    },
    13 : {
      'model' : 'Ремонт Huawei P20',
      'url' : 'node/20/'
    },
    14 : {
      'model' : 'Ремонт Huawei P20 Lite',
      'url' : 'node/21/'
    },
    15 : {
      'model' : 'Ремонт Huawei P20 Pro',
      'url' : 'node/17/'
    },
    16 : {
      'model' : 'Ремонт Huawei P8 Lite',
      'url' : 'node/18/'
    },
    17 : {
      'model' : 'Ремонт Huawei P9',
      'url' : 'node/19/'
    },
    18 : {
      'model' : 'Ремонт Huawei P9 Lite',
      'url' : 'node/20/'
    },
    19 : {
      'model' : 'Ремонт Huawei P9 Pro',
      'url' : 'node/21/'
    },
    20 : {
      'model' : 'Ремонт Huawei Y9',
      'url' : 'node/17/'
    },
    21 : {
      'model' : 'Ремонт Huawei Y6 Prime',
      'url' : 'node/18/'
    },
    22 : {
      'model' : 'Ремонт Huawei Mate 20',
      'url' : 'node/19/'
    },
    23 : {
      'model' : 'Ремонт Huawei Mate 20 Pro',
      'url' : 'node/20/'
    },
    24 : {
      'model' : 'Ремонт Huawei Mate 20 Lite',
      'url' : 'node/21/'
    },
    25 : {
      'model' : 'Ремонт Huawei Y7',
      'url' : 'node/17/'
    },
    26 : {
      'model' : 'Ремонт Huawei Y5',
      'url' : 'node/18/'
    },
    27 : {
      'model' : 'Ремонт Huawei Y3 II',
      'url' : 'node/19/'
    },
    28 : {
      'model' : 'Ремонт Huawei Nova 2s',
      'url' : 'node/20/'
    },
    29 : {
      'model' : 'Ремонт Huawei Nova 3i',
      'url' : 'node/21/'
    },
    30 : {
      'model' : 'Ремонт Huawei P Smart',
      'url' : 'node/21/'
    },
    31 : {
      'model' : 'Ремонт Huawei Nova 2 Plus',
      'url' : 'node/17/'
    },
    32 : {
      'model' : 'Ремонт Huawei P9 Plus',
      'url' : 'node/18/'
    },
    33 : {
      'model' : 'Ремонт Huawei P10 Plus',
      'url' : 'node/19/'
    },
    34 : {
      'model' : 'Ремонт Huawei Nova 2i',
      'url' : 'node/20/'
    },
    35 : {
      'model' : 'Ремонт Huawei Mate 9',
      'url' : 'node/21/'
    },
    36 : {
      'model' : 'Ремонт Huawei Mate 9 Lite',
      'url' : 'node/17/'
    },
    37 : {
      'model' : 'Ремонт Huawei Mate 9 Pro',
      'url' : 'node/17/'
    }
  },
  'Meizu' : {
    0 : {
      'model' : 'Ремонт Meizu MX4',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Meizu MX4 PRO',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Meizu MX 6',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Meizu U10',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Meizu U20',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Meizu M5',
      'url' : 'node/17/'
    },
    6 : {
      'model' : 'Ремонт Meizu M5 Note',
      'url' : 'node/18/'
    },
    7 : {
      'model' : 'Ремонт Meizu M5S',
      'url' : 'node/19/'
    },
    8 : {
      'model' : 'Ремонт Meizu MX2',
      'url' : 'node/20/'
    },
    9 : {
      'model' : 'Ремонт Meizu M3s mini',
      'url' : 'node/21/'
    },
    10 : {
      'model' : 'Ремонт Meizu M3 Note',
      'url' : 'node/17/'
    }
  },
  'Asus' : {
    0 : {
      'model' : 'Ремонт Asus Zenfone Max',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Asus Zenfone 2',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Asus Zenfone 3',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Asus Zenfone 2 Laser',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Asus Zenfone 3 Max',
      'url' : 'node/21/'
    }
  },
  'ZTE' : {
    0 : {
      'model' : 'Ремонт ZTE Blade V7',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт ZTE Blade V8',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт ZTE Blade X3',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт ZTE Blade A6',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт ZTE Blade A610',
      'url' : 'node/21/'
    }
  },
  'Lenovo' : {
    0 : {
      'model' : 'Ремонт Lenovo P780',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Lenovo Vibe Z2',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Lenovo A2010',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Lenovo P70',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Lenovo K910 Vibe Z',
      'url' : 'node/21/'
    }
  },
  'Sony' : {
    0 : {
      'model' : 'Ремонт Sony Xperia Z3',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Sony Xperia Z3 Compact',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Sony Xperia Z',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Sony Xperia Z1',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Sony Xperia Z2',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Sony Xperia Z5',
      'url' : 'node/21/'
    }
  },
  'Планшеты' : {
    0 : {
      'model' : 'Ремонт LG',
      'url' : 'node/17/'
    },
    1 : {
      'model' : 'Ремонт Asus',
      'url' : 'node/18/'
    },
    2 : {
      'model' : 'Ремонт Nokia',
      'url' : 'node/19/'
    },
    3 : {
      'model' : 'Ремонт Samsung',
      'url' : 'node/20/'
    },
    4 : {
      'model' : 'Ремонт Xiaomi',
      'url' : 'node/21/'
    },
    5 : {
      'model' : 'Ремонт Huawei',
      'url' : 'node/21/'
    },
    6 : {
      'model' : 'Ремонт Sony',
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



// Главное меню

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