$(document).ready(function() {

    fLocalEventosClick();


})


function fLocalEventosClick() {
    $("#password-change").click(function () {
        pagina("password-change");
    });
    $("#card-change").click(function () {
        pagina("card-change");
    });
}

function pagina(pg) {
    if (pg === "password-change") {
        window.location.href = "../../pages/password_change/";
    }else if(pg === "card-change") {
        window.location.href = "../../pages/card_change/";

    }
}
