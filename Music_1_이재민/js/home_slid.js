$(document).ready(function(){

    var visual = $(".video_1>li");

	var speed = 500;

	var current = 0;

	timer();


	function move(n){
		var currentE1 = visual.eq(current);
		var nextE1 = visual.eq(n);

		currentE1.css({"left" : 0}).animate({"left" : "-100%"}, speed);
		nextE1.css("left" , "100%").animate({"left" : 0});

		current = n;
	};

	function timer(){
		setInterval(function(){
			var n = current +1;
			if(n==visual.size()){n=0}//비쥬얼의 갯수와 같아지면 다시 0이 되어라.

			move(n);

		}, 3000);

	};

});