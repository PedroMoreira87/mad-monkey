$(document).ready(function (){
    fLocalEventosClick();
});

function fLocalEventosClick() {
    $("#login-cadstro").click(function () {
        pagina("login-cadstro");
    });
}

function pagina(pg) {
    if (pg === "login-cadstro") {
        window.location.href = "login-cadstro.html";
    }
}
