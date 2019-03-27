$(document).ready( function() {

    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Do you want to delete this user?')) {
            // Post the form
            $(e.target).next('form').submit() // Post the surrounding form
        }
    });

    if( $("#createUser").find('.error-exist').length > 0 )
    {
        $( ".btn-insert" ).trigger( "click" );
    } 

});
