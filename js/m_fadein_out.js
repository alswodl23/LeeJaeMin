$(document).ready(function(){
   
    var sliderlist = $('.m_bg_img>ul>li');
    var slidebtn = $('.m_bottom_btn>ul>li');
    var sliderlen = sliderlist.length;
    var current = 0;
    var sliderAnim;

    timer();


    slidebtn.on('click', function(){
        var tt = $(this);
        var i = tt.index();

        slidebtn.removeClass('on');
        tt.addClass('on');

        current = i - 1;
        
        sliderAnim(current);

    });
    
    sliderAnim = function(){
      
        if(current < sliderlen - 1){
            current++;
        }else{
            current = 0;
        }

        sliderlist.eq(current).fadeIn(500).siblings().fadeOut(500);

    };

    function timer(){
		setInterval(function(){
			var n = current +1;
			if(n==slidebtn.size()){n=0}

			slidebtn.eq(n).trigger("click")

		}, 3000);

	};    

    
});