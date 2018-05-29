
        var slideTimeout;
        $(document).ready(function () {
            
            if (($(window).width() < 767)) {
                $('.magento-timeline').remove();
            }
                
                $('#fullpage').fullpage({
                anchors: ['magento-introduction', 'about', 'e-commerce-functionalities', 'open-source-code', 'modular-architecture', 'scalability', 'multi-store-capabilities', 'search-engine-optimisation', 'safety', 'how-we-do-magento', 'our-magento-project'],
                paddingBottom: '60px',
                fixedElements: '#header,.service-navigation-foooter-desktop,.service-navigation-footer-mobile',
                scrollOverflow: true,
                controlArrows: false,
                afterSlideLoad: function (anchorLink, index, slideAnchor, slideIndex) {

                    paginationHiglighting();

                },
                afterLoad: function (anchorLink, index) {

                    if (index === $('#fullpage .section').length) {
                        $('.goUp').show();
                        $('.goDeeper').hide();
                    }

                    if (index == 1) {
                        $('.goUp').hide();
                        $('.goDeeper').show();
                    }
                }
            });
                
            $('.goDeeper').click(function () {
                $.fn.fullpage.moveSectionDown();
            });
            paginationHiglighting();
        });



        function paginationHiglighting() {
            var dataSlideName = $(".fp-slide.fp-table.active").data('slidename');

            $('.custom-pagination-slide').css('color', 'black').css('font-size','13px');
            $('.custom-pagination-slide[data-slidename="' + dataSlideName + '"]').css('color', '#00a5db').css('font-size','19px');
        }

        $(".slide-left-custom").click(function () {
            $.fn.fullpage.moveSlideLeft();
            paginationHiglighting();
        });

        $(".slide-right-custom").click(function () {
            $.fn.fullpage.moveSlideRight();
            paginationHiglighting();
        });

        $(".custom-pagination-slide").click(function () {

            var dataSlideId = $(this).data('slideid');

            $.fn.fullpage.moveTo('our-magento-project', dataSlideId);
            paginationHiglighting();
        });

        $('.time-line-slider').slick(
                {
                    infinite: false,
                    autoplay: false,
                    dots: true,
                    arrows: true,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    customPaging: function (slider, i) {
                        var thumb = $(slider.$slides[i]).data('thumb');
                        var count = i + 1

                        return '<p class="realization-slider-pagination">0' + count + '</p>';
                    },
                    prevArrow: '<a href="#0" id="prev-btn" class="slide-left-custom"><span></span><p>previous</p></a>',
                    nextArrow: '<a href="#0" id="next-btn" class="slide-right-custom"><p>next</p><span></span></a>',
                    appendArrows: $(".time-line-arrows"),
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                touchMove: false,
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 1219,
                            settings: {
                                touchMove: false,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                    ]
                });

        $('.time-line-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {

            var positionParagraph1 = $('.our-process-title-paragraph-1').css('left');
            var positionParagraph2 = $('.our-process-title-paragraph-2').css('left');

            if (currentSlide < nextSlide) {

                $(".our-process-title-paragraph-1").animate({"left": "+=15px"}, "fast");
                $(".our-process-title-paragraph-2").animate({"left": "+=25px"}, "fast");
            }

            if (currentSlide > nextSlide) {

                $(".our-process-title-paragraph-1").animate({"left": "-=15px"}, "fast");
                $(".our-process-title-paragraph-2").animate({"left": "-=25px"}, "fast");
            }
        });
