jQuery(document).ready(function ($) {
    // var $ = jQuery.noConflict();
    // when the hash is changed
    // window.addEventListener('hashchange', function () {
    //     if (location.hash === '#login') {
    //         $('#registerModal').modal('hide');
    //         $('#loginmodal').modal('show');
    //     }
    // }, false);

    // // when user refresh page on /#auth
    // if (location.hash === "#login") {
    //     $('#loginmodal').modal('show');
    // }

    // // when the hash is changed
    // window.addEventListener('hashchange', function () {
    //     if (location.hash === '#register') {
    //         $('#loginmodal').modal('hide');
    //         $('#registerModal').modal('show');
    //     }
    // }, false);

    // // when user refresh page on /#register
    // if (location.hash === "#register") {
    //     $('#registerModal').modal('show');
    // }


    $('.slider').bxSlider();
    if ($(window).width() < 768) {
        $('.side-bar-posts').bxSlider({
            controls: false,
            infiniteLoop: true,
            speed: 600,
            auto: true
        });
    }



    // end reverse the comment form of wordpress

    // $('#loginBtn').click(function () {
    //     $('#registerModal').modal('hide');
    //     $('#loginmodal').modal('show');
    // })
    // $('#registerBtn').click(function () {
    //     $('#loginmodal').modal('hide');
    //     $('#registerModal').modal('show');
    // })

    // change the text that exist above the edit profile image
    $("#wpua-add-existing").html('<i class="fas fa-camera"></i>');

});


// when user reize the window
// $(window).resize(function () {
//     var width = $(window).width();
//     if (width < 768) {
//         $('.side-bar-posts').bxSlider();
//     }
// })