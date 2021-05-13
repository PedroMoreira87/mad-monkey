$(document).ready(function(){

    request_favorites ();

});

function request_favorites(){

    $.when(ajaxRequest(null, "request_favorites")).then(
        function(titles){
            for(var i = 0; i < titles.length; i++){
                $(".titulo-carousel").eq(i).attr("titleType", titles[i][0])
                $(".titulo-carousel").eq(i).attr("titleId", titles[i][1])
                $(".titulo-carousel").eq(i).css("background-image", 
                "url('/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/thumbnails/" + titles[i][2] + ".jpg')"); 
            }
        }
    );
}
