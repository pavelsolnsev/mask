$(function () {
    /* Inits */
    initLazy();
    initScroll();
    initSticky();
    initSliderOrganization();
    initSliderTeachers();

    window.addEventListener('resize', () => {
        sticky.update();
    });

    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200
            ;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src
                                    ;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    function initScroll() {
        if (!$('.scroll').length) return;
        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
            hrefId = $(this).attr('href') || $(this).data('href'),
            posTop = $(hrefId).offset().top;
            $('html, body').animate({ scrollTop: posTop }, 1500);
        });
    }

    function initSticky() {

        window.sticky = new Sticky('.sticky');
        sticky.update();
        // and when parent change height..
        // sticky.update();
    }

    function initSliderOrganization() {
        $('.organization__slider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            appendDots: $('.organization-dots'),
            appendArrows: $('.organization-arrows'),
            centerPadding: '40px',
            responsive: [
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
    function initSliderTeachers() {
        var $teachers_slider = $('.teachers__slider'),
        settingsTeachers = {
            dots: true,
            mobileFirst: true,
            slidesToShow: 1,
            appendDots: $('.teachers-dots'),
            appendArrows: $('.teachers-arrows'),
            responsive: [
                {
                    breakpoint: 576,
                    settings: "unslick"
                }
            ]
        }

        $teachers_slider.slick(settingsTeachers);
        $(window).on('resize', function () {
            if (!$teachers_slider.hasClass('slick-initialized')) {
                return $teachers_slider.slick(settingsTeachers);
            }
        });
    }
});