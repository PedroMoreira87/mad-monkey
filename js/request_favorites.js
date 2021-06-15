$(document).ready(function(){

    request_favorites();

});

function request_favorites(){

    $.when(ajaxRequest(null, "request_favorites")).then(
        function(titles){
            for(var i = 0; i < titles[0].length; i++){
                $(".movies .titulo-carousel").eq(i).attr("titleType", titles[0][i][0])
                $(".movies .titulo-carousel").eq(i).attr("titleId", titles[0][i][1])
                $(".movies .titulo-carousel").eq(i).css("background-image", 
                "url(../../titles_src/" + titles[0][i][0] + "/" + titles[0][i][1] +"/thumbnail.png)"); 
            }

            for(var i = 0; i < titles[1].length; i++){
                $(".series .titulo-carousel").eq(i).attr("titleType", titles[1][i][0])
                $(".series .titulo-carousel").eq(i).attr("titleId", titles[1][i][1])
                $(".series .titulo-carousel").eq(i).css("background-image", 
                "url(../../titles_src/" + titles[1][i][0] + "/" + titles[1][i][1] +"/thumbnail.png)"); 
            }
        }
    );
}
