$(document).ready(function () {
    $("img.video").click(function () {
        $("img.video").css('display','none');
        $("video.video").css('display','block');
    });
    document.getElementById('video').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        $("img.video").css('display','block');
        $("video.video").css('display','none');
    }


    $(".navLeft, #left").click(function () {
        $('.navLeft, #left').addClass('active');
        $('#whatWeDoing').css('display','block');
        $('#whyWe, #portfolioList').css('display','none');
        $('.navCenter, .navRight, #center, #right').removeClass('active');
    });
    $(".navCenter, #center").click(function () {
        $('.navCenter, #center').addClass('active');
        $('#whyWe').css('display','block');
        $('#whatWeDoing, #portfolioList').css('display','none');
        $('.navLeft, .navRight, #left, #right').removeClass('active');
    });
    $(".navRight, #right").click(function () {
        $('.navRight, #right').addClass('active');
        $('#portfolioList').css('display','block');
        $('#whatWeDoing, #whyWe').css('display','none');
        $('.navLeft, .navCenter, #left, #center').removeClass('active');
    });

    $("#p1, #p1-carousel, #arrowTo1").click(function () {
        $('#p2, #p2-carousel, #p3, #p3-carousel').removeClass('active');
        $("#p1, #p1-carousel").addClass('active');
        $('#slideOne').css('display','block');
        $('#slideTwo, #slideThree').css('display','none');
        $("nav").addClass('bg-light');
        $("nav").removeClass('bg-dark');
    });
    $("#p2, #p2-carousel, #arrowTo2").click(function () {
        $('#p1, #p1-carousel, #p3, #p3-carousel').removeClass('active');
        $("#p2, #p2-carousel").addClass('active');
        $('#slideTwo').css('display','block');
        $('#slideOne, #slideThree').css('display','none');
        $("nav").addClass('bg-dark');
        $("nav").removeClass('bg-light');
    });
    $("#p3, #p3-carousel, #arrowTo3").click(function () {
        $('#p1, #p1-carousel, #p2, #p2-carousel').removeClass('active');
        $("#p3, #p3-carousel").addClass('active');
        $('#slideThree').css('display','block');
        $('#slideOne, #slideTwo').css('display','none');
        $("nav").addClass('bg-dark');
        $("nav").removeClass('bg-light');
    });

    $("#photoOne").click(function () {
        $('.expertFeedback h5.mainDescription').text('Дмитрий Новиков - ЧЕЛОВЕК НЕДВИЖИМОСТЬ, в данной сфере уже около 15 лет,\n' +
            '                            знает каждый нюанс, как свои пять пальцев на руке. У него своя индивидуальная стратегия обработки рынка,\n' +
            '                            которая ппроверина на огромном количестве проектов.');
    });
    $("#photoTwo").click(function () {
        $('.expertFeedback h5.mainDescription').text('Text 2');
    });
    $("#photoThree").click(function () {
        $('.expertFeedback h5.mainDescription').text('Text 3');
    });

    $('.project').mouseenter(function () {
        $(this).addClass('active');
        $("#projectsCarousel").css({'background-image':'url(\'img/projectsCarousel/example.png\')', 'background-repeat': 'no-repeat'});
    });
    $('.project').mouseleave(function () {
        $(this).removeClass('active');
        $("#projectsCarousel").css({'background-image':'none', 'background-repeat': 'no-repeat'});
    });
    if ($('.project').hasClass('active')){
        $("#projectsCarousel").css({'background-image':'url(\'img/projectsCarousel/example.png\')', 'background-repeat': 'no-repeat'});
    }
});
