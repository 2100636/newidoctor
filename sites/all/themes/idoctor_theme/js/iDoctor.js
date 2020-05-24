
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





// Плавный якорь КАК НАС НАЙТИ?
$(".find-us a.green").on("click", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').clearQueue().animate({scrollTop: top-100}, 2000);
  $(document).on("scroll", onScroll);});


// Плавный якорь НОВЫЙ ОТЗЫВ!
$("a.add_comment_scroll").on("click", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').clearQueue().animate({scrollTop: top-100}, 500);
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





// Вывод моделей

$('#device_iphone').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_iphone').css('display', 'block');
})

$('#device_ipad').on('click', function() {
 $('#dinamicBlock2 .models').css('display', 'none');
 $('#dinamicBlock2 .models_ipad').css('display', 'block');
})

$('#device_apple_watch').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_apple_watch').css('display', 'block');
})

$('#device_macbook').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_macbook').css('display', 'block');
})



$('#device_samsung').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_samsung').css('display', 'block');
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
$('#device_asus').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_asus').css('display', 'block');
})
$('#device_meizu').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_meizu').css('display', 'block');
})
$('#device_zte').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_zte').css('display', 'block');
})
$('#device_lenovo').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_lenovo').css('display', 'block');
})
$('#device_sony').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_sony').css('display', 'block');
})
$('#device_oppo').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_oppo').css('display', 'block');
})



// Вывод моделей на мобилке

$('#m_device_iphone').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_iphone').css('display', 'block');
})
$('#m_device_ipad').on('click', function() {
 $('#dinamicBlock2 .models').css('display', 'none');
 $('#dinamicBlock2 .models_ipad').css('display', 'block');
})
$('#m_device_macbook').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_macbook').css('display', 'block');
})
$('#m_device_apple_watch').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_apple_watch').css('display', 'block');
})

