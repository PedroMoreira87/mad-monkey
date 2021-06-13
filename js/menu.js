$(document).ready(function(){

    $.when(ajaxRequest(null, "load_titles")).then(
        function(titles){

            for(var i = 0; i < titles.length; i++){
                $(".titulo-carousel").eq(i).attr("titleType", titles[i][0])
                $(".titulo-carousel").eq(i).attr("titleId", titles[i][1])
                $(".titulo-carousel").eq(i).css("background-image", 
                "url(../../titles_src/" + titles[i][0] + "/" + titles[i][1] +"/thumbnail.png)"); 
            }
        }
    );

})
