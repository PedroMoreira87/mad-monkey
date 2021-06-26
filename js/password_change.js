$(document).ready(function(){

    $("#password-change-button").click(function(){
        hashPassword();

        ajaxRequest("password-change-form", "password_change");
        
        window.location.href = "../../pages/menu/";
        return false;
    });

    
});


function hashPassword(){

    var sha256 = sjcl.hash.sha256.hash($("#password").val());
    var sha256_hexa = sjcl.codec.hex.fromBits(sha256);
    $("#hashed-password").val(sha256_hexa);

}
