$(document).ready(function(){
	// alert("hello");
	$("#menu_button").click(function(){
		$("#overlay").toggle();
		$(".round_menu_blocks").slideToggle(200);
	});
	$("#overlay").click(function(){
		$("#overlay").toggle();
		$(".round_menu_blocks").slideToggle(200);
	});
	$("[data-title]").hover(function(){
		$(".hint_set").html($(this).attr("data-title"));
		$(".hint_set").toggle();
		 $(document).mousemove(function(event) {
        	var x = event.pageX;
        	var y = event.pageY;
        	$(".hint_set").css("top",(y+22)+"px");
        	$(".hint_set").css("left",(x-30)+"px");
   		 });
	});
});