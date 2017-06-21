$("#checkMail:checkbox").change(function () {
    var state = $(this).is(':checked');
    var button = $("#submit");
    if(state) {
        button.attr('disabled', false);
    }
    else
    {
        button.attr('disabled', true);
    }
});