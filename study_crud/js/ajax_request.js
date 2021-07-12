function ajaxRequest(form, file) {

    let data;
    if(form != null) {
        data = $("#" + form).serialize();
    }

    $request = $.ajax({
        type:"POST",
        dataType: "json",
        url: "./php/" + file + ".php",
        data: data
    });

    return $request;
}
