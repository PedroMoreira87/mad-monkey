$(document).ready(function(){
    add_favorites();
});

function add_favorites() {

    $("#add-favorites").click(function(){

        $request = $.ajax({
            type:"POST",
            dataType: "json",
            url: "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/add_favorites.php",
            data: {
                titleID: $("#add-favorites").attr("titleID"),
                titleType: $("#add-favorites").attr("titleType")
            }
        });

        if($("#add-favorites i").hasClass("fa-check")){
            $("#add-favorites i").removeClass("fa-check").addClass("fa-plus")
        }
        else{
            $("#add-favorites i").removeClass("fa-plus").addClass("fa-check")
        }
        
    });
}