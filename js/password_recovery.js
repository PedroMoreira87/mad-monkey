$(document).ready(function(){

    $("#password-recovery-button").click(function(){

        ajaxRequest("password-recovery-form", "password_recovery");

        return false;

    })

})

