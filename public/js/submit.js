$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

$(function(){
    $('html').on('submit', '#contestForm', function(event){
        event.preventDefault();
        
        var datastring = $("#contestForm").serialize();
        var datastringAr = $("#contestForm").serializeArray();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
        type: "POST",
        url: BASE_URL + '/postcontest',
        data: datastring,
        dataType: "json",
        success: function(data) {

        },
        error: function() {
        
            }
        });
    });
});

$(function(){
    $('input[type=radio][name=addin]').change(function() {
        if(this.value == 'yes')
        {
            $('.chem_dropdown').css('display', 'block');   
        }
        else{
            $('.chem_dropdown').css('display', 'none');   
        }
    });
});


