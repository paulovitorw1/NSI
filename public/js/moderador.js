//----------------------------------------------------------------------------------//
//-------------Chamando essa função logo que a pagina é carregada------------------//
//--------------------------------------------------------------------------------//
$(document).ready(function () {
    listarDenuncia();
    abrirImg();


});
//----------------------------------------------------------------------------------//
//--------------------------------Chamando TOKEN-----------------------------------//
//--------------------------------------------------------------------------------//
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
//----------------------------------------------------------------------------------//
//------------------Função para abrir o modal de img-------------------------------//
//--------------------------------------------------------------------------------//
function abrirImg() {
    $(".abrirModal").click(function () {
        var url = $(this).find("img").attr("src");
        $("#myModal img").attr("src", url);
        $("#myModal").modal("show");
    });
}
//----------------------------------------------------------------------------------//
//------------------Função para listar dados via DataTables------------------------//
//--------------------------------------------------------------------------------//
function listarDenuncia() {
    moment.locale('pt-br');

    var table = $('#tabela_moderador').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/moderador/ver",
        columns: [
            { data: 'id_denuncia', name: 'id_denuncia' },
            { data: 'identificador', name: 'identificador' },
            {
                'data': 'nome',
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(oData.nome + " " + oData.sobrenome);
                }
            },
            {
                'data': 'data_de_criacao',
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(moment(oData.data_de_criacao).format('LL'));
                }
            },
            {
                'data': 'local_descricao',
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(oData.local_descricao + " - " + oData.ambiente_descricao + ": " + oData.oque + " " + oData.denuncia_descricao);
                }
            },
            { data: 'imagem' },
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
//-------------------------Deletando o dado referente ao ID------------------------//
//--------------------------------------------------------------------------------//
function deletaDados(id) {
    $('#idDenunciaDelete').val(id);
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
                url: "/moderador" + '/' + id + "/apagar",
                type: "POST",
                data: { '_method': 'DELETE', '_token': csrf_token },
                success: function (data) {
                    $('#tabela_moderador').DataTable().ajax.reload();
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