$(document).ready(function () {
    // evento de "submit"
    $("#b_enviar").click(function (e) {
        // parar o envio para que possamos faze-lo manualmente.
        e.preventDefault();
        // captura o formulário
        var bloco = $('#bloco').val();
        var local = $('#sel1').val();
        var oque = $('#usr').val();
        var form = $('#noresize').val();
        // cria um FormData {Object}
        // processar
        if (bloco == null || local == null || oque == "" || form == "") {
            $("#myModalError").modal("show");
        } else {

            $.ajax({
                type: "POST",
                url: "/alunoInsert", //acerte o caminho para seu script php
                data: {
                    bloco: bloco,
                    local: local,
                    oque: oque,
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
