//Прелодер и первичные анимации
(jQuery)(document).ready(function($){ 
        var $preloader = $('.volosunov'),
            $spinner = $preloader.find('.spinner');
        $spinner.delay(650).fadeOut('slow');
        $preloader.delay(650).fadeOut('slow');
        $('.mov_zoomIn_start').css("opacity","1");
        $('.mov_zoomIn_start').addClass('animated zoomIn');
    });


(jQuery)(document).ready(function($){ 
//Для мобильного 
 	var width_el = Number(document.documentElement.clientWidth);
//Отключить выделение
    window.oncontextmenu = function() {
        return false;
    } 

    document.addEventListener('mousemove',function(e){
      if( e.target.getAttribute('unselectable')=='on' )
        e.target.ownerDocument.defaultView.getSelection().removeAllRanges();
    },false);
    

    //Меню топ  
    var close = false;
    $(".button_mobi_menu").on('click', function () {
        if ($(this).hasClass('active')) {
            $('.button_mobi_menu').removeClass("active");
            close = false;
            $('.menu_div').removeClass("active");
            return;
        }
        $('.button_mobi_menu').addClass("active");
        $('.menu_div').addClass("active");
        close = true;
    }); 

    $(".menu_top li:not(.price_menu_modal)").on('click', function () {
        if(close = true){
            $('.button_mobi_menu').removeClass("active");
            $('.menu_div').removeClass("active");
            close = false;
        
        }
    }); 




//Плавный скрол
    $('.menu_top a').mPageScroll2id({
        scrollSpeed: 900,
        scrollEasing: 'swing',
        scrollingEasing: 'swing',
        offset: 80
    });

    $('a.go_a').mPageScroll2id({
        scrollSpeed: 900,
        scrollEasing: 'swing',
        scrollingEasing: 'swing',
        offset: 80
    });

//Tabs
$(".tab_js." + $('.tabs_js.active').attr('data-tab')).fadeIn(200);
$('.tabs_js').on('click', function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
        return;
    }

    var class_tab = $(this).attr('data-tab');

    $(".tabs_js").removeClass('active');
    $(".tab_js").css('display','none');

    $(".tab_js." + class_tab).fadeIn(400);
    $(this).addClass('active');
});

//cards
$(".card_tile_js." + $('.click_tile_js.active').attr('data-card')).fadeIn(200);
$('.click_tile_js').on('click', function (e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
        return;
    }

    var class_tab = $(this).attr('data-card');

    $(".click_tile_js").removeClass('active');
    $(".card_tile_js").css('display','none');

    $(".card_tile_js." + class_tab).fadeIn(400);
    $(this).addClass('active');
});




	var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "Other";
		this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
	},
	searchString: function (data) {
		for (var i = 0; i < data.length; i++) {
			var dataString = data[i].string;
			this.versionSearchString = data[i].subString;

			if (dataString.indexOf(data[i].subString) !== -1) {
				return data[i].identity;
			}
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index === -1) {
			return;
		}

		var rv = dataString.indexOf("rv:");
		if (this.versionSearchString === "Trident" && rv !== -1) {
			return parseFloat(dataString.substring(rv + 3));
		} else {
			return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
		}
	},

	dataBrowser: [
		{string: navigator.userAgent, subString: "Edge", identity: "MS Edge"},
		{string: navigator.userAgent, subString: "MSIE", identity: "Explorer"},
		{string: navigator.userAgent, subString: "Trident", identity: "Explorer"},
		{string: navigator.userAgent, subString: "Firefox", identity: "Firefox"},
		{string: navigator.userAgent, subString: "Opera", identity: "Opera"},  
		{string: navigator.userAgent, subString: "OPR", identity: "Opera"},  

		{string: navigator.userAgent, subString: "Chrome", identity: "Chrome"}, 
		{string: navigator.userAgent, subString: "Safari", identity: "Safari"}       
	]
	};

	BrowserDetect.init();


//Меню топ : скрол анимация
    var h = $(window).height();
 
    if ( ($(this).scrollTop()) > 0 ) {
        $(".menu_div").addClass('scroll');
    } 

    function go_animated_scroll() {

        $('.mov_next_fadeInUp').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h+250) {
                $(this).addClass('animated fadeInUp');
            } else {
                $(this).removeClass('animated fadeInUp');
            }
        });


        $('.mov_tile_js').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $.each($(this).find('.iner_tile'), function(i, el) {
                    setTimeout(function() {
                        $(el).addClass('animated flipInX')
                    }, 0 + (i * 250));

                  });
            } else {
                $(this).find('.iner_tile').removeClass('animated flipInX');
            }
        });

        $('section ul').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $.each($(this).find('li'), function(i, el) {
                    setTimeout(function() {
                        $(el).addClass('animated fadeIn')
                    }, 0 + (i * 250));

                  });
            } else {
                $(this).find('li').removeClass('animated fadeIn');
            }
        });


        $('.mov_next_fadeInLeft').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $(this).addClass('animated fadeInLeft');
            } else {
                $(this).removeClass('animated fadeInLeft');
            }
        });

        $('.mov_next_fadeInRight').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $(this).addClass('animated fadeInRight');
            } else {
                $(this).removeClass('animated fadeInRight');
            }
        });


        $('.mov_next_fadeIn').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $(this).addClass('animated fadeIn');
            } else {
                $(this).removeClass('animated fadeIn');
            }
        });

        $('.mov_next_fadeIn_timeOut').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $.each($(this).find('div.col-12'), function(i, el) {
                    setTimeout(function() {
                        $(el).addClass('animated fadeIn');
                    }, 0 + (i * 300));

                  });
            } else {
                $(this).find('div.col-12').removeClass('animated fadeIn');
            }
        });


        $('.mov_slideInLeft').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+h) {
                $.each($(this).find('div.col'), function(i, el) {
                    setTimeout(function() {
                        $(el).addClass('animated fadeInLeft');
                    }, 0 + (i * 80));

                  });
            } else {
                $(this).find('div.col').removeClass('animated fadeInLeft');
            }
        }); 
    }
	
	
	if(BrowserDetect.browser != "Explorer"){
		go_animated_scroll();
	} else {
		$('ul li').css('opacity',1);
		$('.mov').css('opacity',1);
		$('.mov_p p').css('opacity',1);
		$('.iner_tile').css('opacity',1);
		$('.mov_tile_js').css('opacity',1);
		$('.mov_tile_js .iner_tile').css('opacity',1);
		$('.mov_div div').css('opacity',1);
		$('.footer_div .row').css('height','120px');
		$('.footer_div_bot .row').css('height','40px');



	   if(width_el <= 1180){
	      $('.menu_div .container').css('position','relative');
	      $('.menu_div .container').css('top','-15px');
	   }
	}
	
	
    $(window).scroll(function(){
        if ( ($(this).scrollTop()) > 0 ) {
            $(".menu_div").addClass('scroll');
        } 
        if ( $(this).scrollTop() == 0 ) {
            $(".menu_div").removeClass('scroll');
        }

        if(BrowserDetect.browser != "Explorer"){
			go_animated_scroll();
		}
    });
    

	

//Формы  
    $("#sps").on("click","div", function () {
            $('#sps').modal('toggle');
     });
    //Page Custom Scrollbar
    $(".custom_scrollbar").mCustomScrollbar({
       theme:"dark-3"
    });

});