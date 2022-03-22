function init() {

}


$(document).ready(function() {

});

$(document).on("click", "#btnSoporte",function() {

    if ($('#typeRol').val()==1) {
        $('#lblTitulo').html("Acceso Soporte");
        $('#btnSoporte').html("Acceso Usuario");
        $('#typeRol').val(2);
        $('#photoU').attr("src","public/img/soporte-tecnico.png");


    }else {

        $('#lblTitulo').html("Acceso Usuario");
        $('#btnSoporte').html("Acceso Soporte");
        $('#typeRol').val(1);
        $('#photoU').attr("src","public/img/usuario.png");
    }

});

init();
