$(document).ready(function(){

    $(".plano:nth-child(4) .plano-quadro").css('background-color', "green")
    $(".plano-quadro").click(function(){

        $(".plano-quadro").css('background-color', "red")
        $(this).css('background-color', "green")

    })

    $("#botao-continuar-plano").click(function(){
        
        $(".content-principal1").css('display', 'none')
        $(".content-principal2").css('display', 'block')

    })

    $("input[name=opcao]").change(function (){

        if($(this).val() == 'opcao-cpf'){
            $("#cnpj").css('display', 'none')
            $("#cpf").css('display', 'block')
        }
        else{
            $("#cpf").css('display', 'none')
            $("#cnpj").css('display', 'block')
        }
  

    })


})