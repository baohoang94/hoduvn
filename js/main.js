$(window).on('load resize', function() {
    /* TOPBAR */
    fixed_topbar();
});

function fixed_topbar() {
    if (!$("#fixed-topbar").hasClass('close')) {
        //debugger;
        $("#fixed-topbar").css("display", "block");
        var maxHeight = $("#fixed-topbar img.image-topbar.banner-pc").height();
        if (window.matchMedia('(max-width: 991px)').matches){
            maxHeight = $("#fixed-topbar img.image-topbar.banner-mb").height();
            $('#fixed-topbar').addClass('banner-on-mob')
        }
        else{
            $('#fixed-topbar').removeClass('banner-on-mob')
        }
        var flag_report = $("#fixed-topbar").css("display");
        if (flag_report != "none") {
            if (window.matchMedia('(min-width: 992px)').matches)
            {
                $("html").css("margin-top", maxHeight);
                $("header .k-header-wrap").css("margin-top", maxHeight);
            }
            else{
                $("html").css("margin-top", "auto");
                $("header .k-header-wrap").css("margin-top", "auto");
            }
        }
        if ($(".hidden-course-bar").length > 0) {
            $(".hidden-course-bar").css("top", maxHeight);
            $("html").css("margin-top", "auto");
        }
    }
}
$("#fixed-topbar .close-topbar").on('click', function () {
    $("#fixed-topbar").addClass('close');
    $("html").css("margin-top", "auto");
    $("header .k-header-wrap").css("margin-top", "auto");
    if ($('.hidden-course-bar').length > 0)
        $('.hidden-course-bar').css('top','0');
    $('#facets-form').addClass('hide_topbar');
    $('#k-listing').addClass('hide_topbar');
})
/* GET HEIGHT HEADER */


updateGetHeightHeader();
$(window).resize(function() {
    updateGetHeightHeader();
});

function updateGetHeightHeader() {
    var heightHeader = $('.k-header-wrap').height();
    $('.height-header').attr('style', 'height:' + heightHeader + 'px; display: block');
}



/* Menu */
/*
 $('.nav-mb').click(function () {
 $(this).parents('body').toggleClass('nav-mobile-open');
 });
 $('.back-nav-mobile').click(function () {
 $(this).parents('body').removeClass('nav-mobile-open');
 });
 */

/* SLIDE */
$("#k-slide .owl-carousel").owlCarousel({
    autoPlay: false,
    items: 1,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
    mouseDrag: true,
    navigationText: [
        $('#k-slide .owl-buttons-custom .owl-prev').html(),
        $('#k-slide .owl-buttons-custom .owl-next').html()
    ],
    navigation: true,
    pagination: true,
});

/* INTEREST */
;
(function($, window, document, undefined) {
    'use strict';
    setHeightDiv();
    setHeightImage();
    setHeightDivNameMobile();

})(jQuery, window, document);

/* BOX PRODUCT */
$(".k-box-card").hover(
    function() {
        $(this).find('.k-box-card-wrap').addClass("block");
    },
    function() {
        $(this).find('.k-box-card-wrap').removeClass("block");
    }
);

/* ABOUT US */
$(".wrap-slider-content-bottom").owlCarousel({
    autoPlay: true,
    items: 1,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
    mouseDrag: true,
    navigationText: ["<i class='fa fa-play rotate-180 icon'></i>",
        "<i class='fa fa-play icon'></i>"
    ],
    navigation: true,
    pagination: false,
});

$(".k-about-us-slide ul").owlCarousel({
    autoPlay: true,
    items: 1,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
    mouseDrag: true,
    navigationText: ["<i class='icon icon-arrow-left-bold'></i>",
        "<i class='icon icon-arrow-right-bold'></i>"
    ],
    navigation: true,
    pagination: false,
});

/*GET HEIGHT HEADER*/
function updateGetHeightHeader() {
    //var heightHeader = $('.k-header-wrap').height();
    //$('.k-height-header').attr('style', 'margin-top:' + heightHeader + 'px; display: block');
}
updateGetHeightHeader();
$(window).resize(function() {
    updateGetHeightHeader();
});


/* BUTTON MOBILE */
/*
 $('.k-button-mobile').click(function() {

 $('.nav-mb').append('<i class="icon icon-chevron-left k-button-mobile-back"></i>').find('.icon-bars').remove().find('');

 $('body').addClass('k-menu-open');
 });

 $('.k-button-mobile-back').click(function() {
 $('body').removeClass('k-menu-open');
 });

 */

