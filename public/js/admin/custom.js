$(document).ready( function() {

    $('.delete').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        var message = $(this).data('text');
        if (confirm(message)) {
            // Post the form
            $(e.target).parent().next('form').submit() // Post the surrounding form
        }
    });

});
