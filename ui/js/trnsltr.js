$(document).ready(function() { 
    $('td.transRowOriginal').each(function() {
        $(this).find('textarea').height($(this).find('textarea')[0].scrollHeight);
    });
    
    $('td.transRowTranslation').each(function() {
        $(this).find('textarea').height($(this).siblings().find('textarea').height());
    });
    
    $('td.transRowTranslation textarea').blur(function() {
        text = $.trim($(this).val());
        elem = $(this);
        
        if(text != '') {
            $(this).parents('.transRow').addClass('green');
            $(this).parents('.transRow').removeClass('red');
            $.ajax({  
                type: "POST",  
                url: $(this).parents('form').attr('action'),  
                data: "translation=" + encodeURI(text),  
                success: function() {  
                    // TODO: make this nicer!
                    $(elem).parents('.transRowTranslation').children('.success').fadeIn(function() {
                         $(elem).parents('.transRowTranslation').children('.success').fadeOut();
                    });
                }  
            });  
        } else {
            $(this).parents('.transRow').addClass('red');
        }
    });
});