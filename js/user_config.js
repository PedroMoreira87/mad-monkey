$(document).ready(function(){

    $("#leave-account").click(function(){

        request = $.ajax({
            type:"POST",
            url: "/mad-monkey/php/user_desconect.php"
        });

        $.when(request).done(function(){
            window.location.href="../../index.html"
        })
        return false;
    });
});
