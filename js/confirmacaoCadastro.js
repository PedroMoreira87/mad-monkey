$(document).ready(function(){

    var plano = 3;

    $(".plano:nth-child(4) .plano-quadro").css('background-color', "green")
    $(".plano-quadro").click(function(){

        $(".plano-quadro").css('background-color', "red")
        $(this).css('background-color', "green")
        plano = $(".plano-quadro").index(this) + 1

    })

    $("#botao-continuar-plano").click(function(){

        sessionStorage.setItem('plano', plano)
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


    $("#botao-assinatura").click(function(){

       $.ajax({
           type: 'POST',
           dataType: 'json',
           url: '../php/finalizarCadastro.php',
           data: {
               plano: plano,
               cpf: $("#cpf").val(),
               cnpj: $("#cnpj").val(),
               nome: $("#nome").val(),
               datanascimento: $("#datanascimento").val(),
               numerocartao: $("#numerocartao").val(),
               datacartao: $("#datacartao").val(),
               codigocartao: $("#codigocartao").val(),
               tipocartao: $("input[name=tipo-cartao]:checked").val()
           }

       })

    })

})