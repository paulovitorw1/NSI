
   $(".abrirModal").click(function() {
         var url = $(this).find("img").attr("src");
         $("#myModal img").attr("src", url);
         $("#myModal").modal("show");
   });

