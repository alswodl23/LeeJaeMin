$(document).ready(function(){

    var pos2 = $('#wrap>div').eq(1).offset().top;
    var pos3 = $('#wrap>div').eq(2).offset().top;

    $(window).on('scroll',function(){
        var scroll = $(this).scrollTop();

        $('.Side_rignt>ul>li').removeClass('on');

        if(scroll>=0 && scroll<(pos2 - 200)){
            $('.Side_rignt>ul>li').eq(0).addClass('on');
        }
        if(scroll>=(pos2 - 200) && scroll<(pos3 - 200)){
            $('.Side_rignt>ul>li').eq(1).addClass('on');
        }
        if(scroll>=(pos3 - 200)){
            $('.Side_rignt>ul>li').eq(2).addClass('on');
        }
    })


    
    //네비버튼 클릭시 매칭되는 해당박스의 위치값으로 자동 스크롤
    $('.Side_rignt>ul>li').on('click',function(e){
        e.preventDefault();

        var target = $(this).children('a').attr('href');
        var target_pos = $(target).offset().top;

        $('html,body').stop().animate({'scrollTop':target_pos},800);
    });

});


