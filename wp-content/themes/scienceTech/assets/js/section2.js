
jQuery(document).ready(function () {
    var $ = jQuery.noConflict();
$( ".nav__hamburger" ).click(function() {
    $(".nav__parts").toggleClass("block");
    $(".nav__logs").toggleClass("block");
  
 });
 $( ".categ_hum" ).click(function() {
    $(".container-onglets").toggleClass("block_cat");

});
$( ".onglets" ).click(function() {
    $(".container-onglets").toggleClass("block_cat");

});
$( ".icone_nav" ).click(function() {
    $(".nav__parts").toggleClass("block");
    $(".nav__logs").toggleClass("block");

});
});


// Can also be used with $(document).ready()
