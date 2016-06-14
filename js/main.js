$(document).ready(function(){
	$('.info').click(function(){
		var key=$(this).attr("id");
		if(key!='profile')
		window.location.href = "../"+key;
	});
	$('#login_to #manager').click(function (){
		$('#login_to #emp').attr('active','none');
		$('#login_to #manager').attr('active','active');
		$('#admin_login').show();
		$('#emp_login').hide();
	});
	$('#login_to #emp').click(function (){
		
		$('#login_to #manager').attr('active','none');
		$('#login_to #emp').attr('active','active');
		$('#admin_login').hide();
		$('#emp_login').show();
	});
});