// JavaScript Document		
jQuery(document).ready(function() {
	$('input:checkbox').click (function ()
	{
		var thisCheck = $(this);
		jQuery.post( 
	    '/mjor/campanias/changeactive/',
	    {
	    	id: thisCheck.attr('id'),
	    	active: thisCheck.is (':checked')},
		    function( data ){
		    	
		    }
    	);
	});
});