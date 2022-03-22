function init() {
    
}

$(document).ready(function(){

    /* $.post("",{},function () {
        
    }); */
    var detalleTick = getUrlParameter('ID'); 

    infoChat(detalleTick);
    
    $('#tickDetalle').summernote({
        height: 150
    });
    $('#descripcion').summernote({
        height: 350
    });
    $('#descripcion').summernote('disable');


    //funcion para enviar mensaje 
    $("#mandar").on("click",function(){
        console.log("prueba xd");
        var idUser = $('#id_user').val();
        var idTicket = getUrlParameter('ID');
        var tickDetalle=$('#tickDetalle').val();
        if ($('#tickDetalle').summernote('isEmpty')) {
            swal('Campo Vacio!','Revisar el campo','warning');
            return ; 
        }else{
            tipo = 1;
            $.post("../../controller/ticket.php?op=saveC",{idUser: idUser,idTicket:idTicket,tickDetalle:tickDetalle},function (data) {
                $('#tickDetalle').summernote('reset');
                infoChat(idTicket);
                swal("Enviado","ok","success");
                
            });
        }
    });  

    //funcion para cancelar mensaje
    $('#can').click("click",function(e){
        e.preventDefault();
        swal({
                    title: "Estas Seguro de Eleminar el Mensaje?",
                    text: "Ya no podras responder",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-warning",
                    confirmButtonText: "Si",
                    cancelButtonText: "No, Cancelar Plox",
                    closeOnConfirm: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        var idUser = $('#id_user').val(); 
                        var tickId = getUrlParameter('ID');
                        $.post("../../controller/ticket.php?op=setStatus",{idUserC : idUser,tickId : tickId,tickDetalle:'Ticket Cerrado!'},function() {
                            swal({
                                title: "Ticket Cerrado!",
                                text: "Se cerro exitosamente!",
                                type: "success",
                                confirmButtonClass: "btn-success"
                            });
                            infoChat(tickId);
                            
                        });
                    

                    }
                });
    });


});

function infoChat(detalleTick) {
    $.post("../../controller/ticket.php?op=detalleTick",{detalleTick : detalleTick},function(data){
        $('#sectionDetalle').html(data);
    });
    $.post("../../controller/ticket.php?op=mostar",{detalleTick : detalleTick},function(data){
        data = JSON.parse(data);

        $('#lbEstado').html('Estado: '+data.estado);
        $('#lbUserName').html('Usuario: '+data.nombre);
        $('#lbDate').html('Fecha de Creacion: '+data.fecha);
        $('#detalleId').html('Detalle Ticket - '+data.ticId);
        
        $('#categoria').val(data.cat);
        $('#titulo').val(data.tic_Titulo);

        $('#descripcion').summernote('code',data.tic_descrip);

        if (data.estado == '<span class="label label-danger">Inactivo</span>') {
            $('#pnlConversation').hide();
        }
        
    });
}

//funcion para poder capturar el id del la URl
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

init();