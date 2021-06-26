function ajaxRequest(form, file){

    var data;
    if(form != null){
        data = $("#" + form).serialize();
    }

    $request = $.ajax({
        type:"POST",
        dataType: "json",
        url: "/mad-monkey/php/"+ file +".php",
        data: data
    });

    return $request;
}
