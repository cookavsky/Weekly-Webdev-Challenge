$(document).ready(function () {
    $("#hamburger").on('click', function () {
        $("aside").toggleClass("off on");
    });

});

$(document).ready(function () {
    $("#Blog").on('click', function () {
        $("#BlogMenu").toggleClass("off on");
    });

});