$.when(request).done(function(titles){


    var currentGenre = titles[0][2];
    var j = -1;

    for(var i = 0; i < titles.length; i++){

        if(titles[i][2] != currentGenre){
            j = 0;
        }
        else{
            j++
        }
        
        $("." + titles[i][2]).find(".titulo-carousel").eq(j).attr("titleType", titles[i][0])
        $("." + titles[i][2]).find(".titulo-carousel").eq(j).attr("titleId", titles[i][1])
        $("." + titles[i][2]).find(".titulo-carousel").eq(j).css("background-image", 
        "url(../../titles_src/" + titles[i][0] + "/" + titles[i][1] +"/thumbnail.png)"); 

        currentGenre = titles[i][2];
        
    }

})