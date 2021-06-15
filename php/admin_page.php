<?php
    include("mysql_connection.php");

    $titleType = $_POST["title-type"];
    $name = $_POST["name"];
    $year = $_POST["year"];
    $parental = $_POST["parental"];
    $length = $_POST["length"];
    $season = $_POST["season"];
    $director = $_POST["director"];
    $description = $_POST["description"];
    $trailer = $_POST["trailer"];
    $cast = $_POST["cast"];
    $genre = $_POST["genre"];
    $thumbnail = $_FILES["thumbnail"]["name"];
    $title = $_FILES["title"]["name"];
  
    $relevance = rand(50, 100);
    
    if ($titleType == "movies"){
        $query = "INSERT INTO movies VALUES (NULL, '$name', '$relevance', '$year', '$parental','$length', '$description', '$director', '$genre', '$trailer')";
    }else if ($titleType == "series") {
        $query = "INSERT INTO series VALUES (NULL, '$name', '$relevance', '$year', '$parental', '$description','$director', '$season', '$genre', '$trailer')";
    }else {
        exit;
    }

    mysqli_query($connection, $query);

    $id = mysqli_insert_id($connection);
    mkdir("../titles_src/$titleType/$id");

    $image = imagecreatefrompng($_FILES["thumbnail"]["tmp_name"]);
    imagepng($image, "../titles_src/$titleType/$id/thumbnail.png");
    
    $image = imagecreatefrompng($_FILES["title"]["tmp_name"]);
    $black = imagecolorallocate($image, 0, 0, 0);
    imagecolortransparent($image, $black);
    imagepng($image, "../titles_src/$titleType/$id/title.png");
    