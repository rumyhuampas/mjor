// JavaScript Document		
jQuery(document).ready(function() {    
    $.ajax({
        type: "POST",
        url: "/mjor/partes/getAutoFincas/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#finca").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
    
    $.ajax({
        type: "POST",
        url: "/mjor/partes/getAutoTareas/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#tarea").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
    
    $.ajax({
        type: "POST",
        url: "/mjor/partes/getAutoCampanias/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#campania").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
});