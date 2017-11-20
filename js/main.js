function testimonialsLoad(e) {
    const item = $('.testimonials .list .item:not(.hidde)').size();
    if (item + 2 >= $('.testimonials .list .item').size()) {
        $(e).fadeOut();
    }
    const items = $('.testimonials .list div:nth-child(' + (item + 1) + '),.testimonials .list div:nth-child(' + (item + 2) + ') ');
    $(items).slideDown(1000, function () {
        $('body,html').animate({scrollTop: $('.testimonials').offset().top + $('.testimonials').outerHeight() - innerHeight}, 300);
    }).removeClass('hidde');
}

function orderCopy() {
    const order = $('.order').clone();
    $(order).addClass('order-gray');
    $('.author').after(order);
    $('.testimonials').after($(order).clone());
}

const book = {
        controller() {
            $(".tablet .part").click(function () {
                $('.tablet .part.active').removeClass('active');
                $(this).addClass('active');
                if ($(this).hasClass('part-1')) {
                    $('.tablet ul.second').fadeOut(function () {
                        $('.tablet ul.first').fadeIn();
                    });

                }
                if ($(this).hasClass('part-2')) {
                    $('.tablet ul.first').fadeOut(function () {
                        $('.tablet ul.second').fadeIn();
                    });
                }
            });
            $('.tablet li').click(function () {
                if (!$(this).hasClass('active')) {
                    $('.tablet li.active').removeClass('active');
                    $(this).addClass('active');
                    const name = $(this).find('.name').text();
                    $('.how .middle').fadeOut(function () {
                        $(this).text(name);
                        $(this).fadeIn()
                    })
                    const text = $(this).find('.content').text();
                    $('.how .middle+p').fadeOut(function () {
                        $(this).text(text);
                        $(this).fadeIn()
                    })
                }
            })
        }
    },
    header = {
        button: false,
        controller: function () {
            $('.toggle-btn').click(function () {
                $('.mobile-menu').fadeToggle();
                if (header.button === false) {
                    $(this).find('span:first-child').css({
                        transform: "rotate(45deg)",
                        top: '9px',
                        width: "35px"
                    })
                    $(this).find('span:nth-child(2)').css({
                        opacity: 0
                    })
                    $(this).find('span:nth-child(3)').css({
                        transform: "rotate(-45deg)",
                        bottom: '9px',
                        width: "35px"
                    })
                    header.button = true
                } else {
                    $(this).find('span:first').css({
                        transform: "rotate(0)",
                        top: '0px',
                        width: "35px"
                    })
                    $(this).find('span:nth-child(2)').css({
                        opacity: 1
                    })
                    $(this).find('span:nth-child(3)').css({
                        transform: "rotate(0)",
                        bottom: '0px',
                        width: "35px"
                    })
                    header.button = false
                }
            });
            if (!$('.thanks')[0]) {
                $(".menu a").click(function (event) {
                    event.preventDefault();
                    let target = $(this).attr('href'),
                        top = $(target).offset().top;
                    $('body,html').animate({scrollTop: top}, Math.abs(top - $(document).scrollTop()) / 1.5);

                    $('.toggle-btn').find('span:first').css({
                        transform: "rotate(0)",
                        top: '0px',
                        width: "35px"
                    })
                    $('.toggle-btn').find('span:nth-child(2)').css({
                        opacity: 1
                    })
                    $('.toggle-btn').find('span:nth-child(3)').css({
                        transform: "rotate(0)",
                        bottom: '0px',
                        width: "35px"
                    })

                    header.button = false;
                    $('.mobile-menu').fadeOut();
                });
            }
        }
    },
    upButton = {
        status: 0,
        can: 0,
        btn: '.scroll-up',
        controller: function () {
            $(upButton.btn).click(function () {
                $('html,body').animate({
                    scrollTop: 0
                }, {
                    duration: 1250
                });
            });
            $(window).scroll(function () {
                if ($(document).scrollTop() > $('.bonus').offset().top-200) {
                    $('.scroll-up').fadeIn();
                } else {
                    $('.scroll-up').fadeOut();
                }
            });
        }
    };
$(function () {
    header.controller();
    book.controller();
    upButton.controller();
    orderCopy();
    $('.testimonials button').click(function () {
        let e = this;
        testimonialsLoad(e);
    });
    $('#modal-video').click(function (e) {
        e.stopPropagation();
        const modal = "#modal-video iframe";
        const src = $(modal).attr('src');
        $(modal).attr('src', ' ');
        $(modal).attr('src', src);
    });
    $('#modal-video .close').click(function () {
        const modal = "#modal-video iframe";
        const src = $(modal).attr('src');
        $(modal).attr('src', ' ');
        $(modal).attr('src', src);
    });
    $('.sp-button-container ').click(function () {
        setTimeout(function () {
            if($('.sp-message-success').length >= 1){
                location.href = thanks;
            }
        },3000);
    })
    $(window).on('wpcf7:mailsent', function (e) {
        location.href = thanks;
    });
    if ($('.thanks')[0]) {
        $('.menu a').attr('href', location.origin)
    }
    if (innerWidth < 767) {
        $('.menu li a:contains("Главы книги")').parent().remove();
    }
})
