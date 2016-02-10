$(document).ready(function () {
    $(".it-title, p, .adv_cont, .text").hyphenate();
});

/*!
 * jQuery TextChange Plugin
 * http://www.zurb.com/playground/jquery-text-change-custom-event
 *
 * Copyright 2010, ZURB
 * Released under the MIT License
 */
(function ($) {

    $.event.special.textchange = {

        setup: function (data, namespaces) {
            $(this).data('lastValue', this.contentEditable === 'true' ? $(this).html() : $(this).val());
            $(this).bind('keyup.textchange', $.event.special.textchange.handler);
            $(this).bind('cut.textchange paste.textchange input.textchange', $.event.special.textchange.delayedHandler);
        },

        teardown: function (namespaces) {
            $(this).unbind('.textchange');
        },

        handler: function (event) {
            $.event.special.textchange.triggerIfChanged($(this));
        },

        delayedHandler: function (event) {
            var element = $(this);
            setTimeout(function () {
                $.event.special.textchange.triggerIfChanged(element);
            }, 25);
        },

        triggerIfChanged: function (element) {
            var current = element[0].contentEditable === 'true' ? element.html() : element.val();
            if (current !== element.data('lastValue')) {
                element.trigger('textchange',  [element.data('lastValue')]);
                element.data('lastValue', current);
            }
        }
    };

    $.event.special.hastext = {

        setup: function (data, namespaces) {
            $(this).bind('textchange', $.event.special.hastext.handler);
        },

        teardown: function (namespaces) {
            $(this).unbind('textchange', $.event.special.hastext.handler);
        },

        handler: function (event, lastValue) {
            if ((lastValue === '') && lastValue !== $(this).val()) {
                $(this).trigger('hastext');
            }
        }
    };

    $.event.special.notext = {

        setup: function (data, namespaces) {
            $(this).bind('textchange', $.event.special.notext.handler);
        },

        teardown: function (namespaces) {
            $(this).unbind('textchange', $.event.special.notext.handler);
        },

        handler: function (event, lastValue) {
            if ($(this).val() === '' && $(this).val() !== lastValue) {
                $(this).trigger('notext');
            }
        }
    };

})(jQuery);

$(function () {
    var allItems = 0,
        startEntry = 0,
        entriesOnPage = 1,
        pagesNum = 0,
        currentPageIndex = 0;

    var $pageSwitcher = $(".tab2_heading .pageSwitcher"),
        $works = $(".tab2_heading .works_content"),
        $worksItem = "li",
        $mainCont = $(".tab2_heading");


    function countAllEntries() {
        allItems =  $works.find($worksItem).size();
    }
    function countPagesNum() {
        pagesNum = parseInt((allItems - 1) / entriesOnPage) + 1;
    }
    function renderSwitcher() {
        var $switcherCont = $pageSwitcher.find("ul");
        for(var i = 1; i <= pagesNum; i++) {
            var pageFormat = "#"+i;
            $switcherCont.append("<li><a href="+pageFormat+"></a></li>")
        }
        if($switcherCont.find("li").size() >= 1) {
            $switcherCont.find("li a").first().addClass("current");
        }
    }
    function hideFirstly() {
        for(var i = 0; i < entriesOnPage; i++) {
            $works.find($worksItem).eq(i).show();
        }
    }
    function hideAll() {
        $works.find("ul").first().find($worksItem).each(function () {
            $(this).hide();
        })
    }

    function showChoosen() {
        for(var i = 0; i < entriesOnPage; i++) {
            $works.find("ul").find($worksItem).eq(i+startEntry).fadeIn();
        }
    }
    function getCurrentBg() {
        var data = undefined;
        $works.find("ul").first().find($worksItem).each(function () {
            var cssProp = $(this).css('display');
            if(cssProp == 'block') {
                data = $(this).data('bg');
            }
        })
        return data;
    }
    countAllEntries();
    countPagesNum();
    renderSwitcher();
    hideAll();
    hideFirstly();

    $pageSwitcher.find("li a").each(function () {
        $(this).click(function () {
            var href = $(this).attr('href');
            href = href.substr(1);
            startEntry = href * entriesOnPage - entriesOnPage;
            $pageSwitcher.find("li a").eq(currentPageIndex).removeClass("current");
            $(this).addClass("current");
            currentPageIndex = href-1;

            hideAll();
            showChoosen();
            var bgUrl = getCurrentBg();
            $mainCont.css('background','url('+bgUrl+') center 0');
            return false;
        })
    })
})



