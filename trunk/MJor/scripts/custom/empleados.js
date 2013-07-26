// JavaScript Document		
jQuery(document).ready(function() {
	$('input:checkbox').click (function ()
	{
		var thisCheck = $(this);
		jQuery.post( 
		    '/mjor/empleados/changeactive/',
		    {
	    		id: thisCheck.attr('id'),
	    		active: thisCheck.is (':checked')
	    	},
		    function( data ){
		    	
		    }
    	);
	});
	
	$.ajax({
        type: "POST",
        url: "/mjor/empleados/getAutoSocios/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#socio").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
    
    $.ajax({
        type: "POST",
        url: "/mjor/empleados/getAutoTarifas/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#tarifa").autocomplete({
                source: datafromServer
            });
            $("#tarifaesp").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
    
    $.ajax({
        type: "POST",
        url: "/mjor/empleados/getAutoFincas/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#fincatrab").autocomplete({
                source: datafromServer
            });
            $("#fincacobro").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
});