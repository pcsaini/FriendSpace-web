

window.addEventListener("load", function(){
    $('.preloader-background').fadeOut('slow');

    $('.preloader-wrapper')
        .fadeOut();
});


$( document ).ready(function() {
    $('.datepicker').pickadate({
        format: 'yyyy-mm-dd',
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 30, // Creates a dropdown of 15 years to control year
        min: new Date(1990, 1, 1),
        max: new Date(2010, 1, 1)
    });
});



$(document).ready(function() {
    $('select').material_select();
    $("dropdown-button").dropdown();
});

