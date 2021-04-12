$(document).ready(function(){

    var Btn_sns1 = $(".Side_left_sns_btn1>a>i");
    var Btn_sns2 = $(".Side_left_sns_btn2>a>i");
    var speed = 800;

    Btn_sns1.on('click', function(e){
        e.preventDefault();

        $('.Side_left_sns').css({'left' : '-80px'}).animate({"left" : "0"}, speed);
        $('.Side_left_sns_btn1').removeClass('on');
        $('.Side_left_sns_btn2').addClass('on');
    });

    Btn_sns2.on('click', function(e){
        e.preventDefault();

        $('.Side_left_sns').css({"left" : '0'}).animate({"left" : "-80px"}, speed);
        $('.Side_left_sns_btn2').removeClass('on');
        $('.Side_left_sns_btn1').addClass('on');
    });
    

});