// JavaScript Document		
jQuery(document).ready(function() {    
    $('#btnsave').click (function ()
	{
		jQuery.post( 
	    	'/mjor/reportes/newvale/',
	    	{
	    		date: $('[name="date"]').val(),
	    		text: $('[name="text"]').val()
	    	},
		    function( data ){
		    	data = JSON.parse(data);
	    		window.location.replace(data[1]);
	    		if(data[0] != null){
	    			var win = window.open('/mjor/reportes/printvale/', '_blank');
					win.focus();
				}
		    }
    	);
	});
	
	$('#reprint').click (function ()
	{
		$('#formprintvale').submit();
	});
	
	/*$('#reprint').click (function ()
	{
		var thisbtn = $(this);
		jQuery.post( 
	    	'/mjor/reportes/printvale/',
	    	{
	    		valeid: thisbtn.attr('valeid'),
	    	},
		    function( data ){
    			//var win = window.open("data:application/pdf," + data, '_blank');
    			//var win = window.open("data:application/pdf;base64, " + escape(data));
    			//win.document.write(data);
				//win.focus();
				var newwin = window.open("data:application/pdf");
    			newwin.document.open("application/pdf");
    			//newwin.document.write(data);
    			newwin.document.close()
    			newwin.focus()
		    }
    	);
	});*/
});