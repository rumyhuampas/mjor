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
	    		if(data[0] != null){
	    			var url = data[1];
	    			jQuery.post( 
				    	'/mjor/reportes/printvale/',
				    	{
				    		valeid: data[0],
				    	},
					    function( data ){
							var newwin = window.open("", '_blank');
			    			newwin.document.open("application/pdf");
			    			newwin.document.write(data);
			    			newwin.document.close();
			    			newwin.focus();
			    			
			    			window.location.replace(url);
					    }
			    	);
				}
		    }
    	);
	});
	
	$('[name=reprint]').click (function ()
	{
		$(this).closest("form").submit();
	});
});