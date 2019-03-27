$(document).ready( function() {
    
    $('.delete-recipe').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Do you want to delete this recipe?')) {
            // Post the form
            $(e.target).next('form').submit() // Post the surrounding form
        }
    });


});