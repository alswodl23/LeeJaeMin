$('document').ready(function(){

    $('.pb1_1>a').on('click', function(e){
        e.preventDefault();

        $('.mainmenu2').addClass('on');
    });

    $('.mam_1A_1A_1>div>div>a').on('click', function(e){
        e.preventDefault();

        $('.mainmenu2').addClass('on');
    });

    $('.mam_1A_1A_1>div>a').on('click', function(e){
        e.preventDefault();
    });

    $('.mam_1B>div>a').on('click', function(e){
        e.preventDefault();

        $('.mainmenu2').addClass('on');
    });

    $('.mam_2A>a').on('click', function(e){
        e.preventDefault();

        $('.mainmenu2').removeClass('on');
    });

});