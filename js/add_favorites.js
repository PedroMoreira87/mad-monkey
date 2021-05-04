$(document).ready(function(){
    add_favorites();
});

function add_favorites() {
    $("#add-favorites").click(function(){
        $request = $.ajax({
            type:"POST",
            dataType: "json",
            url: "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/add_favorites.php",
            data: {movieId:1}
        });
    });
}