/* SLIDER CO THE BAN QUAN TAM */
$(".k-course-card-slide .k-box-card-list").owlCarousel({
    autoPlay: true,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 2],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
    mouseDrag: true,
    navigationText: ["<i class='icon-arrow-left icon'></i>",
        "<i class='icon-arrow-right icon'></i>"
    ],
    navigation: true,
    pagination: false,
});

/* CLOSE k-add-to-cart-register */
$("#detail-form-register .icon-cross").click(function() {
    $(this).parents().find(".k-add-to-cart-register").remove();
});

/* Nowarp Account */
if ($(".account .text .user").length > 0) {
    var new_user = $(".account .text .user").html();
    var obj_full_name = new_user.split(' ');
    for ( var i = obj_full_name.length - 1; i >= 0; i--) {
        if ($(obj_full_name)[i] === '')
            obj_full_name.pop();
        else
            break;
    }
    var _num = obj_full_name.length;
    if (_num > 2) {
        new_user = obj_full_name[_num - 2] + " " + obj_full_name[_num - 1];
    }
    if (new_user.length > 14) $(".account .text .user").addClass('nowrap');
    $(".account .text .user").html(new_user);
}

function setHeightDiv() {
    var $list = $('.k-box-card-list'),
        $items = $list.find('.k-box-card .content'),
        setHeights = function() {
            $items.css('height', 'auto');

            var perRow = Math.floor($list.width() / $items.width());
            if (perRow == null || perRow < 2)
                return true;

            for (var i = 0, j = $items.length; i < j; i += perRow) {
                var maxHeight = 0,
                    $row = $items.slice(i, i + perRow);

                $row.each(function() {
                    var itemHeight = parseInt($(this).outerHeight());
                    if (itemHeight > maxHeight)
                        maxHeight = itemHeight;
                });
                if($("#k-highlights").length > 0){
                    maxHeight += "px !important";
                    $row.attr('style', "height:" + maxHeight);
                } else {
                    $row.css('height', maxHeight);
                }
            }
        };
    setHeights();
    $(window).on('resize', setHeights);
    $list.find('img').on('load', setHeights);
}

function setHeightDivNameMobile() {
    var $list = $('#k-highlights'),
        $items = $list.find('.k-box-card .content-mb'),
        setHeights = function() {
            $items.css('height', 'auto');

            var perRow = Math.floor($list.width() / $items.width());
            if (perRow == null || perRow < 2)
                return true;

            for (var i = 0, j = $items.length; i < j; i += perRow) {
                var maxHeight = 0,
                    $row = $items.slice(i, i + perRow);

                $row.each(function() {
                    var itemHeight = parseInt($(this).outerHeight());
                    if (itemHeight > maxHeight)
                        maxHeight = itemHeight;
                });
                if (window.matchMedia('(max-width: 543px)').matches){
                    $row.css('height', maxHeight);
                }
                else {
                    $row.css('height', 'auto');
                }
            }
        };
    setHeights();
    $(window).on('resize', setHeights);
    $list.find('img').on('load', setHeights);
}
function setHeightImage() {
    var $list = $('#k-highlights .k-box-card-list, .k-listing-content .k-box-card-list'),
        $items = $list.find('.k-box-card .img'),
        setHeights = function() {
            $items.css('height', 'auto');

            var perRow = Math.floor($list.width() / $items.width());
            if (perRow == null || perRow < 2)
                return true;

            for (var i = 0, j = $items.length; i < j; i += perRow) {
                var maxHeight = 0,
                    $row = $items.slice(i, i + perRow);

                $row.each(function() {
                    var itemHeight = parseInt($(this).outerHeight());
                    if (itemHeight > maxHeight)
                        maxHeight = itemHeight;
                });
                $row.css('height', maxHeight);
            }
        };
    setHeights();
    $(window).on('resize', setHeights);
    $list.find('img').on('load', setHeights);
}

$('#k-popup-account-reset').on('show.bs.modal', function(event) {
    $('#k-popup-account-login').modal('hide');
    $('#k-popup-account-register').modal('hide');
    $('body').addClass("modal-open-new");
});

$('#k-popup-account-register').on('show.bs.modal', function(event) {
    $('#k-popup-account-login').modal('hide');
    $('#k-popup-account-reset').modal('hide');
    $('body').addClass("modal-open-new");
});

$('#k-popup-account-login').on('show.bs.modal', function() {
    $('#k-popup-account-register').modal('hide');
    $('#k-popup-account-reset').modal('hide');
    $('body').addClass("modal-open-new");
});

