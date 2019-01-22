$(document).ready(function () {
    $("#hamburger").on('click', function () {
        $("aside").toggleClass("off on");
    });
    $("#Blog").on('click', function () {
        $("#BlogMenu").toggleClass("off on");
    });
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
    $("#CircleWhite1").on('click', function () {
        $("#CircleWhite1").addClass("white");
        $("#CircleWhite2, #CircleWhite3, #CircleWhite4").removeClass("white");
        $(".Album").removeAttr('id');
        $(".Album").attr('id', 'AlbumArt1');
        $("#TextArt1").removeClass("off");
        $("#TextArt2, #TextArt3, #TextArt4").addClass("off");
    });
    $("#CircleWhite2").on('click', function () {
        $("#CircleWhite2").addClass("white");
        $("#CircleWhite1, #CircleWhite3, #CircleWhite4").removeClass("white");
        $(".Album").removeAttr('id');
        $(".Album").attr('id', 'AlbumArt2');
        $("#TextArt2").removeClass("off");
        $("#TextArt1, #TextArt3, #TextArt4").addClass("off");
    });
    $("#CircleWhite3").on('click', function () {
        $("#CircleWhite3").addClass("white");
        $("#CircleWhite1, #CircleWhite2, #CircleWhite4").removeClass("white");
        $(".Album").removeAttr('id');
        $(".Album").attr('id', 'AlbumArt3');
        $("#TextArt3").removeClass("off");
        $("#TextArt1, #TextArt2, #TextArt4").addClass("off");
    });
    $("#CircleWhite4").on('click', function () {
        $("#CircleWhite4").addClass("white");
        $("#CircleWhite1, #CircleWhite2, #CircleWhite3").removeClass("white");
        $(".Album").removeAttr('id');
        $(".Album").attr('id', 'AlbumArt4');
        $("#TextArt4").removeClass("off");
        $("#TextArt1, #TextArt2, #TextArt3").addClass("off");
    });
    $("#CircleGrey1").on('click', function () {
        $("#CircleGrey1").addClass("grey");
        $("#CircleGrey2, #CircleGrey3").removeClass("grey");
        $("#Hot1").removeClass("off");
        $("#Hot2, #Hot3").addClass("off");
    });
    $("#CircleGrey2").on('click', function () {
        $("#CircleGrey2").addClass("grey");
        $("#CircleGrey1, #CircleGrey3").removeClass("grey");
        $("#Hot2").removeClass("off");
        $("#Hot1, #Hot3").addClass("off");
    });
    $("#CircleGrey3").on('click', function () {
        $("#CircleGrey3").addClass("grey");
        $("#CircleGrey1, #CircleGrey2").removeClass("grey");
        $("#Hot3").removeClass("off");
        $("#Hot1, #Hot2").addClass("off");
    });
});