$(document).ready(function(){

    var titles = JSON.parse(sessionStorage["search"]);
    for(let i = 0; i < titles.length; i++ ){
        
        var card = '<div class="titulo-carousel card" titleID="' + titles[i][0] + '" titleType="'+ titles[i][1]+ '"></div>';
        $(".filter-content").append(card);
        $(".card").eq(i).css("background-image", "url(../../titles_src/" + titles[i][1] + "/" + titles[i][0] +"/thumbnail.png)");
        
    }

})