$("#form_administrador").on('submit', (function (e) {
    e.preventDefault();
    var url_atual = window.location.href;

    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name=_token]').attr('content')
        }
    });

    $.ajax({
        url: url_atual,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            //$("#preview").fadeOut();

        },
        success: function (data) {
            swal({
                title: 'Sucesso!',
                text: 'Usuário registrado com Sucesso!',
                type: 'success',
                timer: '1500'
            }),
                $(':input', '#form_administrador')
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
                    .removeAttr('checked')
                    .removeAttr('selected');
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
}));