//----------------------------------------------------------------------------------//
//-------------Chamando essa função logo que a pagina é carregada------------------//
//--------------------------------------------------------------------------------//
$(document).ready(function () {
    listarDados();

});
//----------------------------------------------------------------------------------//
//--------------------------------Chamando TOKEN-----------------------------------//
//--------------------------------------------------------------------------------//
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
//---------------------------------------------------------------------------------//
//-------------------Chamando modal para registrar usuario------------------------//
//-------------------------------------------------------------------------------//

function novoDado() {
    save_method = 'adicionar';
    $("#senhas").show();
    $('#datas_visualizacao').hide();
    $('#meuModalEditar form')[0].reset();
    $('#meuModalEditar').modal('show');
    $('.card-header').text('Adicionar novo usuário');
    $('#registrar_editar').text('Adicionar');

}
//----------------------------------------------------------------------------------//
//-------------------------Listando dados do usuario-------------------------------//
//----------------------------via DataTables--------------------------------------//
//------------------Convertendo data de forma americana--------------------------//
//-----------------------------para pt-br---------------------------------------//
//-----------------------------------------------------------------------------//
function listarDados() {
    moment.locale('pt-br');

    var table = $('#tableBD').DataTable({
        processing: true,
        serverSide: true,
        order: [[5, "desc"]],
        ajax: "/bancodedados/ver",
        columns: [
            { data: 'id_usuario', name: 'id_usuario' },
            {
                'data': 'nome',
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(oData.nome + " " + oData.sobrenome);
                }
            },
            { data: 'identificador', name: 'identificador', "defaultContent": "<i> possui</i>" },
            { data: 'email', name: 'email' },
            {
                'data': 'data_de_criacao',
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(moment(oData.data_de_criacao).format('LL'));
                }
            },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        //Traduzindo a Tabela para o PORTUGUÊS
        "bJQueryUI": true,
        "oLanguage": {
            "lengthChange": false,
            "pageLength": 10,
            "sProcessing": "Processando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "Não foram encontrados resultados",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "",
            "sInfoPostFix": "",
            "sSearch": "Pesquisar: ",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sPrevious": "Anterior",
                "sNext": "Próximo",
                "sLast": "Último"
            }
        }
    });
    return table;
}
//----------------------------------------------------------------------------------//
//-------------------------Listando dados do usuario-------------------------------//
//-------------------------para a função de vizualizar----------------------------//
//------------------------com as inputs todas desabilitada-----------------------//
//------------------------------------------------------------------------------//
function visualizarDados(id) {
    save_method = 'listar';
    $('input[name=_method]').val('PATCH');
    $('#meuModalView form')[0].reset();
    $.ajax({
        url: "/bancodedados" + '/' + id + "/listar",
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            console.log(data);
            $('#meuModalView').modal('show');
            $('.card-header').text('Visualizar dados do usuário');
            $('#nome_banco_view').val(data.nome);
            $('#sobrenome_banco_view').val(data.sobrenome);
            $('#identificadorView').val(data.identificador);
            $('#permissao_banco_view').val(data.id_permissao_fk).change();
            $('#emailView').val(data.email);
            $('#data_de_criacao_view').val(moment(data.data_de_criacao).format('LL'));
            $('#data_atualizacao_view').val(moment(data.data_atualizacao).format('LL'));
            $("#visualizar_dados  #nome_banco_view, #sobrenome_banco_view, #identificadorView, .permissao_view, #emailView, #data_de_criacao_view, #data_atualizacao_view").each(function () {
                $(this).attr("readonly", true);
                $(this).attr("disabled", true);

            });
        },
        error: function () {
            alert("Nothing Data");
        }
    });
}
//----------------------------------------------------------------------------------//
//-------------------------Listando dados do usuario-------------------------------//
//-------------------antes que a função de atualizar seja usada-------------------//
//-------------------------------------------------------------------------------//
function editarDados(id) {
    save_method = 'editar';
    $('#datas_visualizacao').show();
    $("#senhas").hide();
    $('#idUser').val(id);
    $('input[name=_method]').val('PATCH');
    $('#meuModalEditar form')[0].reset();
    $.ajax({
        url: "/bancodedados" + '/' + id + "/editar",
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('#meuModalEditar').modal('show');
            $('#registrar_editar').text('Editar');
            $('.card-header').text('Alterar dados do usuário');
            $('#nome_editar').val(data.nome);
            $('#sobrenome_editar').val(data.sobrenome);
            $('#identificador_editar').val(data.identificador);
            $('#permissao_editar').val(data.permissao_descricao).change();
            $('#email_editar').val(data.email);
            $('#data_de_criacao').val(moment(data.data_de_criacao).format('LL'));
            $('#data_atualizacao').val(moment(data.data_atualizacao).format('LL'));
            $("#form_registro_banco  #data_de_criacao, #data_atualizacao").each(function () {
                $(this).attr("readonly", true);
                $(this).attr("disabled", true);

            });
        },
        error: function () {
            swal({
                title: 'Oops...',
                text: data.message,
                type: 'error',
                timer: '1500'
            })
        }
    });

}
//----------------------------------------------------------------------------------//
//-------------------------Deletando o dado referente ao ID------------------------//
//--------------------------------------------------------------------------------//
function deletaDados(id) {
    $('#idUserDelete').val(id);
    var csrf_token = $('meta[name="_token"]').attr('content');
    swal({
        title: 'Você tem certeza?',
        text: "Você não poderá reverter isso!",
        type: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Sim, exclua!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "/bancodedados/apagar",
                type: "POST",
                data: {
                    id:id
                 },
                success: function (data) {
                    $('#tableBD').DataTable().ajax.reload();
                    swal({
                        title: 'Success!',
                        type: 'success',
                        timer: '1500'
                    })
                },
                error: function (data) {
                    swal({
                        title: 'Oops...',
                        type: 'error',
                        timer: '1500'
                    })
                }
            });
        }
    });
}
//----------------------------------------------------------------------------------//
// Função que vai veriricar qual função estou usando(Registrar ou Editar) antes de //
//------------------fazer a inserção de dados no banco----------------------------//
//-------------------------------------------------------------------------------//
$(function () {
    $('#meuModalEditar form').on('submit', function (e) {
        e.preventDefault();
        var id = $('#idUser').val();
        var url = '';
        if (save_method == 'adicionar') {
            url = "/bancodedados/novo";
        }
        else {
            url = "/bancodedados/atualizar";
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: url,
            type: "POST",
            data: new FormData($("#meuModalEditar form")[0]),
            contentType: false,
            processData: false,
            success: function (data) {
                $('#meuModalEditar').modal('hide');
                $('#tableBD').DataTable().ajax.reload();
                swal({
                    title: 'Sucesso!',
                    text: data.message,
                    type: 'success',
                    timer: '1500'
                })
            },
            error: function (data) {
                swal({
                    title: 'Oops...',
                    text: data.message,
                    type: 'error',
                    // timer: '1500'
                })
            }
        });

    });
});



