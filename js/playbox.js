$(document).ready(function(){
    

    $('.pb2_1_1').on('click', function(e){
        e.preventDefault();

        $('.playbox1').addClass('on');

        $('.pb2_1>a').addClass('on');

        $('.pb2_1_1').removeClass('on');
    });

    $('.pb2_1_2').on('click', function(e){
        e.preventDefault();

        $('.playbox1').removeClass('on');

        $('.pb2_1>a').addClass('on');

        $('.pb2_1_2').removeClass('on');
    });


});