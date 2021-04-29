$(document).ready(function(){

    $("#password-recovery-button").click(function(){

        ajaxRequest("password-recovery-form", "password_recovery");

        return false;

    })

    fLocalEventosClick();

})

function fLocalEventosClick() {
    $("#back-user-config").click(function () {
        pagina("back-user-config");
        return false;
    });
}

function pagina(pg) {
    if (pg === "back-user-config") {
        window.location.href = "../../pages/signin_signup/";
    }
}
