$("#caixa").on('submit',(function(e) {
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
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend : function()
        {
            //$("#preview").fadeOut();
            
        },
        success: function(data)
        {
            $("#myModalSucess").modal("show");
            $(':input','#caixa')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');
        },
        error: function(e) 
        {
            $("#myModalError").modal("show");
        }          
    });
}));