$('body').scrollspy({ target: '#scrollspy-course', offset: 100 });
$('body').scrollspy({ target: '#scrollspy-combo', offset: 100 });
var showNavOnThis = $('.main-container', this.element);
if (showNavOnThis.length) { var hiddenCourseBar = $(".hidden-course-bar", this.element); var showNavOnThisTop = showNavOnThis.offset().top; if (window.matchMedia('(max-width: 991px)').matches) { showNavOnThisTop = $('.sidebar-info').find('.info').offset().top; } var landingScrollTop;
    $(window).scroll(function() { landingScrollTop = $(this).scrollTop(); if (landingScrollTop > showNavOnThisTop && window.matchMedia('(min-width: 992px)').matches) { hiddenCourseBar.addClass("slideDown"); } else { hiddenCourseBar.removeClass("slideDown slideDown-header"); } }); }
var h = $(".content-teacher p").height() + 14;
$(".k-course-details-author .read-more a").click(function() { if (h != 92) { $(".content-teacher").animate({ 'max-height': h }, 400);
        h = 92;
        $('.k-course-details-author .read-more a').addClass('rote').text("Xem thêm");
        $('.k-course-details-author .collapse-more').addClass('add'); } else { $(".content-teacher").animate({ 'max-height': h }, 400);
        h = $(".content-teacher p").height() + 14;
        $('.k-course-details-author .read-more a').removeClass('rote').text("Thu gọn");
        $('.k-course-details-author .collapse-more').removeClass('add'); } });
$("#scrollspy-course > ul > li").click(scrollspyClickHandler);
$("#scrollspy-combo > ul > li").click(scrollspyClickHandler);

function scrollspyClickHandler() { var obj = $(this).parents("ul").find('li'); for (var i = 0; i < $(obj).length; i++) $(obj).removeClass("active");
    $(this).addClass("active"); var id = $(this).find('a').attr("link");
    goToByScroll(id); } $("#k-course-details-about > ul > li").click({ selector: '#scrollspy-course' }, navClickHandler);
$("#k-combo-details-about > ul > li").click({ selector: '#scrollspy-combo' }, navClickHandler);

function navClickHandler(event) { var obj = $(event.data.selector + " > ul > li"); for (var i = 0; i < $(obj).length; i++) $(obj).removeClass("active"); var id = $(this).find('a').attr("link");
    $(event.data.selector + " a[link='" + id + "']").parent().addClass("active");
    goToByScroll(id); }

function goToByScroll(id) { var pos = $(id).offset().top - 68;
    $('html,body').animate({ scrollTop: pos }, 'slow'); } $('#scrollspy-course').length > 0 && $(window).scroll({ selector: '#scrollspy-course' }, windowScrollHandler);
$('#scrollspy-combo').length > 0 && $(window).scroll({ selector: '#scrollspy-combo' }, windowScrollHandler);

function windowScrollHandler(event) { var top = $(this).scrollTop(); var obj = $("[path='scrolling']"); var current = $(obj[0]); for (var i = 1; i < $(obj).length; i++) { if (top - ($(obj[i]).offset().top - 70) >= 0) current = $(obj[i]); } var link_current = $(event.data.selector + " li").find("a[link='#" + $(current).attr("id") + "']"); if (!$(link_current).parent().hasClass("active")) { $(event.data.selector + " li").removeClass("active");
        $(link_current).parent().addClass("active"); } } $(".wrap-detail .part h4").click(function() { if ($(window).width() < 767) { var cur_open = $(this).parent(); var h = 0; if (!$(cur_open).hasClass("open")) { var obj = $(this).parent().find('ul li'); for (var i = 0; i < $(obj).length; i++) h += $(obj[i]).height();
            h += 2; } var cur_ul = $(this).parent().find('ul');
        $(cur_ul).animate({ height: h }, 400);
        $(cur_open).toggleClass("open"); } });
