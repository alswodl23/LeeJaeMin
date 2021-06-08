$(document).ready(function(){

    var pos2 = $('#wrap>div').eq(1).offset().top;
    var pos3 = $('#wrap>div').eq(2).offset().top;
    var pos4 = $('#wrap>div').eq(3).offset().top;
    var pos5 = $('#wrap>div').eq(4).offset().top;

    function main()
    {
        $('.m_textbox>h1').delay(1500).animate({opacity : '1'}, 500, 'linear');
        $('.m_textbox>p').delay(2500).animate({opacity : '1'}, 500, 'linear');  
        $('.m_bt1').delay(3500).animate({opacity : '1'}, 500, 'linear');
    }
    function mainReset()
    {
        $('.m_textbox>h1').css({opacity : '0'});

        $('.m_textbox>p').css({opacity : '0'});

        $('.m_bt1').css({opacity : '0'});
    }

    function con()
    {
        $('.in_div1').delay(1100).animate({opacity: '1'}, 500, 'linear');
        $('.in_div2').delay(1400).animate({opacity: '1'}, 500, 'linear');
    }
    function  conReset()
    {
        $('#contents>div').css({opacity: '0'});
    }

    function intro()
    {
        $('#contents>div').delay(1000).animate({opacity: '1'}, 500, 'linear');
    }
    function introReset()
    {
        $('.in_div1').css({opacity : '0'});
        $('.in_div2').css({opacity : '0'});
    }

    function News()
    {
        $('.n_m1_box').delay(1300).animate({left: '0'}, 700, 'linear');

        $('.n_main2').delay(1300).animate({right: '0'}, 700, 'linear');

        $('.n_water_mark1').delay(800).animate({opacity: '1'}, 500, 'linear');
        $('.n_water_mark2').delay(800).animate({opacity: '1'}, 500, 'linear');
        $('.n_main1').delay(800).animate({opacity: '1'}, 500, 'linear');

        $('.news_next').delay(1000).animate({opacity: '1'}, 500, 'linear');
        $('.news_prev').delay(1000).animate({opacity: '1'}, 500, 'linear');
    }
    function NewReset()
    {
        $('.n_m1_box').css({left: '-97%'});

        $('.n_main2').css({right: '-97%'});

        $('.n_water_mark1').css({opacity : '0'});
        $('.n_water_mark2').css({opacity : '0'});
        $('.n_main1').css({opacity : '0'});

        $('.news_next').css({opacity : '0'});
        $('.news_prev').css({opacity : '0'});
    }

    function footer()
    {
        $('.f_text_box').delay(1400).animate({opacity: '1'}, 500, 'linear');
        $('.f_bt').delay(2500).animate({opacity: '1'}, 500, 'linear');
        $('.f_bar').delay(3500).animate({opacity: '1'}, 500, 'linear');
    }
    function footerReset()
    {
        $('.f_text_box').css({opacity : '0'});
        $('.f_bt').css({opacity : '0'});
        $('.f_bar').css({opacity : '0'});
    }

//--------------------------------------------------------------------------
    
    $(window).on('scroll',function(){
        var scroll = $(this).scrollTop();

        $('.Side_rignt>ul>li').removeClass('on');

        if(scroll>=0 && scroll<(pos2 - 200)){
            $('.Side_rignt>ul>li').eq(0).addClass('on');

            main();

            introReset();
            conReset();
            NewReset();
            footerReset();
        }
        if(scroll>=(pos2 - 200) && scroll<(pos3 - 200)){
            $('.Side_rignt>ul>li').eq(1).addClass('on');

            con();

            conReset();
            mainReset();
            NewReset();
            footerReset();
        }
        if(scroll>=(pos3 - 200) && scroll<(pos4 - 200)){
            $('.Side_rignt>ul>li').eq(2).addClass('on');

            intro();

            introReset();
            mainReset();
            NewReset();
            footerReset();
        }
        if(scroll>=(pos4 - 200) && scroll<(pos5 - 200)){
            $('.Side_rignt>ul>li').eq(3).addClass('on');

            News();

            introReset();
            conReset();
            mainReset();
            footerReset();
        }
        if(scroll>=(pos5 - 200)){
            $('.Side_rignt>ul>li').eq(4).addClass('on');

            footer();

            introReset();
            conReset();
            mainReset();
            NewReset();
            footerReset();
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


