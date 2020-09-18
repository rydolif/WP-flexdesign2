$(function() {

//-------------------------------активна ссилка на якій знаходишся для меню---------------------------------------
  $('.nav__lang a').each(function () {
    var location = window.location.href;
    var link = this.href; 
    if(location == link) {
        $(this).addClass('active');
    }
  });


//-------------------------------preloader---------------------------------------
	$('body').addClass('no-scroll');
  
  setTimeout(function() {
    $('#ctn-preloader').addClass('loaded');
    // Una vez haya terminado el preloader aparezca el scroll
    
    if ($('#ctn-preloader').hasClass('loaded')) {
      // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
      $('#preloader').delay(1000).queue(function() {
        $(this).remove();
        $('body').removeClass('no-scroll');
      });
    }
  }, 1000);
  

//-------------------------------hero slider---------------------------------------
	var swiper = new Swiper('.hero__slider', {
	  spaceBetween: 0,
	  effect: 'fade',
	  lazy: true,
	  speed: 2000,
	  autoplay: {
	    delay: 4500,
	    disableOnInteraction: false,
	  },
	});


//-------------------------------fullpage---------------------------------------
	$('#fullpage').fullpage({
	    // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'], // фон цвет
	    anchors: ['firstPage', 'secondPage', 'threePage', 'fourPage', 'lastPage'], // якори
	    menu: '#menu', // меню
	    lazyLoad: true, // оптимизация
	    navigation: true, // навигация
	    // navigationTooltips: ['Мы', 'Портфолио', 'Контакты'], // названия меню
	    showActiveTooltip: true, // меню
	    slidesNavigation: true, // стрелки
	    utoScrolling: false,
		fitToSection: false
	});

	// стрелки
	$('#moveSectionUp').click(function(e){
	    e.preventDefault();
	    $.fn.fullpage.moveSectionUp();
	});

	$('#moveSectionDown').click(function(e){
	    e.preventDefault();
	    $.fn.fullpage.moveSectionDown();
	});


//----------------------------wowJS-------------------------------
  var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       0,          // distance to the element when triggering the animation (default is 0)
      mobile:       true,       // trigger animations on mobile devices (default is true)
      live:         true,       // act on asynchronously loaded content (default is true)
      callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null // optional scroll container selector, otherwise use window
    }
  );
  wow.init();

//-------------------------------попандер---------------------------------------
	$('.modal').popup({
		escape: false,
		blur: false,
		scrolllock: true,
		transition: 'all 0.3s'
	});

//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+00 (000) 000-00-00');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
  }, "Введите Ваш телефон");


  $('input[name="phonepl"]').mask('+0 (000) 000-00-00');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
  }, "Введите Ваш телефон");

  $(".form").each(function(index, el) {
    $(el).addClass('form-' + index);

    $('.form-' + index).validate({
      rules: {
        phone: {
          required: true,
          phoneno: true
        },
        name: 'required',
      },
      messages: {
        name: "Введіть своє ім'я",
				mail: "Введіть свою пошту",
				phone: "Введіть номер телефона",
        name_ru: "Введить свое имя",
				mail_ru: "Введить свою почту",
				phone_ru: "Введить номер телефона",
      },
      submitHandler: function(form) {
        var t = {
          name: jQuery('.form-' + index).find("input[name=name]").val(),
					mail: jQuery('.form-' + index).find("input[name=mail]").val(),
					phone: jQuery('.form-' + index).find("input[name=phone]").val(),
          name_ru: jQuery('.form-' + index).find("input[name=name_ru]").val(),
					mail_ru: jQuery('.form-' + index).find("input[name=mail_ru]").val(),
					phone_ru: jQuery('.form-' + index).find("input[name=phone_ru]").val(),
          subject: jQuery('.form-' + index).find("input[name=subject]").val()
        };
        ajaxSend('.form-' + index, t);
      }
    });

  });

  function ajaxSend(formName, data) {
    jQuery.ajax({
      type: "POST",
      url: "/wp-content/themes/flex/telegram.php",
      data: data,
      success: function() {
        $(".modal").popup("hide");
        $("#thanks").popup("show");
        setTimeout(function() {
          $(formName).trigger('reset');
        }, 2000);
      }
    });
  }

});

