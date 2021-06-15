$(document).ready(function(){

    var carrossel
    var slider = $(".slider")
    var asideCompact = false;

    //Menu compact 

    window.addEventListener("resize", function(){

        if( $(window).width() > 700){
            asideCompact = true;
            responsiveAside();
        }
        
    })

   
    $(".aside-compact-icon").click(function(){
        responsiveAside();
    })

    function responsiveAside(){
        if(asideCompact == false){
            $("aside").addClass("aside-div-compact");
            $("main").css("overflow-y", "hidden");
            asideCompact = true;
        }
        else{
            $("aside").removeClass("aside-div-compact");
            $("main").css("overflow-y", "visible");
            asideCompact = false;
        }
    }

    $("body").on('click', '.titulo-carousel',function(){

        $(".title-visualization").css("display", "flex");
        $(".title-visualization--centralizer").css("animation", "title-visualization-increase .7s");
        var titleID = $(this).attr("titleID"); 
        var titleType = $(this).attr("titleType"); 
        showTitleInformation(titleID, titleType);
    })

    $(".title-visualization").click(function(){

        $(".title-visualization--centralizer").css("animation", "title-visualization-decrease .2s");
        setTimeout(function(){
            $(".title-visualization").css("display", "none");
        }, 200);
        
        $(".title-prev-video").attr("src", "");

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

    function showTitleInformation(titleID, titleType){

        $request = $.ajax({
            type:"POST",
            dataType: "json",
            url: "/mad-monkey/php/load_title_information.php",
            data: {
                "titleID": titleID,
                "titleType": titleType
            }
        });
        
        $.when($request).then(
            function(titles){
    
                if(titles[2] == "favored"){
                    $("#add-favorites i").removeClass("fa-plus").addClass("fa-check")
                }
    
                $(".title-prev-video").attr("src", "https://www.youtube.com/embed/" + titles[0]["trailer"] + "?autoplay=1&controls=0")
                $(".title-name").attr("src", "/mad-monkey/titles_src/" + titleType + "/" + titleID + "/title.png")
                $("#title-relevance").text(titles[0]["relevance"] + "% Relevante")
                $("#title-year").text(titles[0]["year"])
                $(".title-parental").attr("src", "/mad-monkey/titles_src/parental_icons/" + titles[0]["parental_rating"] + ".png")
                
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
                $(".title-genre").text(titles[0]["genre"])
            }
        );
    }

})
