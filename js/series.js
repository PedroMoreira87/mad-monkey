$(document).ready(function(){

    fLocalEventosClick();
});


function fLocalEventosClick() {
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
}

function pagina(pg) {
    if (pg === "menu") {
        window.location.href = "../../pages/menu/";
    }
    else if (pg === "series") {
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
}