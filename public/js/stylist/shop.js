
$('.btn-upload').click(function(){
    $("#upload_modal").modal();
    $("#modal-upload-type").attr("value", $(this).attr("data"));
});

$('#btn-access-back').click(function(){
    $('#upload_modal').modal("hide");
});


