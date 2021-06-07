$(document).ready(function(){

    var next = $('.news_next>a');
    var prev = $('.news_prev>a');
    var speed = 500;

	var sliderlist = $('.n_main1>li');
    var sliderlen = sliderlist.length;
    var current = 0;
    

    next.on('click', function(e){
		e.preventDefault();

		$('.n_main2').stop().animate({'margin-top':'-50%'},speed,function(){
			$('.n_main2>li').first().appendTo('.n_main2');
			$('.n_main2').css({'margin-top':'-25%'});
		});

		if(current < sliderlen - 1){
            current++;
        }else{
            current = 0;
        }

        sliderlist.eq(current).fadeIn(500).siblings().fadeOut(500);

    });
    
    prev.on('click', function(e){
		e.preventDefault();

		$('.n_main2').stop().animate({'margin-top':'0px'},speed,function(){
			$('.n_main2>li').last().prependTo('.n_main2');
			$('.n_main2').css({'margin-top':'-25%'});
		});

			if(current > 0){
				current--;
			}else{
				current = sliderlen - 1;
			}
		
			sliderlist.eq(current).fadeIn(500).siblings().fadeOut(500);
	});
});

