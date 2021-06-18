$(document).ready(function(){
    add_favorites();
});

function add_favorites() {

    $("#add-favorites").click(function(){

        var request = $.ajax({
            type:"POST",
            dataType: "json",
            url: "/mad-monkey/php/add_favorites.php",
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
        
        $.when(request).fail(function(){
            if(window.location.href == "http://localhost/mad-monkey/pages/favorites/"){
                window.location.reload();
            }
        })

    });


}