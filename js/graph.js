jQuery(document).ready(function($) {
	$( "#eid" ).change(function() {
		 var name=$("#eid").val();
 		 var eid=name.substring(name.indexOf("(")+1, name.indexOf(")"));window.location.replace("http://www.google.com");
 		 window.location.replace("?eid="+eid); 
	});	
});