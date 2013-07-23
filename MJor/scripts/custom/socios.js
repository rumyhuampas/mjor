// JavaScript Document		
jQuery(document).ready(function() {
	$('input:checkbox').click (function ()
	{
		var thisCheck = $(this);
		jQuery.post( 
	    '/mjor/socios/changeactive/',
	    {
	    	id: thisCheck.attr('id'),
	    	active: thisCheck.is (':checked')},
		    function( data ){
		    	
		    }
    	);
	});
});