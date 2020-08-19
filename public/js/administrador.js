$(document).ready(function () {
// evento de "submit"
    $("#b_enviar").click(function (e) {
// parar o envio para que possamos faze-lo manualmente.
        e.preventDefault();
        // captura o formulário
        var form = $('#noresize').val();
        // cria um FormData {Object}            
        // processar
        if (form == "") {
            $("#myModalError").modal("show");
        } else {

            $.ajax({
                type: "POST",
                url: "/administradorInsert", //acerte o caminho para seu script php
                data: {
                    form: form
                }, headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data, textStatus, jqXHR) {
                    $("#myModalSucess").modal("show");
                    $(':input','#caixa')
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
                    .removeAttr('checked')
                    .removeAttr('selected');
                }




            });
        }

    });
});