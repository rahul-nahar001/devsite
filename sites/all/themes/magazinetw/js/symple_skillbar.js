jQuery(function($){
	$(document).ready(function(){
		$('.symple-skillbar').each(function(){
			$background = $(this).attr('data-background');
			$percent = $(this).attr('data-percent');
			//$(this + " > .symple-skillbar-bar").animate({ width: $percent, background: "#"+$background }, 1500 );
//			$(this).$(".symple-skill-bar-percent").text($percent);
//			$(this).$(".symple-skillbar-bar").css();
			
			
			$(this).find('.symple-skillbar-bar').animate({ width: $percent }, 1500 );
			$(this).find('.symple-skillbar-title, .symple-skillbar-bar').css("background","#"+$background);
			
		//	, background: "#"+$background
			$(this).find('.symple-skill-bar-percent').text($percent);
		});
	});
});
	