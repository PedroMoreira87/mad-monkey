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
   
        }, 200)

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

			$(".title-prev-video").attr("src", "https://www.youtube.com/embed/" + titles[0]["trailer"] + "?autoplay=1&controls=0")
            $(".title-name").attr("src", "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/names/" + titles[0]["name"] + ".png")
            $("#title-relevance").text(titles[0]["relevance"] + "% Relevante")
            $("#title-year").text(titles[0]["year"])
            $(".title-parental").attr("src", "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/parental_icons/" + titles[0]["parental_rating"] + ".png")
            
            if(titleType == "movies"){
                $("#title-length").text(titles[0]["length"])
            }
            if(titleType == "series"){
                $("#title-length").text(titles[0]["season"] + " Temporadas")
            }
            
            $("#title-description").text(titles[0]["description"])
            $(".title-about--header").text("Sobre: " + titles[0]["name"])
            $("#title-direction").text(titles[0]["director"])
            $("#add-favorites").attr("titleID", titleID)
            $("#add-favorites").attr("titleType", titleType)

            var cast = ""
            for(var i = 0; i < titles[1].length; i++){

                cast = cast + titles[1][i];

                if(i != titles[1].length - 1){
                    cast += ", ";
                }
            }
            $(".title-cast").text(cast)
        }
    );


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
