function init() {
    $("#tick_form").on("submit",function(e) {
        saveAndEdit(e);
    });
}

$(document).ready(function() {
    $('#descrip').summernote({
        height: 200
    });

    $.post("../../controller/categoria.php?op=combo",function(data,status){
        $('#catId').html(data);
        
    });

});

function clearInputs() {
    $('#titulo').val('');
    $('#descrip').summernote('reset');
}

function saveAndEdit(e) {
        e.preventDefault();
        var formData = new FormData($("#tick_form")[0]);
        if (($('#titulo').val('') == '') || ($('#descrip').summernote('isEmpty'))) {
            swal("Algún Campo Vacio","Revisar...","warning");
            return;
        }else{
            //console.log('entro');
            $.ajax({
            url: "../../controller/ticket.php?op=save",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                clearInputs();
                swal("Correcto!","Registrado Correctamente! ", "success");
            }

        });
    }
}    


init();