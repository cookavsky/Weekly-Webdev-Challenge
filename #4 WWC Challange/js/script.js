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

$(document).ready(function () {
    $("#Menu-B-T").on('click', function () {
        $("#MiniMenu-B-T").toggleClass("off on");
        $(".MiniBar-B-T").toggleClass("off on");
    });
    $("#Menu-B-E").on('click', function () {
        $("#MiniMenu-B-E").toggleClass("off on");
        $(".MiniBar-B-E").toggleClass("off on");
    });
    $("#Menu-B-B").on('click', function () {
        $("#MiniMenu-B-B").toggleClass("off on");
        $(".MiniBar-B-B").toggleClass("off on");
    });
    $("#Menu-B-L").on('click', function () {
        $("#MiniMenu-B-L").toggleClass("off on");
        $(".MiniBar-B-L").toggleClass("off on");
    });

});