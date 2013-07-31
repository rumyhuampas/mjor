// JavaScript Document		
jQuery(document).ready(function() {    	
	var valeid = $('[name=_valeid]');
	if(valeid.attr('value') != undefined){
		$('#formprintvale' + valeid.attr('value')).submit();	
	}
	
	$('[name=reprint]').click (function ()
	{
		$(this).closest("form").submit();
	});
});