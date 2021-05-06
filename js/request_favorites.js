$(document).ready(function(){

    request_favorites ();

});

function request_favorites () {
    var request = $.ajax({
        type: "POST",
        dataType: "json",
        url: "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/request_favorites.php"
    });
    $.when(request).then(
        function(titles){
            for(var i = 0; i < titles.length; i++){
                $(".titulo-carousel").eq(i).attr("movieID", titles[i][0])
                $(".titulo-carousel").eq(i).css("background-image", 
                "url('/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/titles_src/thumbnails/" + titles[i][1] + ".jpg')"); 
            }
        }
    );
};
