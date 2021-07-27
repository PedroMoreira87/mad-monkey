$(document).ready(function(){

    user_question();

});

function user_question(){
    $("#confirma").click(function () {
        ajaxRequest("user-question", "user_question")
        return false;
    });
};