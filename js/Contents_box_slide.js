$(document).ready(function(){

    var conclick = $(".con_click>li");

    conclick.on('click', function(e){
        e.preventDefault();

        var tt = $(this);
        var td = tt.index();

        conclick.removeClass('on');
        tt.addClass('on');

        $('.con').removeClass('on');
        $('.con').eq(td).addClass('on');

    });

});


