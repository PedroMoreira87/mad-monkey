$(document).ready(function(){
    
    var carrossel
    var slider = $(".slider")

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
