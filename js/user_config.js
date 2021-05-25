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
    $("#series").click(function () {
        pagina("series");
        return false;
    });
    $("#movies").click(function () {
        pagina("movies");
        return false;
    });
    $("#kids").click(function () {
        pagina("kids");
        return false;
    });
    $("#favorites").click(function () {
        pagina("favorites");
        return false;
    });
    $("#filter").click(function () {
        pagina("filter");
        return false;
    });
    $("#user-config").click(function () {
        pagina("user-config");
        return false;
    });
    $("#signin-signup").click(function () {
        pagina("signin-signup");
        return false;
    });
}

function pagina(pg) {
    if (pg === "password-change") {
        window.location.href = "../../pages/password_change_menu/";
    }else if (pg === "card-change") {
        window.location.href = "../../pages/card_change/";
    }else if (pg === "menu") {
        window.location.href = "../../pages/menu/";
    }else if (pg === "series") {
        window.location.href = "../../pages/series/";
    }
    else if (pg === "movies") {
        window.location.href = "../../pages/movies/";
    }
    else if (pg === "kids") {
        window.location.href = "../../pages/kids/";
    }
    else if (pg === "favorites") {
        window.location.href = "../../pages/favorites/";
    }
    else if (pg === "filter") {
        window.location.href = "../../pages/filter/";
    }
    else if (pg === "user-config") {
        window.location.href = "../../pages/user_config/";
    }
    else if (pg === "signin-signup") {
        window.location.href = "../../pages/signin_signup/";
    }
}