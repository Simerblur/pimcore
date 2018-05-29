;(function ($) {
    var $mainContainer = $('.jsScrollToSection');
    var $sections = $mainContainer.children('section');
    var $firstSection = $sections.first();
    var $lastSection = $sections.last();
    var headerHeight = $('header').height();
    var scrollButtonSelector = '#scrollToSection';

    $('body').append('<a id="scrollToSection" class="down" style="display: block;"><span class="icon-arrow-bottom anim-bounce"></span></a>');
    var $scrollButton = $(scrollButtonSelector);

    $(document).on('click', scrollButtonSelector, function(){

        var scrollTop = $(window).scrollTop();
        var scrollBottom = scrollTop + $(window).height();
        var lastItemTop = $lastSection.offset().top;
        var lastItemBottom = lastItemTop + $lastSection.outerHeight();

        if (scrollBottom >= lastItemBottom || scrollTop + headerHeight > lastItemTop){
            $('html, body').animate({
                scrollTop: $firstSection.offset().top - headerHeight
            }, 600);
        }else{

            $sections.each(function( index ) {

                if(scrollTop + headerHeight < $(this).offset().top ){
                    $('html, body').animate({
                        scrollTop: $(this).offset().top - headerHeight + 1
                    }, 600);
                    return false;
                }
            });
        }
    });

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    var arrowChanger = debounce(function() {

        var scrollTop = $(window).scrollTop() ;
        var scrollBottom = scrollTop + $(window).height();
        var lastItemTop = $lastSection.offset().top;
        var lastItemBottom = lastItemTop + $lastSection.outerHeight();

        if (scrollBottom >= lastItemBottom || scrollTop + headerHeight > lastItemTop){
            $scrollButton.prop('class', 'up');
        }else{
            $scrollButton.prop('class', 'down');
        }
    }, 150);

    $(document).on('scroll resize orientationchange', arrowChanger);

}(jQuery));