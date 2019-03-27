$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    // read url main image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                console.log(e.target.result);
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
        $('#img-upload').attr('style', 'width:100%;height:300px');
        $('.mainFileContainer').attr('style', 'border:1px solid #ccc');
        $('.mainFileContainer i,span').attr('style', 'font-size:16px;');
    }); 	
    // end main image

    $(".how-to-fill").click(function (){
        $(".understood").addClass("active");
        $(this).removeClass("active");
        $(".filling-instruction").show();
    });

    $(".understood").click(function (){
        $(".how-to-fill").addClass("active");
        $(this).removeClass("active");
        $(".filling-instruction").hide();
    });

    function checkInputIngreError(parentClass,message)
    {
        $(parentClass + " .filling-error").html("");
        $(parentClass + " .filling-error").addClass("active");
        message.forEach(function(item) {
            $(parentClass + " .filling-error").append("<span>"+item+"</span><br>");
        });
    }

    function checkInputError(parentClass,message)
    {
        $("." + parentClass + " .filling-error").html("");
        $("." + parentClass + " .filling-error").addClass("active");
        $("." + parentClass + " .filling-error").append("<span>"+message+"</span><br>");
    }

    $(".wrap-create-form").submit(function(e){
        if(allIngredients.length == 0)
        {
            e.preventDefault();
            $(".ingredient-input .filling-error").append("<span>Please fill at least one ingredient</span><br>");
            $(".ingredient-input .filling-error").addClass("active");
        }
        else
        {
            $(".ingredient-input .filling-error").html("");
        }
        inputValidation(e);
    });
    function inputValidation(e)
    {

        var message = [];
        var listOfParentClass = [
            "recipe-name",
            "recipe-description",
        ];
        var listOfErrorsMessage = [
            "Please fill the recipe's name",
            "Please fill the recipe's description",
        ];
        for(var i = 0; i <listOfParentClass.length; i++)
        {
            if($("." + listOfParentClass[i] + " .input-error").val().trim() == "")
            {
                e.preventDefault();
                checkInputError(listOfParentClass[i],listOfErrorsMessage[i]);
            }
            else
            {
                $("." + listOfParentClass[i] + " .filling-error").removeClass("active");
            }
            
        }
    }

    var allIngredients = [];
    
    function inputModifying (e)
    {
        var message = [];
        var inputString = $(".ingredient-input input.ingredient-field").val();
        var ingredient = inputString.split(" ");
        if(isNaN(ingredient[0]))
        {
            message.push("Please fill the quantity");
        }
        if(ingredient.length <= 2)
        {
            message.push("Please fill the ingredient's name");
        }
        if(message.length === 0)
        {
            $(".ingredient-input .filling-error").removeClass("active");
            var indexOfSecondSpace = inputString.indexOf( ' ', inputString.indexOf( ' ' ) + 1 );
            var ingredientName = inputString.substring(indexOfSecondSpace);
    
            var appendValue = "<div class='ingredient-item'><i class='fa fa-check-circle'></i><b>"+ingredient[0]+" </b><b>"+ ingredient[1] + " </b><span>"+ingredientName+" </span><i class='fa fa-times-circle close-ingredient' onclick='removeIngredientDiv(this)'></i></div>";
            $(".all-ingredient").append(appendValue);
            allIngredients.push(inputString);
        }
        else
        {
            checkInputIngreError(".ingredient-input",message);
        }

        $(".all-ingredients").val(allIngredients);
    }

    

    $('.ingredient-field').on('keypress', function (e) {
        
        if(e.which === 13){
            e.preventDefault(e);
           //Disable textbox to prevent multiple submit
           $(this).attr("disabled", "disabled");
           inputModifying();
           $(".ingredient-input input.ingredient-field").val('');

           //Enable the textbox again if needed.
           $(this).removeAttr("disabled");
        }
    });

    var step_num = 0;
    var step_div = $('.wrap-step-box').html(); // get div step as a string to append

    $('.add-more-btn').click(function (){
        step_num++;

        var mapObj = {
            stepCount : step_num,
            stepContent : "step"+ step_num +"[content]",
            stepName : "step"+ step_num +"[name]",
            stepTime : "step"+ step_num +"[time]",
            stepNote : "step"+ step_num +"[note]",
            stepFile : "step_files"+ step_num +"[]"
        };

        
        step_div_replaced = step_div.replace(/stepCount|stepContent|stepName|stepTime|stepNote|stepFile/gi, function(x){
            return mapObj[x];
        });

        $('.wrap-step-box').append(step_div_replaced);
        $('.step-num').val(step_num);
    });


    // $('.pro-image').change(readImage);
    
    // $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });

});
// Image js
var num = 1;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(event.target).closest(".wrap-upload-image").find(".preview-images-zone");
        for (let i = 0; i < files.length; i++) {

            var file = files[i];

            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;

                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '</div>';
                output.append(html);
                num = num + 1;
            });
            // num = num + 1;
            picReader.readAsDataURL(file);
            $('.preview-images-zone').attr('style', 'display:block;');
        }

        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}
// End image js

// Self custom js
function removeIngredientDiv (e1)
{
    $(e1).closest('.ingredient-item').remove(); 
}
// End self custom js
