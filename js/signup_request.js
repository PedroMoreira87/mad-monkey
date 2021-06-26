$(document).ready(function(){

    $("#signup-button").click(function(){

        hashPasswordSignup();

        // ajaxRequest(form to be serialized, name of your php file)
        ajaxRequest("signup-form", "signup_request");

        return false;
    });


});

function hashPasswordSignup(){

    var sha256 = sjcl.hash.sha256.hash($("#signup-password").val());
    var sha256_hexa = sjcl.codec.hex.fromBits(sha256);
    $("#signup-hashed-password").val(sha256_hexa);

}



