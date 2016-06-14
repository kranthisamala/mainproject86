jQuery(document).ready(function($) {
	$("#cre_feedbtn").click(function(event) {
		/* Act on the event */
		var name=$("[name='eid']").val();
		var eid=name.substring(name.indexOf("(")+1, name.indexOf(")"));
		var pun=$("[name='pun']").val();
		var com=$("[name='com']").val();
		var att=$("[name='att']").val();
		var text=$("[name='text']").val();
		var mid=$("#mid").val();
		
		$.post("feedback/index.php",{eid:""+eid ,mid:""+mid , pun:""+pun , com:""+com , att:""+att , text:""+text },function(data){
			console.log(data);
			$("[name='eid']").val('');
			$("[name='pun']").val('');
			$("[name='com']").val('');
			$("[name='att']").val('');
			$("[name='text']").val('');
			$(".center_content").html("Feedback Submitted....");
			$(".center_outer").fadeIn(800);
			setTimeout(function  () {
				$(".center_outer").fadeOut(800);
			},2500);

		});
	});
});