$(function () {
    var allItems = 0,
        startEntry = 0,
        entriesOnPage = 1,
        pagesNum = 0,
        currentPageIndex = 0;

    var $pageSwitcher = $(".tab3_heading .pageSwitcher"),
        $works = $(".tab3_heading .works_content"),
        $worksItem = "li",
        $mainCont = $(".tab3_heading");


    function countAllEntries() {
        allItems =  $works.find($worksItem).size();
    }
    function countPagesNum() {
        pagesNum = parseInt((allItems - 1) / entriesOnPage) + 1;
    }
    function renderSwitcher() {
        var $switcherCont = $pageSwitcher.find("ul");
        for(var i = 1; i <= pagesNum; i++) {
            var pageFormat = "#"+i;
            $switcherCont.append("<li><a href="+pageFormat+"></a></li>")
        }
        if($switcherCont.find("li").size() >= 1) {
            $switcherCont.find("li a").first().addClass("current");
        }
    }
    function hideFirstly() {
        for(var i = 0; i < entriesOnPage; i++) {
            $works.find($worksItem).eq(i).show();
        }
    }
    function hideAll() {
        $works.find("ul").first().find($worksItem).each(function () {
            $(this).hide();
        })
    }

    function showChoosen() {
        for(var i = 0; i < entriesOnPage; i++) {
            $works.find("ul").find($worksItem).eq(i+startEntry).fadeIn();
        }
    }
    function getCurrentBg() {
        var data = undefined;
        $works.find("ul").first().find($worksItem).each(function () {
            var cssProp = $(this).css('display');
            if(cssProp == 'block') {
                data = $(this).data('bg');
            }
        })
        return data;
    }
    countAllEntries();
    countPagesNum();
    renderSwitcher();
    hideAll();
    hideFirstly();

    $pageSwitcher.find("li a").each(function () {
        $(this).click(function () {
            var href = $(this).attr('href');
            href = href.substr(1);
            startEntry = href * entriesOnPage - entriesOnPage;
            $pageSwitcher.find("li a").eq(currentPageIndex).removeClass("current");
            $(this).addClass("current");
            currentPageIndex = href-1;

            hideAll();
            showChoosen();
            var bgUrl = getCurrentBg();
            $mainCont.css('background','url('+bgUrl+') center 0');
            return false;
        })
    })
})

// ImageSlider by kiko
$(document).ready(function () {
    var $sliderContainer = $(".imageslider ul");
    var oneImageWidth = $sliderContainer.find("img").width();

    var countWidthOfImages = function () {
        var width = 0;
        $sliderContainer.find("li").each(function () {
            var imgWidth = $(this).find("img").width();
            width+=imgWidth;
        })
        return width;
    }

    function setMargin(marginLeft) {
        $sliderContainer.css({marginLeft: marginLeft});
    }
    var imgWidth = countWidthOfImages();
    $sliderContainer.css({width: imgWidth});

    var imgNum = 0;
    $sliderContainer.find("li").each(function () {
        imgNum++;
    })
    var middleImageNum = imgNum/2;


    var leftRightMargin = ($(window).width()-oneImageWidth)/2;

    var marginLeft = imgWidth/2;
    setMargin(-marginLeft);
    var $prevBtn = $(".prev_slide"),
        $nextBtn = $(".next_slide");
    var oldmargin = marginLeft;
    $prevBtn.css({width: leftRightMargin});
    $nextBtn.css({width: leftRightMargin});
    var counter = parseInt(middleImageNum);
    $prevBtn.click(function (e) {
        if(counter > 0) {
            oldmargin = oldmargin - oneImageWidth;
            $sliderContainer.css({marginLeft: -oldmargin});
            counter--;
        }
        e.preventDefault();
    })
    $nextBtn.click(function (e) {
        if(counter < imgNum-1) {
            oldmargin = oldmargin + oneImageWidth;
            $sliderContainer.css({marginLeft: -oldmargin});
            counter++;
        }
        e.preventDefault();
    })
})

