$(function(){
    $('a[title]').tooltip();

    $('.btn-submit').on('click', function(e) {

        var formname = $(this).attr('name'); 
        var tabname = $(this).attr('href');
        
        if ($('#' + formname)[0].checkValidity()) { /* Only works in Firefox/Chrome need polyfill for IE9, Safari. http://afarkas.github.io/webshim/demos/ */
            e.preventDefault();
            $('ul.nav li a[href="' + tabname + '"]').parent().removeClass('disabled');
            $('ul.nav li a[href="' + tabname + '"]').trigger('click');
        }

    });

    $('ul.nav li').on('click', function(e) {
        if ($(this).hasClass('disabled')) {
            e.preventDefault();
            return false;
        }
    });
});


$(function() {
  $("#fullPage").click(function() {
    $("#rightWrapper").toggleClass("full-page");
    $("#header").toggleClass("full-page");
  });
})

$(function() {
  $("#listView li").click(function () {
    if ( $("#listView li").hasClass("list-item-active") ) {
      $("#listView li").removeClass("list-item-active");
    }
    $(this).addClass("list-item-active");
  });
});
