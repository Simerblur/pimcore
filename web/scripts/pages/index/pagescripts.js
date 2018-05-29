;jQuery(function($) {
        $('.last-realization-slider').slick(
            {
                infinite: true,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                customPaging: function (slider, i) {
                    var thumb = $(slider.$slides[i]).data('thumb');
                    var count = i + 1

                    return '<p class="realization-slider-pagination">0' + count + '</p>';
                },
            });


        $('.last-realization-box').on('beforeChange', function (event, slick, currentSlide, nextSlide) {

            var box = $('.last-realization-box');
            var slideColor1 = ['#feca2f'];
            var slideColor2 = ['#068957'];
            var slideColor3 = ['#c2111c'];


            var slideTitle = $('.slick-slide.slick-current.slick-active').attr('data-title');

            if (nextSlide == '0') {
                var color = slideColor1;
            } else if (nextSlide == '1') {
                var color = slideColor2;
            } else if (nextSlide == '2') {
                var color = slideColor3;
            }

            box.css({'background': color, "transition": "background-color 0.5s ease"});

        });

        $('#homepage-arrow').click(function(){
            $(this).removeClass('visible');
            var windowheight = $(window).scrollTop() + $(window).height();
            var headerHeight = $('header').height();
            $('html, body').animate({
                scrollTop: (windowheight - headerHeight)
            }, 600);
        });

        $.fn.moveIt = function () {
            var $window = $(window);
            var instances = [];

            $(this).each(function () {
                instances.push(new moveItItem($(this)));
            });

            window.onscroll = function () {
                var scrollTop = $window.scrollTop();
                instances.forEach(function (inst) {
                    inst.update(scrollTop);
                });
            }
        };

        var moveItItem = function (el) {
            this.el = $(el);
            this.speed = parseInt(this.el.attr('data-scroll-speed'));
        };

        moveItItem.prototype.update = function (scrollTop) {
            var pos = scrollTop / this.speed;
            this.el.css('transform', 'translateY(' + -pos + 'px)');
        };

        $(function () {
            $('[data-scroll-speed]').moveIt();
        });


})(jQuery);

