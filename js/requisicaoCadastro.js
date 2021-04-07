
$(document).ready(function(){

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../php/requisicaoCadastro.php",
        data: {
            name: $("#name-cadastro").val(),
            email: $("#email-cadastro").val(),
            password: $("#password-cadastro").val()
        }
    })

})


