$(document).ready(function(){

    $('.loginA').on('click', function(){
        $('.pop1').addClass('on');
        $('.loginA').removeClass('on');
        $('.loginB').addClass('on');       
    });

    $('.loginB').on('click', function(){
        $('.pop1').removeClass('on');
        $('.loginB').removeClass('on');
        $('.pop_up').removeClass('on');
        $('.loginA').addClass('on');     
    });

    $('.sign_up').on('click', function(){
        $('.pop_up').removeClass('on'); 
        $('.pop_up').addClass('on'); 
    });

    $('.submit_btn').on('click', function(){
        $('.pop_up').removeClass('on'); 
    });

});