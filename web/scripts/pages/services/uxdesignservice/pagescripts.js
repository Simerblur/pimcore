
        var slideTimeout;
        $(document).ready(function () {

            $('#fullpage').fullpage({
                anchors: ['ux&uiintroduction', 'research', 'analysis', 'designing', 'production', 'starting', 'summary', 'our-projects'],
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

            $.fn.fullpage.moveTo('our-projects', dataSlideId);
            paginationHiglighting();

        });
