$(document).ready(function(){
    $('.in_div2>ul>li').on('click', function(e){
		e.preventDefault();

		var tt = $(this);
		var i = tt.index();

        $('.in_div1>div').eq(i).fadeIn(500).siblings().fadeOut(500);

    });
    
})