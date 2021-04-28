function ajaxRequest(form, file){

    var data;
    if(form != null){
        data = $("#" + form).serialize();
    }

    $request = $.ajax({
        type:"POST",
        dataType: "json",
        url: "/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/"+ file +".php",
        data: data
    });

    return $request;
}
