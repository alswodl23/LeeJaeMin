$(document).ready(function(){

    var next = $('.mam_2A_next');

    var prev = $('.mam_2A_prev');

    var close = $('.mam_1A_2>div>a');

    var speed = 500;
    

    next.on('click', function(e){
		e.preventDefault();

		$('.panel').stop().animate({'margin-left':'-50%'},speed,function(){
			$('.panel>li').first().appendTo('.panel');
			$('.panel').css({'margin-left':'-25%'});
		});
    });
    
    prev.on('click', function(e){
		e.preventDefault();

		$('.panel').stop().animate({'margin-left':'0px'},speed,function(){
			$('.panel>li').last().prependTo('.panel');
			$('.panel').css({'margin-left':'-25%'});
		});
    });

    $('.panel>li').on('click', function(e){
      e.preventDefault();
      
        var tt = $(this);

        $('.panel>li').css({'width' : '0%'});

        tt.stop().animate({'width' : '90%'},speed);

        close.addClass('on');
    });

    close.on('click', function(e){
      e.preventDefault();

      $('.panel>li').stop().animate({'width' : '14.666%'});

      close.removeClass('on');

    });



});