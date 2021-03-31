$(document).ready(function(){

    var plano;

    $(".plano-quadro").click(function(){

        $(".plano-quadro").css('background-color', "red")
        $(this).css('background-color', "green")
        plano = $(".plano-quadro").index(this)

    })

    $("#botao-continuar-plano").click(function(){

        sessionStorage.setItem('plano', plano)

    })

    $("#botao-assinatura").click(function(){

       $.ajax({
           type: 'POST',
           dataType: 'json',
           url: '../php/finalizarCadastro.php',
           data: {
               plano: plano,
               nome: $("#nome").val(),
               numerocartao: $("#numerocartao").val(),
               datacartao: $("#datacartao").val(),
               codigocartao: $("#codigocartao").val(),
               tipocartao: $("input[name=tipo-cartao]:checked").val()
           }

       })

    })

})