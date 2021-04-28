$(document).ready(function(){

    $("#start-signature").click(function(){

        // ajaxRequest(form to be serialized, name of your php file)
        
        $.when(ajaxRequest('signature-form', 'signup_conclusion_request')).then(

            function(status){
                if(status){
                    window.location.href = "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/menu/";
                }else{
                    window.location.href = "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/signup_conclusion/";
                }
                
            }
            
        );

        return false;
    });

})