$(window).on("load resize", function() {
    var obj_img = $(".k-course-details-related").find(".k-related-courses-img .img-fluid");
    var obj_tit = $(".k-course-details-related").find(".k-related-courses-text h6");
    if (window.matchMedia('(max-width: 543px)').matches) {
        var max_img = 0;
        $(obj_img).each(function() { $(this).height("auto"); if (max_img < $(this).height()) max_img = $(this).height(); })
        $(obj_img).height(max_img);
        var max_tit = 0;
        $(obj_tit).each(function() { if (max_tit < $(this).find("a").height()) max_tit = $(this).find("a").height(); })
        $(obj_tit).height(max_tit);
    } else { $(obj_img).height("auto");
        $(obj_tit).height("auto");
        $('#search-form').removeAttr("style"); }
});
if ($('.slider-review .slider-top').length > 0) { $('.slider-review .slider-top').slick({ slidesToShow: 1, slidesToScroll: 1, arrows: true, prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>', nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>', fade: true, asNavFor: '.slider-review .slider-bottom' }); }
if ($('.slider-review .slider-bottom').length > 0) { $('.slider-review .slider-bottom').slick({ slidesToShow: $('.slider-review .slider-bottom').data("number-slider"), slidesToScroll: 1, centerPadding: '60px', asNavFor: '.slider-review .slider-top', dots: false, arrows: false, centerMode: $('.slider-review .slider-bottom').data("center-mode"), focusOnSelect: true }); }
if ($('#k-course-details-screenshot .slider-image').length > 0) { $('#k-course-details-screenshot .slider-image').slick({ slidesToShow: 1, slidesToScroll: 1, centerPadding: '120px', centerMode: true, prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>', nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>', asNavFor: '#k-course-details-screenshot .slider-content' }); }
if ($('#k-course-details-screenshot .slider-content').length > 0) { $('#k-course-details-screenshot .slider-content').slick({ slidesToShow: 1, slidesToScroll: 1, centerPadding: '0', asNavFor: '#k-course-details-screenshot .slider-image', dots: true, arrows: false, centerMode: true, focusOnSelect: true }); }
if ($('#k-course-details-screenshot-mb .slider-image').length > 0) { $('#k-course-details-screenshot-mb .slider-image').slick({ slidesToShow: 1, slidesToScroll: 1, centerPadding: '0', centerMode: true, prevArrow: $('#k-course-details-screenshot-mb .slick-arrow-mb .prev'), nextArrow: $('#k-course-details-screenshot-mb .slick-arrow-mb .next'), asNavFor: '#k-course-details-screenshot-mb .slider-content', }); }
if ($('#k-course-details-screenshot-mb .slider-content').length > 0) { $('#k-course-details-screenshot-mb .slider-content').slick({ slidesToShow: 1, slidesToScroll: 1, centerPadding: '0', asNavFor: '#k-course-details-screenshot-mb .slider-image', dots: false, arrows: false, centerMode: true, focusOnSelect: true }); } $(window).on('load', function() { if ($('.k-course-details-about').length > 0) { var $obj_content_list = $('.course-overview > .content-list > *'); var h_content_list = 0;
        $obj_content_list.each(function() { h_content_list += parseInt($(this).css('height')); }); if (h_content_list < 200) { $('.showmore-content-1').remove(); } } if ($('.k-course-details-curriculum').length > 0) { var $obj_wrap_detail = $('.k-course-details-curriculum .wrap-detail > *'); var h_wrap_detail = 0;
        $obj_wrap_detail.each(function() { h_wrap_detail += parseInt($(this).css('height')); }); if (h_wrap_detail < 400) { $('.showmore-course-list-1').remove();
            $('.k-course-details-curriculum .wrap-detail').css("max-height", "none"); } } if ($('.k-course-details-author').length > 0) { var h_wrap_detail = parseInt($('.k-course-details-author .desciption-full .wrapper').css('height')); if (h_wrap_detail - 25 < 400) { $('.k-course-details-author .btn-info-teacher-1').remove(); } } })