$('#k-popup-account-reset').on('hidden.bs.modal', function() {
    checkHideAll();
});

$('#k-popup-account-login').on('hidden.bs.modal', function() {
    checkHideAll();
});

$('#k-popup-account-register').on('hidden.bs.modal', function() {
    checkHideAll();
});

function checkHideAll() {
    if (!$('#k-popup-account-login').hasClass("in") && !$('#k-popup-account-register').hasClass("in") && !$("#k-popup-account-reset").hasClass("in")) {
        $('body').removeClass("modal-open-new");
    }
}

/* Menu Tabs */
/* Menu-tab Courses */
$('ul.nav-tabs.sub-menu').each(function() {
    // For each set of tabs, we want to keep track of
    // which tab is active and it's associated content
    var $active, $content, $links = $(this).find('a');

    // If the location.hash matches one of the links, use that as the active tab.
    // If no match is found, use the first link as the initial active tab.
    $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
    $active.parent().addClass('active-tab');

    $content = $($active[0].hash);

    // Hide the remaining content
    $links.not($active).each(function() {
        $(this.hash).hide();
    });
    // Bind the click event handler
    $(this).on('click', 'a', function(e) {
        // Make the old tab inactive.
        var s = $(this).parent().parent().attr("id");
        $active.parent().removeClass('active-tab');
        $content.hide();

        // Update the variables with the new link and content
        $active = $(this);
        $content = $(this.hash);

        // Make the tab active.
        $active.parent().addClass('active-tab');
        if (window.innerWidth < 768) {
            $content.removeClass("hidden-sm-down")
        }
        $content.fadeIn();
        var id_tab = $(this).attr("href").split('#')[1];
        if (id_tab != undefined)
            CoursesAction.ResizeBoxProduct("#" + id_tab);
        // Prevent the anchor's default click action
        e.preventDefault();
    });
});

$(window).on("load resize", function() {
    if ($(".k-course-details-author-teacher").find(".content-teacher-box").height() < 131)
        $("#k-open-content-author").hide();
});

$("#k-open-content-author").click(function() {
    var _root = $(this).parent();
    $(_root).toggleClass("open");
    if ($(_root).hasClass("open")) {
        $(_root).find(".content-teacher").animate({
            height: $(_root).find(".content-teacher-box").height()
        }, 400);
        $(this).find(".kbtn-see-more").html('Thu gọn');
    } else {
        $(_root).find(".content-teacher").animate({
            height: 130
        }, 400);
        $(this).find(".kbtn-see-more").html('Xem thêm');
    }
});

$("#k-button-search-course").click(function(event) {
    event.preventDefault();
    if ($("#search-form").css("display") === "none")
        $("#search-form").show();
    else
        $("#search-form").hide();
});

$("#k-close-search-popup").click(function() {
    $("#search-form").hide();
});

$('.cart').hover(function() {
    if ($('#shadown-cart-click').length == 0) {
        if ($('#shadown-cart').length > 0)
            $('#shadown-cart').replaceWith('');
        $('footer').after('<div id="shadown-cart" style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 11;background: black;opacity: 0.5;"></div>');
    }
}, function() {
    if ($('#shadown-cart').length > 0 && $('#shadown-cart-click').length == 0) {
        $('#shadown-cart').replaceWith('');
    }
});

$('.k-header-wrap .cart > a.dropdown-toggle').click(function() {
    if ($('#shadown-cart').length > 0) {
        $('#shadown-cart').replaceWith('');
    }
    if ($(this).parent().hasClass('open')) {
        if ($('#shadown-cart-click').length > 0) {
            $('#shadown-cart-click').replaceWith('');
        }
    } else {
        if ($('#shadown-cart-click').length == 0) {
            $('footer').after('<div id="shadown-cart-click" style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 11;background: black;opacity: 0.5;"></div>');
        }
    }
    if (typeof timeStopCart !== "undefined") {
        clearTimeout(timeStopCart);
    }
});
$('.k-listing-button-filter').on('click', function(){
    if ($('#filter-form').css('display') == "none")
        $("#filter-form").slideDown();
    else
        $("#filter-form").slideUp();
});
$(window).on("load scroll", function() {
    var top = $(this).scrollTop();
    if (top > 40 && $("#facets-form").length > 0) {
        if (!$("#facets-form").hasClass("scrolled")) {
            $("#facets-form").addClass("scrolled");
        }
    } else {
        $("#facets-form").removeClass("scrolled");
    }
});