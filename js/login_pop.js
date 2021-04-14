$(document).ready(function(){

    $('.loginA').on('click', function(){
        $('.pop1').addClass('on');
        $('.loginA').removeClass('on');
        $('.loginB').addClass('on');       
    });

    $('.loginB').on('click', function(){
        $('.pop1').removeClass('on');
        $('.loginB').removeClass('on');
        $('.loginA').addClass('on');     
    });

});