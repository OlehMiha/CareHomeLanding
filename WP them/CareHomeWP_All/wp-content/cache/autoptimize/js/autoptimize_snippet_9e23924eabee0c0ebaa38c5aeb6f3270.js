jQuery(document).ready(function(a){var e=a(".volosunov");e.find(".spinner").delay(650).fadeOut("slow");e.delay(650).fadeOut("slow");a(".mov_zoomIn_start").css("opacity","1");a(".mov_zoomIn_start").addClass("animated zoomIn")});jQuery(document).ready(function(a){function e(){a(".mov_next_fadeInUp").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d+250?a(this).addClass("animated fadeInUp"):a(this).removeClass("animated fadeInUp")});a(".mov_tile_js").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a.each(a(this).find(".iner_tile"),function(b,c){setTimeout(function(){a(c).addClass("animated flipInX")},250*b)}):a(this).find(".iner_tile").removeClass("animated flipInX")});a("section ul").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a.each(a(this).find("li"),function(b,c){setTimeout(function(){a(c).addClass("animated fadeIn")},250*b)}):a(this).find("li").removeClass("animated fadeIn")});a(".mov_next_fadeInLeft").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a(this).addClass("animated fadeInLeft"):a(this).removeClass("animated fadeInLeft")});a(".mov_next_fadeInRight").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a(this).addClass("animated fadeInRight"):a(this).removeClass("animated fadeInRight")});a(".mov_next_fadeIn").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a(this).addClass("animated fadeIn"):a(this).removeClass("animated fadeIn")});a(".mov_next_fadeIn_timeOut").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a.each(a(this).find("div.col-12"),function(b,c){setTimeout(function(){a(c).addClass("animated fadeIn")},300*b)}):a(this).find("div.col-12").removeClass("animated fadeIn")});a(".mov_slideInLeft").each(function(){var b=a(this).offset().top,c=a(window).scrollTop();b<c+d?a.each(a(this).find("div.col"),function(b,c){setTimeout(function(){a(c).addClass("animated fadeInLeft")},80*b)}):a(this).find("div.col").removeClass("animated fadeInLeft")})}window.oncontextmenu=function(){return!1};document.addEventListener("mousemove",function(a){"on"==a.target.getAttribute("unselectable")&&a.target.ownerDocument.defaultView.getSelection().removeAllRanges()},!1);a(".button_mobi_menu").on("click",function(){a(this).hasClass("active")?(a(".button_mobi_menu").removeClass("active"),a(".menu_div").removeClass("active")):(a(".button_mobi_menu").addClass("active"),a(".menu_div").addClass("active"))});a(".menu_top li:not(.price_menu_modal)").on("click",function(){a(".button_mobi_menu").removeClass("active");a(".menu_div").removeClass("active")});a(".menu_top a").mPageScroll2id({scrollSpeed:900,scrollEasing:"swing",scrollingEasing:"swing",offset:80});a("a.go_a").mPageScroll2id({scrollSpeed:900,scrollEasing:"swing",scrollingEasing:"swing",offset:80});a(".tab_js."+a(".tabs_js.active").attr("data-tab")).fadeIn(200);a(".tabs_js").on("click",function(b){b.preventDefault();a(this).hasClass("active")||(b=a(this).attr("data-tab"),a(".tabs_js").removeClass("active"),a(".tab_js").css("display","none"),a(".tab_js."+b).fadeIn(400),a(this).addClass("active"))});a(".card_tile_js."+a(".click_tile_js.active").attr("data-card")).fadeIn(200);a(".click_tile_js").on("click",function(b){b.preventDefault();a(this).hasClass("active")||(b=a(this).attr("data-card"),a(".click_tile_js").removeClass("active"),a(".card_tile_js").css("display","none"),a(".card_tile_js."+b).fadeIn(400),a(this).addClass("active"))});var d=a(window).height();0<a(this).scrollTop()&&a(".menu_div").addClass("scroll");e();a(window).scroll(function(){0<a(this).scrollTop()&&a(".menu_div").addClass("scroll");0==a(this).scrollTop()&&a(".menu_div").removeClass("scroll");e()});a("#sps").on("click","div",function(){a("#sps").modal("toggle")});a(".custom_scrollbar").mCustomScrollbar({theme:"dark-3"})});