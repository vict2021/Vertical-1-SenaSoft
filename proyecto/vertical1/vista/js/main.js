$(document).ready(function () {

    cargardatos();
    $("#btnRegistrar").click(function () {

        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var tipoDocumento = $("#tipoDocumento").val();
        var numeroDocumento = $("#numeroDocumento").val();
        var fechaCita = $("#fechaCita").val();
        var horaCita = $("#horaCita").val();
        var pdf = document.getElementById("pdf").files[0];
      



        var objData = new FormData();
        objData.append("nombre", nombre);
        objData.append("apellido", apellido);
        objData.append("tipoDocumento", tipoDocumento);
        objData.append("documento", numeroDocumento);
        objData.append("fechaCita", fechaCita);
        objData.append("horaCita", horaCita);
        objData.append("pdf", pdf);


        $.ajax({
            url: "control/historialControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {

                cargardatos();

            }
        })
    })


    function cargardatos() {
        var listadatos = "ok";
        var objListardatos = new FormData();
        objListardatos.append("listadatos", listadatos);

        $.ajax({
            url: "control/historialControl.php",
            type: "post",
            dataType: "json",
            data: objListardatos,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {

                var interface = '';
                respuesta.forEach(cargarTabladatos);

                function cargarTabladatos(item, index) {
                    interface += '<tr>';
                    interface += '<td>' + item.nombre + '</td>';
                    interface += '<td>' + item.apellido + '</td>';
                    interface += '<td>' + item.fechaCita + '</td>';
                    interface += '<td>' + item.horaCita + '</td>';
                    interface += '<td>' + item.pdf + '</td>';
                    interface += '<td>'

                    interface += '<div class="btn-group">';                  
                    interface += ' <iframe id="myFrame"  src="'+ item.pdf +'" style="height:200px;width:100%"></iframe>';
                
                    interface += '</div >';

                    interface += '</td>';
                    interface += '</tr>';
                }

                $("#cuerpoTabla").html(interface);
            }
        })
    }


    $("#cuerpoTabla").on("click", "#btnpdf", function() {
        
        var pdf = $(this).attr("pdf");
   
        
        $("#txtpdf").val(pdf);
    })
})
