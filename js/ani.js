$(document).ready(function(){

    first();
    secound();

    function first()
    {
        $('.Bar_box').css({top: '-83px'}).delay(500).animate({top: '0'}, 500, 'linear');

        $('.Side_rignt').css({right: '-2%'}).delay(500).animate({right: '1%'}, 500, 'linear');

        $('.Side_left_sns').css({left: '-130px'}).delay(500).animate({left: '-80px'}, 500, 'linear');

        $('.m_bottom_btn').css({bottom: '-5%'}).delay(500).animate({bottom: '3%'}, 500, 'linear');

        $('.m_blackbox').css({opacity : '0'}).delay(500).animate({opacity : '1'}, 500, 'linear');

        $('.m_textbox>h1').css({opacity : '0'}).delay(1500).animate({opacity : '1'}, 500, 'linear');

        $('.m_textbox>p').css({opacity : '0'}).delay(2500).animate({opacity : '1'}, 500, 'linear');

        $('.m_bt1').css({opacity : '0'}).delay(3500).animate({opacity : '1'}, 500, 'linear');
    }

});


