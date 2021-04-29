$(document).ready(function() {

    fLocalEventosClick();


})

function fLocalEventosClick() {
    $("#password-change").click(function () {
        pagina("password-change");
        return false;
    });
    $("#card-change").click(function () {
        pagina("card-change");
        return false;
    });
    $("#menu").click(function () {
        pagina("menu");
        return false;
    });
}

function pagina(pg) {
    if (pg === "password-change") {
        window.location.href = "../../pages/password_change_menu/";
    }else if(pg === "card-change") {
        window.location.href = "../../pages/card_change/";
    }else if(pg === "menu") {
        window.location.href = "../../pages/menu/";
    }
}
