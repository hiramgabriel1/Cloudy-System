<?php
    include("./bd.php");
    if(isset($_POST["submit"])){
        // only text simple
        $data_post_text_simple = $_POST['data-post-text'];
        // title post
        $title_post = $_POST['title-post'];

        $nameImage = $_FILES["imagen"]["name"];
        $archivo = $_FILES["imagen"]["tmp_name"];
        $ruta="../images";

        $ruta=$ruta."/".$nameImage;
        move_uploaded_file($archivo, $ruta);

        $QUERY = "INSERT INTO posts (title_post, description_post, ruta_file) VALUES ('$title_post','$data_post_text_simple', '$ruta')";
        $result_query = mysqli_query($conex, $QUERY);
        if($result_query){
            header("Location: ../views/index.php");
        }

        // error_reporting(E_ALL);
        // ini_set("display_errors", "1");
        ini_set('error_reporting', E_ERROR | E_PARSE);
    }
?>