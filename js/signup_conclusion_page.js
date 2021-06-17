$(document).ready(function(){

    checkUserStatus();

    $(".plano:nth-child(4) .plano-quadro").css('background-color', "green");
    $(".plano-quadro").click(function(){

        $(".plano-quadro").css('background-color', "red");
        $(this).css('background-color', "green");

    })

    $("#botao-continuar-plano").click(function(){
        
        $(".content-principal1").css('display', 'none');
        $(".content-principal2").css('display', 'block');

    })

    $("input[name=opcao]").change(function (){

        if($(this).val() == 'opcao-cpf'){
            $("#cnpj").css('display', 'none');
            $("#cpf").css('display', 'block');
        }
        else{
            $("#cpf").css('display', 'none');
            $("#cnpj").css('display', 'block');
        }
  

    })

})

function checkUserStatus(){

    $.when(ajaxRequest(null, "user_status_checking")).then(
            
        function(status){

            if(status == "active"){

                window.location.href = "/mad-monkey/pages/menu/";
        
            }

        }
      
    );
}