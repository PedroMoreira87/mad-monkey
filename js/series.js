request = $.ajax({
    type:"POST",
    dataType: "json",
    url: "/mad-monkey/php/load_titles.php",
    data: {
        titleType: "series"
    }
});