// on_map and on_list
$(function () {
    var $mapBtn = $(".on_map"),
        $mapCont = $(".on_map_cont"),
        $listBtn = $(".on_list"),
        $listCont = $(".on_list_cont");

    $listCont.hide();
    $mapBtn.click(function (e) {
        if($listCont.css("display") != undefined || $listCont.css("display") != "none") {
            $listCont.hide();
        }
        $mapCont.fadeIn();
        e.preventDefault();
    })
    $listBtn.click(function (e) {
        if($mapCont.css("display") != undefined || $mapCont.css("display") != "none") {
            $mapCont.hide();
        }
        $listCont.fadeIn();
        e.preventDefault();
    })
})
$(function () {
    function reloadPrice(obj, price, num) {
        var $sumCont = obj.next();
        price = price.replace(/\D/g, '');
        price = parseInt(price);
        var sum = price * num;
        $sumCont.text(sum+" руб.");
    }
    var $cartHolder = $(".cart_holder input"),
        $cartPlus = $(".cart_plus"),
        $cartMinus = $(".cart_minus");

    $cartPlus.click(function () {
        var $holder = $(this).parent().find(".cart_holder input");
        var val = $holder.val();
        val++;
        $holder.val(val);
        var $priceholder = $(this).parent();
        var $priceH = $priceholder.prev();
        reloadPrice($(this).parent(), $priceH.text(), val);
    })
    $cartMinus.click(function () {
        var $holder = $(this).parent().find(".cart_holder input");
        var val = $holder.val();
        val--;
        $holder.val(val);
        var $priceholder = $(this).parent();
        var $priceH = $priceholder.prev();
        reloadPrice($(this).parent(), $priceH.text(), val);
    })
    $cartHolder.bind('textchange', function () {
        var $priceholder = $(this).parent();
        var $priceH = $priceholder.prev();
    })
})

$(function () {
    var $reviewBtn = $("a.review").parent(),
        $techBtn = $("a.tech").parent(),
        $colorsBtn = $("a.colors").parent(),

        $reviewCont = $(".review_cont"),
        $techCont = $(".tech_cont"),
        $colorsCont = $(".colors_cont");

    function hideAllContents() {
        $reviewCont.hide();
        $techCont.hide();
        $colorsCont.hide();
    }

    function showCurrentItem() {
        $reviewCont.fadeIn();
        $reviewBtn.addClass("curr_item");
    }

    function removeCurrentClass() {
        $reviewBtn.removeClass("curr_item");
        $techBtn.removeClass("curr_item");
        $colorsBtn.removeClass("curr_item");
    }
    function onClick(obj, container) {
        hideAllContents();
        container.fadeIn();
        removeCurrentClass();
        obj.addClass("curr_item");
    }

    hideAllContents();
    showCurrentItem();

    $reviewBtn.on("click", function(e) {
        onClick($(this), $reviewCont);
        e.preventDefault();
    });
    $techBtn.on("click", function(e) {
        onClick($(this), $techCont);
        e.preventDefault();
    });
    $colorsBtn.on("click", function(e) {
        onClick($(this), $colorsCont);
        e.preventDefault();
    });

})

$(function () {
    var $topBlock = $(".main_nav");
    var topHeight = $topBlock.offset().top;
    var $nav = $(".main_nav");
    $(document).scroll(function () {
        var top = $(this).scrollTop();
        if(top>=topHeight) {
            if(!$("body").is(".clonedNav")) {
                $nav.clone().appendTo("body").addClass("clonedNav");
            }
            $(".clonedNav").addClass("nav-fixed");
        } else {
            $(".clonedNav").remove();
        }
    })
})