$('#m_device_samsung').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_samsung').css('display', 'block');
})
$('#m_device_xiaomi').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_xiaomi').css('display', 'block');
})
$('#m_device_honor').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_honor').css('display', 'block');
})
$('#m_device_huawei').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_huawei').css('display', 'block');
})
$('#m_device_asus').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_asus').css('display', 'block');
})
$('#m_device_meizu').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_meizu').css('display', 'block');
})
$('#m_device_zte').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_zte').css('display', 'block');
})
$('#m_device_lenovo').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_lenovo').css('display', 'block');
})
$('#m_device_sony').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_sony').css('display', 'block');
})
$('#m_device_oppo').on('click', function() {
  $('#dinamicBlock2 .models').css('display', 'none');
  $('#dinamicBlock2 .models_oppo').css('display', 'block');
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
      'model' : 'Ремонт iPhone 4',
      'url' : '/node/71/'
    },
    1 : {
      'model' : 'Ремонт iPhone 4s',
      'url' : '/node/89/'
    }, 
    2 : {
      'model' : 'Ремонт iPhone 5',
      'url' : '/node/72/'
    }, 
    3 : {
      'model' : 'Ремонт iPhone 5c',
      'url' : '/node/90/'
    }, 
    4 : {
      'model' : 'Ремонт iPhone 5s',
      'url' : '/node/91/'
    }, 
    5 : {
      'model' : 'Ремонт iPhone 6',
      'url' : '/node/92/'
    }, 
    6 : {
      'model' : 'Ремонт iPhone 6 plus',
      'url' : '/node/94/'
    }, 
    7 : {
      'model' : 'Ремонт iPhone 6s',
      'url' : '/node/93/'
    }, 
    8 : {
      'model' : 'Ремонт iPhone 6s plus',
      'url' : '/node/95/'
    },
    9 : {
      'model' : 'Ремонт iPhone SE',
      'url' : '/node/96/'
    },
    10 : {
      'model' : 'Ремонт iPhone 7',
      'url' : '/node/60/'
    }, 
    11 : {
      'model' : 'Ремонт iPhone 7 Plus',
      'url' : '/node/97/'
    }, 
    12 : {
      'model' : 'Ремонт iPhone 8',
      'url' : '/node/59/'
    }, 
    13 : {
      'model' : 'Ремонт iPhone 8 Plus',
      'url' : '/node/98/'
    }, 
    14 : {
      'model' : 'Ремонт iPhone X',
      'url' : '/node/99/'
    }, 
    15 : {
      'model' : 'Ремонт iPhone Xs',
      'url' : '/node/100/'
    }, 
    16 : {
      'model' : 'Ремонт iPhone XS Max',
      'url' : '/node/101/'
    }, 
    17 : {
      'model' : 'Ремонт iPhone Xr',
      'url' : '/node/102/'
    },
    18 : {
      'model' : 'Ремонт iPhone 11',
      'url' : '/node/103/'
    },
    19 : {
      'model' : 'Ремонт iPhone 11 pro',
      'url' : '/node/104/'
    },
    20 : {
      'model' : 'Ремонт iPhone 11 pro max',
      'url' : '/node/105/'
    }
  },
  'iPad' : {
    0 : {
      'model' : 'Ремонт iPad 2',
      'url' : '/node/106/'
    },
    1 : {
      'model' : 'Ремонт iPad 3',
      'url' : '/node/107/'
    },
    2 : {
      'model' : 'Ремонт iPad 4',
      'url' : '/node/108/'
    },
    3 : {
      'model' : 'Ремонт iPad mini',
      'url' : '/node/109/'
    },
    4 : {
      'model' : 'Ремонт iPad mini 2',
      'url' : '/node/110/'
    },
    5 : {
      'model' : 'Ремонт iPad Mini 3',
      'url' : '/node/111/'
    },
    6 : {
      'model' : 'Ремонт iPad mini 4',
      'url' : '/node/112/'
    },
    7 : {
      'model' : 'Ремонт iPad Air',
      'url' : '/node/113/'
    },
    8 : {
      'model' : 'Ремонт iPad Air 2',
      'url' : '/node/114/'
    },
    9 : {
      'model' : 'Ремонт iPad Pro',
      'url' : '/node/115/'
    }
  },
  'MacBook' : {
    0 : {
      'model': 'Ремонт MacBook Air 11"', 
      'url' : '/node/116/'
    },
    1 : {
      'model' : 'Ремонт MacBook Air 13"', 
      'url' : '/node/117/'
    },
    2 : {
      'model' : 'Ремонт MacBook Air 15"',
      'url' : '/node/118/'
    }
  },
  'Apple Watch' : {
    0 : {
      'model' : 'Ремонт Apple Watch Series 1',
      'url' : '/node/119/'
    },
    1 : {
      'model' : 'Ремонт Apple Watch Series 2',
      'url' : '/node/120/'
    },
    2 : {
      'model' : 'Ремонт Apple Watch Series 3',
      'url' : '/node/121/'
    },
    3 : {
      'model' : 'Ремонт Apple Watch Series 4',
      'url' : '/node/122/'
    },
    4 : {
      'model' : 'Ремонт Apple Watch Series 5',
      'url' : '/node/123/'
    }
  },
  'Samsung' : {
    0 : {
      'model' : 'Ремонт Samsung Galaxy S6',
      'url' : '/node/130/'
    },
    1 : {
      'model' : 'Ремонт Samsung Galaxy S6 Edge',
      'url' : '/node/131/'
    },
    2 : {
      'model' : 'Ремонт Samsung Galaxy S6 Edge Plus',
      'url' : '/node/132/'
    },
    3 : {
      'model' : 'Ремонт Samsung Galaxy S3',
      'url' : '/node/133/'
    },
    4 : {
      'model' : 'Ремонт Samsung Galaxy S4',
      'url' : '/node/134/'
    },
    5 : {
      'model' : 'Ремонт Samsung Galaxy S5',
      'url' : '/node/135/'
    },
    6 : {
      'model' : 'Ремонт Samsung Galaxy A6',
      'url' : '/node/136/'
    },
    7 : {
      'model' : 'Ремонт Samsung Galaxy A6 Plus',
      'url' : '/node/137/'
    },
    8 : {
      'model' : 'Ремонт Samsung Galaxy A9',
      'url' : '/node/138/'
    },
    9 : {
      'model' : 'Ремонт Samsung Galaxy A30',
      'url' : '/node/139/'
    },
    10 : {
      'model' : 'Ремонт Samsung Galaxy A40',
      'url' : '/node/140/'
    },
    11 : {
      'model' : 'Ремонт Samsung Galaxy A50',
      'url' : '/node/141/'
    },
    12 : {
      'model' : 'Ремонт Samsung Galaxy Note 8',
      'url' : '/node/142/'
    },
    13 : {
      'model' : 'Ремонт Samsung Galaxy Note 9',
      'url' : '/node/143/'
    },
    14 : {
      'model' : 'Ремонт Samsung Galaxy S9',
      'url' : '/node/144/'
    },
    15 : {
      'model' : 'Ремонт Samsung Galaxy S9 Plus',
      'url' : '/node/145/'
    },
    16 : {
      'model' : 'Ремонт Samsung Galaxy S7',
      'url' : '/node/146/'
    },
    17 : {
      'model' : 'Ремонт Samsung Galaxy S7 Edge',
      'url' : '/node/147/'
    },
    18 : {
      'model' : 'Ремонт Samsung Galaxy S8',
      'url' : '/node/148/'
    },
    19 : {
      'model' : 'Ремонт Samsung Galaxy S8 Plus',
      'url' : '/node/149/'
    },
    20 : {
      'model' : 'Ремонт Samsung Galaxy J1',
      'url' : '/node/150/'
    },
    21 : {
      'model' : 'Ремонт Samsung Galaxy J2',
      'url' : '/node/151/'
    },
    22 : {
      'model' : 'Ремонт Samsung Galaxy S10',
      'url' : '/node/152/'
    },
    23 : {
      'model' : 'Ремонт Samsung Galaxy S10 Plus',
      'url' : '/node/153/'
    },
    24 : {
      'model' : 'Ремонт Samsung Galaxy A3',
      'url' : '/node/154/'
    },
    25 : {
      'model' : 'Ремонт Samsung Galaxy A5',
      'url' : '/node/155/'
    },
    26 : {
      'model' : 'Ремонт Samsung Galaxy A7',
      'url' : '/node/156/'
    },
    27 : {
      'model' : 'Ремонт Samsung Galaxy A8',
      'url' : '/node/157/'
    },
    28 : {
      'model' : 'Ремонт Samsung Galaxy J3',
      'url' : '/node/158/'
    },
    29 : {
      'model' : 'Ремонт Samsung Galaxy J4',
      'url' : '/node/159/'
    },
    30 : {
      'model' : 'Ремонт Samsung Galaxy J5',
      'url' : '/node/160/'
    },
    31 : {
      'model' : 'Ремонт Samsung Galaxy J6',
      'url' : '/node/161/'
    },
    32 : {
      'model' : 'Ремонт Samsung Galaxy J7',
      'url' : '/node/162/'
    },
    33 : {
      'model' : 'Ремонт Samsung Galaxy J8',
      'url' : '/node/163/'
    },
    34 : {
      'model' : 'Ремонт Samsung Galaxy Grand 2',
      'url' : '/node/164/'
    }
  },
  'Xiaomi' : {
    0 : {
      'model' : 'Ремонт Xiaomi Mi A1',
      'url' : '/node/165/'
    },
    1 : {
      'model' : 'Ремонт Xiaomi Mi A2 Lite',
      'url' : '/node/166/'
    },
    2 : {
      'model' : 'Ремонт Xiaomi Mi 5',
      'url' : '/node/167/'
    },
    3 : {
      'model' : 'Ремонт Xiaomi Mi 5S',
      'url' : '/node/168/'
    },
    4 : {
      'model' : 'Ремонт Xiaomi Mi 5S Plus',
      'url' : '/node/169/'
    },
    5 : {
      'model' : 'Ремонт Xiaomi Mi Mix 2',
      'url' : '/node/170/'
    },
    6 : {
      'model' : 'Ремонт Xiaomi Mi Note',
      'url' : '/node/171/'
    },
    7 : {
      'model' : 'Ремонт Xiaomi Mi Note 2',
      'url' : '/node/172/'
    },
    8 : {
      'model' : 'Ремонт Xiaomi Mi 4',
      'url' : '/node/173/'
    },
    9 : {
      'model' : 'Ремонт Xiaomi Mi 4i',
      'url' : '/node/174/'
    },
    10 : {
      'model' : 'Ремонт Xiaomi Mi 4C',
      'url' : '/node/175/'
    },
    11 : {
      'model' : 'Ремонт Xiaomi Mi 6',
      'url' : '/node/176/'
    },
    12 : {
      'model' : 'Ремонт Xaiomi Redmi Note 2 Prime',
      'url' : '/node/177/'
    },
    13 : {
      'model' : 'Ремонт Xaiomi Redmi 3',
      'url' : '/node/178/'
    },
    14 : {
      'model' : 'Ремонт Xaiomi Redmi 3S',
      'url' : '/node/179/'
    },
    15 : {
      'model' : 'Ремонт Xaiomi Redmi 4',
      'url' : '/node/180/'
    },
    16 : {
      'model' : 'Ремонт Xaiomi Redmi 4A',
      'url' : '/node/181/'
    },
    17 : {
      'model' : 'Ремонт Xaiomi Redmi 4X',
      'url' : '/node/182/'
    },
    18 : {
      'model' : 'Ремонт Xiaomi Redmi Note 2 Prime',
      'url' : '/node/183/'
    },
    19 : {
      'model' : 'Ремонт Xaiomi Redmi 5A',
      'url' : '/node/184/'
    },
    20 : {
      'model' : 'Ремонт Xaiomi Redmi Note 5A',
      'url' : '/node/185/'
    },
    21 : {
      'model' : 'Ремонт Xiaomi Redmi Note 4',
      'url' : '/node/186/'
    },
    22 : {
      'model' : 'Ремонт Xiaomi Redmi Note 4X',
      'url' : '/node/187/'
    },
    23 : {
      'model' : 'Ремонт Xaiomi Redmi 6',
      'url' : '/node/188/'
    },
    24 : {
      'model' : 'Ремонт Xaiomi Redmi 6A',
      'url' : '/node/189/'
    },
    25 : {
      'model' : 'Ремонт Xaiomi Redmi 7',
      'url' : '/node/190/'
    },
    26 : {
      'model' : 'Ремонт Xaiomi Redmi 7A',
      'url' : '/node/191/'
    },
    27 : {
      'model' : 'Ремонт Xiaomi Redmi Note 5',
      'url' : '/node/192/'
    },
    28 : {
      'model' : 'Ремонт Xiaomi Redmi Note 5 Pro',
      'url' : '/node/193/'
    },
    29 : {
      'model' : 'Ремонт Xiaomi Redmi Note 5 Lite',
      'url' : '/node/194/'
    },
    30 : {
      'model' : 'Ремонт Xiaomi Redmi Note 3',
      'url' : '/node/195/'
    },
    31 : {
      'model' : 'Ремонт Xiaomi Redmi Note 3 Pro',
      'url' : '/node/196/'
    },
    32 : {
      'model' : 'Ремонт Xiaomi Redmi S2',
      'url' : '/node/197/'
    },
    33 : {
      'model' : 'Ремонт Xaiomi Redmi 5 Plus',
      'url' : '/node/198/'
    },
    34 : {
      'model' : 'Ремонт Xiaomi Mi 8',
      'url' : '/node/199/'
    },
    35 : {
      'model' : 'Ремонт Xiaomi Mi 8 Lite',
      'url' : '/node/200/'
    },
    36 : {
      'model' : 'Ремонт Xiaomi Mi 8 Pro',
      'url' : '/node/201/'
    },
    37 : {
      'model' : 'Ремонт Xiaomi Mi 9',
      'url' : '/node/202/'
    },
    38 : {
      'model' : 'Ремонт Xiaomi Mi 9 Lite',
      'url' : '/node/203/'
    },
    39 : {
      'model' : 'Ремонт Xiaomi Mi Mi 9T Pro',
      'url' : '/node/204/'
    },
    40 : {
      'model' : 'Ремонт Xiaomi Mi 8SE',
      'url' : '/node/205/'
    },
    41 : {
      'model' : 'Ремонт Xiaomi Redmi Note 7',
      'url' : '/node/206/'
    },
    42 : {
      'model' : 'Ремонт Xiaomi Black Shark',
      'url' : '/node/207/'
    },
    43 : {
      'model' : 'Ремонт Xiaomi Mi Max',
      'url' : '/node/208/'
    },
    44 : {
      'model' : 'Ремонт Xiaomi Mi Max 2',
      'url' : '/node/209/'
    }
  },
  'Honor' : {
    0 : {
      'model' : 'Ремонт Honor 9',
      'url' : '/node/210/'
    },
    1 : {
      'model' : 'Ремонт Honor 9 Lite',
      'url' : '/node/211/'
    },
    2 : {
      'model' : 'Ремонт Honor 8',
      'url' : '/node/212/'
    },
    3 : {
      'model' : 'Ремонт Honor 8 Pro',
      'url' : '/node/213/'
    },
    4 : {
      'model' : 'Ремонт Honor 5a',
      'url' : '/node/214/'
    },
    5 : {
      'model' : 'Ремонт Honor 6A',
      'url' : '/node/215/'
    },
    6 : {
      'model' : 'Ремонт Honor 3X',
      'url' : '/node/216/'
    },
    7 : {
      'model' : 'Ремонт Honor 4X',
      'url' : '/node/217/'
    },
    8 : {
      'model' : 'Ремонт Honor 5X',
      'url' : '/node/218/'
    },
    9 : {
      'model' : 'Ремонт Honor 6X',
      'url' : '/node/219/'
    },
    10 : {
      'model' : 'Ремонт Honor 7x',
      'url' : '/node/220/'
    },
    11 : {
      'model' : 'Ремонт Honor 7C',
      'url' : '/node/221/'
    },
    12 : {
      'model' : 'Ремонт Honor 7C Lite',
      'url' : '/node/222/'
    },
    13 : {
      'model' : 'Ремонт Honor 7C Pro',
      'url' : '/node/223/'
    },
    14 : {
      'model' : 'Ремонт Honor 7A',
      'url' : '/node/224/'
    },
    15 : {
      'model' : 'Ремонт Honor 7A Pro',
      'url' : '/node/225/'
    },
    16 : {
      'model' : 'Ремонт Honor 3C Lite',
      'url' : '/node/226/'
    },
    17 : {
      'model' : 'Ремонт Honor 4C Pro',
      'url' : '/node/227/'
    },
    18 : {
      'model' : 'Ремонт Honor 8C',
      'url' : '/node/228/'
    },
    19 : {
      'model' : 'Ремонт Honor 5C',
      'url' : '/node/229/'
    },
    20 : {
      'model' : 'Ремонт Honor View 10',
      'url' : '/node/230/'
    },
    21 : {
      'model' : 'Ремонт Honor Play',
      'url' : '/node/231/'
    },
    22 : {
      'model' : 'Ремонт Honor Note 8',
      'url' : '/node/232/'
    },
    23 : {
      'model' : 'Ремонт Honor Magic 2',
      'url' : '/node/233/'
    },
    24 : {
      'model' : 'Ремонт Honor 8X',
      'url' : '/node/234/'
    },
    25 : {
      'model' : 'Ремонт Honor 8X Max',
      'url' : '/node/235/'
    },
    26 : {
      'model' : 'Ремонт Honor 6',
      'url' : '/node/236/'
    },
    27 : {
      'model' : 'Ремонт Honor 6 Plus',
      'url' : '/node/237/'
    },
    28 : {
      'model' : 'Ремонт Honor 10',
      'url' : '/node/238/'
    },
    29 : {
      'model' : 'Ремонт Honor 10 Lite',
      'url' : '/node/239/'
    },
    30 : {
      'model' : 'Ремонт Honor 7',
      'url' : '/node/240/'
    },
    31 : {
      'model' : 'Ремонт Honor 7 Lite',
      'url' : '/node/241/'
    },
    32 : {
      'model' : 'Ремонт Honor 7 Pro',
      'url' : '/node/242/'
    },
    33 : {
      'model' : 'Ремонт Honor 6C',
      'url' : '/node/243/'
    },
    34 : {
      'model' : 'Ремонт Honor 6C Lite',
      'url' : '/node/244/'
    },
    35 : {
      'model' : 'Ремонт Honor 6C Pro',
      'url' : '/node/245/'
    },
    36 : {
      'model' : 'Ремонт Honor 10i',
      'url' : '/node/246/'
    },
    37 : {
      'model' : 'Ремонт Honor View 20',
      'url' : '/node/247/'
    },
    38 : {
      'model' : 'Ремонт Honor 20',
      'url' : '/node/248/'
    },
    39 : {
      'model' : 'Ремонт Honor 20 Pro',
      'url' : '/node/249/'
    },
    40 : {
      'model' : 'Ремонт Honor 8A',
      'url' : '/node/250/'
    },
    41 : {
      'model' : 'Ремонт Honor 8A Pro',
      'url' : '/node/251/'
    },
    42 : {
      'model' : 'Ремонт Honor 8A Lite',
      'url' : '/node/252/'
    }
  },
  'Huawei' : {
    0 : {
      'model' : 'Ремонт Huawei Ascend Mate 2',
      'url' : '/node/254/'
    },
    1 : {
      'model' : 'Ремонт Huawei Ascend Mate 7',
      'url' : '/node/255/'
    },
    2 : {
      'model' : 'Ремонт Huawei P10',
      'url' : '/node/256/'
    },
    3 : {
      'model' : 'Ремонт Huawei P10 Lite',
      'url' : '/node/257/'
    },
    4 : {
      'model' : 'Ремонт Huawei Ascend Mate 10',
      'url' : '/node/258/'
    },
    5 : {
      'model' : 'Ремонт Huawei Ascend Mate 10 Lite',
      'url' : '/node/259/'
    },
    6 : {
      'model' : 'Ремонт Huawei Ascend Mate 10 Pro',
      'url' : '/node/260/'
    },
    7 : {
      'model' : 'Ремонт Huawei Ascend P7',
      'url' : '/node/261/'
    },
    8 : {
      'model' : 'Ремонт Huawei Y5 II',
      'url' : '/node/262/'
    },
    9 : {
      'model' : 'Ремонт Huawei Y3 2017',
      'url' : '/node/263/'
    },
    10 : {
      'model' : 'Ремонт Huawei P20',
      'url' : '/node/264/'
    },
    11 : {
      'model' : 'Ремонт Huawei P20 Lite',
      'url' : '/node/265/'
    },
    12 : {
      'model' : 'Ремонт Huawei P20 Pro',
      'url' : '/node/266/'
    },
    13 : {
      'model' : 'Ремонт Huawei P8 Lite',
      'url' : '/node/267/'
    },
    14 : {
      'model' : 'Ремонт Huawei P9',
      'url' : '/node/268/'
    },
    15 : {
      'model' : 'Ремонт Huawei P9 Lite',
      'url' : '/node/269/'
    },
    16 : {
      'model' : 'Ремонт Huawei P9 Pro',
      'url' : '/node/270/'
    },
    17 : {
      'model' : 'Ремонт Huawei Y9',
      'url' : '/node/271/'
    },
    18 : {
      'model' : 'Ремонт Huawei Y6 Prime',
      'url' : '/node/272/'
    },
    19 : {
      'model' : 'Ремонт Huawei Mate 20',
      'url' : '/node/273/'
    },
    20 : {
      'model' : 'Ремонт Huawei Mate 20 Pro',
      'url' : '/node/274/'
    },
    21 : {
      'model' : 'Ремонт Huawei Mate 20 Lite',
      'url' : '/node/275/'
    },
    22 : {
      'model' : 'Ремонт Huawei Y7',
      'url' : '/node/276/'
    },
    23 : {
      'model' : 'Ремонт Huawei Y5',
      'url' : '/node/277/'
    },
    24 : {
      'model' : 'Ремонт Huawei Y3 II',
      'url' : '/node/278/'
    },
    25 : {
      'model' : 'Ремонт Huawei Nova 2s',
      'url' : '/node/279/'
    },
    26 : {
      'model' : 'Ремонт Huawei Nova 3i',
      'url' : '/node/280/'
    },
    27 : {
      'model' : 'Ремонт Huawei P Smart',
      'url' : '/node/281/'
    },
    28 : {
      'model' : 'Ремонт Huawei Nova 2 Plus',
      'url' : '/node/282/'
    },
    29 : {
      'model' : 'Ремонт Huawei P9 Plus',
      'url' : '/node/283/'
    },
    30 : {
      'model' : 'Ремонт Huawei P10 Plus',
      'url' : '/node/284/'
    },
    31 : {
      'model' : 'Ремонт Huawei Nova 2i',
      'url' : '/node/285/'
    },
    32 : {
      'model' : 'Ремонт Huawei Mate 9',
      'url' : '/node/286/'
    },
    33 : {
      'model' : 'Ремонт Huawei Mate 9 Lite',
      'url' : '/node/287/'
    },
    34 : {
      'model' : 'Ремонт Huawei Mate 9 Pro',
      'url' : '/node/288/'
    }
  },
  'Asus' : {
    0 : {
      'model' : 'Ремонт Asus Zenfone Max',
      'url' : '/node/290/'
    },
    1 : {
      'model' : 'Ремонт Asus Zenfone 2',
      'url' : '/node/291/'
    },
    2 : {
      'model' : 'Ремонт Asus Zenfone 3',
      'url' : '/node/292/'
    },
    3 : {
      'model' : 'Ремонт Asus Zenfone 2 Laser',
      'url' : '/node/293/'
    },
    4 : {
      'model' : 'Ремонт Asus Zenfone 3 Max',
      'url' : '/node/294/'
    }
  },
  'Meizu' : {
    0 : {
      'model' : 'Ремонт Meizu MX4',
      'url' : '/node/296/'
    },
    1 : {
      'model' : 'Ремонт Meizu MX4 PRO',
      'url' : '/node/297/'
    },
    2 : {
      'model' : 'Ремонт Meizu MX 6',
      'url' : '/node/298/'
    },
    3 : {
      'model' : 'Ремонт Meizu U10',
      'url' : '/node/299/'
    },
    4 : {
      'model' : 'Ремонт Meizu U20',
      'url' : '/node/300/'
    },
    5 : {
      'model' : 'Ремонт Meizu M5',
      'url' : '/node/301/'
    },
    6 : {
      'model' : 'Ремонт Meizu M5 Note',
      'url' : '/node/302/'
    },
    7 : {
      'model' : 'Ремонт Meizu M5S',
      'url' : '/node/303/'
    },
    8 : {
      'model' : 'Ремонт Meizu MX2',
      'url' : '/node/304/'
    },
    9 : {
      'model' : 'Ремонт Meizu M3s mini',
      'url' : '/node/305/'
    },
    10 : {
      'model' : 'Ремонт Meizu M3 Note',
      'url' : '/node/306/'
    }
  },
  'ZTE' : {
    0 : {
      'model' : 'Ремонт ZTE Blade V7',
      'url' : '/node/308/'
    },
    1 : {
      'model' : 'Ремонт ZTE Blade V8',
      'url' : '/node/309/'
    },
    2 : {
      'model' : 'Ремонт ZTE Blade X3',
      'url' : '/node/310/'
    },
    3 : {
      'model' : 'Ремонт ZTE Blade A6',
      'url' : '/node/311/'
    },
    4 : {
      'model' : 'Ремонт ZTE Blade A610',
      'url' : '/node/312/'
    }
  },
  'Lenovo' : {
    0 : {
      'model' : 'Ремонт Lenovo P780',
      'url' : '/node/314/'
    },
    1 : {
      'model' : 'Ремонт Lenovo Vibe Z2',
      'url' : '/node/315/'
    },
    2 : {
      'model' : 'Ремонт Lenovo A2010',
      'url' : '/node/316/'
    },
    3 : {
      'model' : 'Ремонт Lenovo P70',
      'url' : '/node/317/'
    },
    4 : {
      'model' : 'Ремонт Lenovo K910 Vibe Z',
      'url' : '/node/318/'
    }
  },
  'Sony' : {
    0 : {
      'model' : 'Ремонт Sony Xperia Z3',
      'url' : '/node/320/'
    },
    1 : {
      'model' : 'Ремонт Sony Xperia Z3 Compact',
      'url' : '/node/321/'
    },
    2 : {
      'model' : 'Ремонт Sony Xperia Z',
      'url' : '/node/322/'
    },
    3 : {
      'model' : 'Ремонт Sony Xperia Z1',
      'url' : '/node/323/'
    },
    4 : {
      'model' : 'Ремонт Sony Xperia Z2',
      'url' : '/node/324/'
    },
    5 : {
      'model' : 'Ремонт Sony Xperia Z5',
      'url' : '/node/325/'
    }
  },
  'Oppo' : {
    0 : {
      'model' : 'Ремонт Oppo А5 2020',
      'url' : '/node/327/'
    },
    1 : {
      'model' : 'Ремонт Oppo А9 2020',
      'url' : '/node/328/'
    },
    2 : {
      'model' : 'Ремонт Oppo Realme 5',
      'url' : '/node/329/'
    },
    3 : {
      'model' : 'Ремонт Oppo Reno 2',
      'url' : '/node/330/'
    },
    4 : {
      'model' : 'Ремонт Oppo Viva Y17',
      'url' : '/node/331/'
    },
    5 : {
      'model' : 'Ремонт Oppo Reno 2z',
      'url' : '/node/332/'
    }
  },
  'Планшеты' : {
    0 : {
      'model' : 'Ремонт LG',
      'url' : '/node/333/'
    },
    1 : {
      'model' : 'Ремонт Asus',
      'url' : '/node/334/'
    },
    2 : {
      'model' : 'Ремонт Nokia',
      'url' : '/node/335/'
    },
    3 : {
      'model' : 'Ремонт Lenovo',
      'url' : '/node/336/'
    },
    4 : {
      'model' : 'Ремонт Samsung',
      'url' : '/node/337/'
    },
    5 : {
      'model' : 'Ремонт Xiaomi',
      'url' : '/node/338/'
    },
    6 : {
      'model' : 'Ремонт Huawei',
      'url' : '/node/339/'
    },
    7 : {
      'model' : 'Ремонт Sony',
      'url' : '/node/340/'
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