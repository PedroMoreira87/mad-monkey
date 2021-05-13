$(document).ready(function(){

    fLocalEventosClick();

    var carrossel
    var slider = $(".slider")

    //Title information
    $(".titulo-carousel").click(function(){

        $(".title-visualization").css("display", "flex");
        $(".title-visualization--centralizer").css("animation", "title-visualization-increase .7s");
        var titleID = $(this).attr("titleId");
        var titleType = $(this).attr("titleType");
        showTitleInformation(titleID, titleType);
    })

    $(".title-visualization").click(function(){

        var video = $(".title-prev-video").get(0);
        
        $(".title-visualization--centralizer").css("animation", "title-visualization-decrease .2s");
        setTimeout(function(){
            $(".title-visualization").css("display", "none");
            fade()
        }, 200)

        function fade(){
            if(video.volume > 0){
                video.volume -= 0.1;
                setTimeout(fade, 10);
            }else{
                video.pause();
            }
        }
        
    })

    $(".title-visualization--centralizer").click(function(){
 
        return false;
    
    })

    //Carousel

    $(".arrow").click(function(){
        carrossel = $(this).parents(".container-carousel").children(".carousel")
        slider = $(carrossel).children(".slider")

        if($(this).hasClass("prev")){
            if($(carrossel).css("justify-content") == "flex-start"){

                var primeiro = $(slider).children("section:first-child")
                var ultimo = $(slider).children("section:last-child")
                $(primeiro).insertAfter(ultimo)
            }
            $(carrossel).css("justify-content", "flex-end")
            $(slider).css("transform", "translateX(calc(100%/7))")

        }

        if($(this).hasClass("next")){

            if($(carrossel).css("justify-content") == "flex-end"){

                var primeiro = $(slider).children("section:first-child")
                var ultimo = $(slider).children("section:last-child")
                $(ultimo).insertBefore(primeiro)
    
            }
            
            $(carrossel).css("justify-content", "flex-start")
            $(slider).css("transform", "translateX(calc(-1*(100%/7)))")
        

        }
    })

    $(slider).on('transitionend', function(){

        var primeiro = $(slider).children("section:first-child")
        var ultimo = $(slider).children("section:last-child")

        if($(carrossel).css("justify-content") == "flex-end"){
            $(ultimo).insertBefore(primeiro)
        }
        if($(carrossel).css("justify-content") == "flex-start"){
            $(primeiro).insertAfter(ultimo)
        }

        $(slider).css("transition", "none")
        $(slider).css("transform", "translateX(0)")
        setTimeout(function(){
            $(slider).css("transition", "all .1s")
            
        })
        
    })


})

function showTitleInformation(titleID, titleType){

    var video = $(".title-prev-video").get(0);
    video.volume = 1.0

    $request = $.ajax({
        type:"POST",
        dataType: "json",
        url: "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/load_title_information.php",
        data: {
            "titleID": titleID,
            "titleType": titleType
        }
    });

    $.when($request).then(
        function(titles){

            $(".title-name").attr("src", "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/names/" + titles["name"] + ".png")
            $("#title-relevance").text(titles["relevance"] + "% Relevante")
            $("#title-year").text(titles["year"])
            $(".title-parental").attr("src", "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/parental_icons/" + titles["parental_rating"] + ".png")
            $("#title-length").text(titles["length"])
            $("#title-description").text(titles["description"])
            $(".title-prev-video").attr("src", "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/videos/" + titles["name"] + ".mp4")
            $(".title-about--header").text("Sobre: " + titles["name"])
            $("#title-direction").text(titles["director"])
        }
    );

    $(".title-prev-video").get(0).currentTime = 0;

}

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
    $("#childish").click(function () {
        pagina("childish");
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
    else if (pg === "childish") {
        window.location.href = "../../pages/childish/";
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
