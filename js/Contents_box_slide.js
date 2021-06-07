$(document).ready(function(){

    var conclick = $(".con_click>li");

    conclick.on('click', function(e){
        e.preventDefault();

        var tt = $(this);
        var i = tt.index();

        conclick.removeClass('on');
        tt.addClass('on');

        // $('.con').removeClass('on');
        // $('.con').eq(i).addClass('on');

        $('.con>div').eq(i).fadeIn(500).siblings().fadeOut(500);
    });

});


