$('#notifyBug').change(function () {
    if($(this).is(':checked')) {
        $('#alert').hide();
    }
    else {
        $('#alert').show();
    }
});

$(function () {
    if($('#notifyBug').is(':checked')){
        $('#alert').hide();
    }
});