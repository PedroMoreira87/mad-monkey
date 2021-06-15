$(document).ready(function(){

    $(".search-input").keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            sendSearchInput($(".search-input").val());
        }
    });

    function sendSearchInput(search){

        $request = $.ajax({
            type:"POST",
            dataType: "json",
            url: "/mad-monkey/php/search.php",
            data: {
                search: search
            }
        });

        $.when($request).done(function(evt){

            sessionStorage.setItem("search", JSON.stringify(evt));
            window.location.href = "../filter/";

        })

    }

})