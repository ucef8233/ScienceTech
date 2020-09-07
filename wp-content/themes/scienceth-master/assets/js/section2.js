jQuery(document).ready(function ($) {
    var $ = jQuery.noConflict();
    $(".nav__hamburger").click(function () {
        $(".nav__parts").toggleClass("block");
        $(".nav__logs").toggleClass("block");

    });
    $(".categ_hum").click(function () {
        $(".container-onglets").toggleClass("block_cat");

    });
    $(".onglets").click(function () {
        $(".container-onglets").toggleClass("block_cat");

    });
    $(".icone_nav").click(function () {
        $(".nav__parts").toggleClass("block");
        $(".nav__logs").toggleClass("block");

    });
    $('.section2__humberger img').click(function () {
        $('.tabs').toggleClass('display__tabs')
    })
    $('.tabs a').click(function () {
        $('.tabs').toggleClass('display__tabs')
    })
    $('.tabgroup > div').hide();
    $('.tabgroup > div:first-of-type').show();
    $('.tabs a').click(function (e) {
        e.preventDefault();
        var $this = $(this),
            tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

    })
});