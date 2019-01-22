$(document).ready(function (){
    $('#Home').on('click', function () {
        $.scrollTo($('#HomeTo'), 1000);
    });
    $('#Desti').on('click', function () {
        $.scrollTo($('#DestiTo'), 1000);
    });
    $('#Ittinary').on('click', function () {
        $.scrollTo($('#IttinaryTo'), 1000);
    });
    $('#Ittinarybtn').on('click', function () {
        $.scrollTo($('#ReviewTo'), 1000);
    });
    $('#Review').on('click', function () {
        $.scrollTo($('#ReviewTo'), 1000);
    });
    $('#Contact').on('click', function () {
        $.scrollTo($('#ContactTo'), 1000);
    });
    $('#PlaceClick1').on('click', function () {
        $('#PlaceClick1').removeClass('text-muted');
        $('#PlaceClick2, #PlaceClick3, #PlaceClick4, #PlaceClick5').addClass('text-muted');
        $('#Place1').removeClass('off');
        $('#Place2, #Place3, #Place4, #Place5').addClass('off');
    })
    $('#PlaceClick2').on('click', function () {
        $('#PlaceClick2').removeClass('text-muted');
        $('#PlaceClick1, #PlaceClick3, #PlaceClick4, #PlaceClick5').addClass('text-muted');
        $('#Place2').removeClass('off');
        $('#Place1, #Place3, #Place4, #Place5').addClass('off');
    })
    $('#PlaceClick3').on('click', function () {
        $('#PlaceClick3').removeClass('text-muted');
        $('#PlaceClick1, #PlaceClick2, #PlaceClick4, #PlaceClick5').addClass('text-muted');
        $('#Place3').removeClass('off');
        $('#Place1, #Place2, #Place4, #Place5').addClass('off');
    })
    $('#PlaceClick4').on('click', function () {
        $('#PlaceClick4').removeClass('text-muted');
        $('#PlaceClick1, #PlaceClick2, #PlaceClick3, #PlaceClick5').addClass('text-muted');
        $('#Place4').removeClass('off');
        $('#Place1, #Place2, #Place3, #Place5').addClass('off');
    })
    $('#PlaceClick5').on('click', function () {
        $('#PlaceClick5').removeClass('text-muted');
        $('#PlaceClick1, #PlaceClick2, #PlaceClick3, #PlaceClick4').addClass('text-muted');
        $('#Place5').removeClass('off');
        $('#Place1, #Place2, #Place3, #Place4').addClass('off');
    })
});
