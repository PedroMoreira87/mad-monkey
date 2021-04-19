$(document).ready(function(){

    $("#bCadastrar").click(function(){

        var sha256 = sjcl.hash.sha256.hash($('#senha').val());
        var sha256_hexa = sjcl.codec.hex.fromBits(sha256);

        $("#senha_hash").val(sha256_hexa);

        fLocalComunicaServidor('form-cadastro', 'requisicaoCadastro')

        return false;
    });

});

// $(document).ready(function(){
//
//     $.ajax({
//         type: "POST",
//         dataType: "json",
//         url: "../php/requisicaoCadastro.php",
//         data: {
//             name: $("#name-cadastro").val(),
//             email: $("#email-cadastro").val(),
//             password: $("#password-cadastro").val()
//         }
//     })
//
// })

function fLocalComunicaServidor(formulario, arquivo){

    var dados = $("#"+formulario).serialize();

    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../php/"+arquivo+".php",
        data: dados
    });

}
