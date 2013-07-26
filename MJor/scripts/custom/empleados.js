// JavaScript Document		
jQuery(document).ready(function() {
	$('input:checkbox').click (function ()
	{
		var thisCheck = $(this);
		jQuery.post( 
	    '/mjor/empleados/changeactive/',
	    {
	    	id: thisCheck.attr('id'),
	    	active: thisCheck.is (':checked')},
		    function( data ){
		    	
		    }
    	);
	});
	
	jQuery( "#socio" ).autocomplete({
		source: '/mjor/empleados/getAutoSocios/'
	});
	
	jQuery( "#tarifa" ).autocomplete({
		source: '/mjor/empleados/getAutoTarifas/'
	});
	
	jQuery( "#tarifaesp" ).autocomplete({
		source: '/mjor/empleados/getAutoTarifas/'
	});
	
	jQuery( "#fincatrab" ).autocomplete({
		source: '/mjor/empleados/getAutoFincas/'
	});
	
	jQuery( "#fincacobro" ).autocomplete({
		source: '/mjor/empleados/getAutoFincas/'
	});
});