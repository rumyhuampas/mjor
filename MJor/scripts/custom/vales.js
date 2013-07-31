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
					    	// responseText encoding 
							//pdfText=jQuery.base64.decode($.trim(data));
							pdfText = data
							
							// Now pdfText contains %PDF-1.4 ...... data...... %%EOF
							
							var winlogicalname = "detailPDF";
							var winparams = 'dependent=yes,locationbar=no,scrollbars=yes,menubar=yes,'+
							            'resizable,screenX=50,screenY=50,width=850,height=1050';
							
							var htmlText = '<embed width=100% height=100%'
				                 + ' type="application/pdf"'
				                 + ' src="data:application/pdf,'
				                 + escape(data)
				                 + '"></embed>'; 
							
			                // Open PDF in new browser window
			                var detailWindow = window.open ("", '_blank');
			                detailWindow.document.write (htmlText);
			                detailWindow.document.close ();
							                
							/*var newwin = window.open("", '_blank');
			    			newwin.document.open("application/pdf");
			    			newwin.document.write(data);
			    			newwin.document.close();
			    			newwin.focus();*/
			    			
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