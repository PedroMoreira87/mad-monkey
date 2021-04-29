$(document).ready(function(){

    card_change();

});

function card_change(){
    $("#card-change").click(function () {
        ajaxRequest("card-change-form", "card_change")
    });
}
