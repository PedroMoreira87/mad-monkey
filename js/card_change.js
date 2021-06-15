$(document).ready(function(){

    card_change();
    fLocalEventosClick();

});

function card_change(){
    $("#card-change").click(function () {
        ajaxRequest("card-change-form", "card_change")
        return false;
    });
}



function fLocalEventosClick() {
    $("#back-user-config").click(function () {
        pagina("back-user-config");
        return false;
    });
}

function pagina(pg) {
    if (pg === "back-user-config") {
        window.location.href = "../../pages/user_config/";
    }
}