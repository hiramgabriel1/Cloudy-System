<?php
    include("./bd.php");
    if(isset($_POST["submit"])){
        // only text simple
        $data_post_text_simple = $_POST['data-post-text'];
        // title post
        $title_post = $_POST['title-post'];

        // fecha de posteo
        $fecha= date("Y-m-d H:i:s");
        // hora de posteo
        $hora = time();

        $nameImage = $_FILES["imagen"]["name"];
        $archivo = $_FILES["imagen"]["tmp_name"];
        $ruta="../public/images";

        $ruta=$ruta."/".$nameImage;
        move_uploaded_file($archivo, $ruta);

        if(isset($data_post_text_simple) && isset($title_post)){
            
        }

        try {
            $QUERY = "INSERT INTO posts (title_post, fecha, description_post, ruta_file) VALUES ('$title_post','$fecha','$data_post_text_simple', '$ruta')";
            $result_query = mysqli_query($conex, $QUERY);
            if($result_query){
                header("Location: ../views/index.php");
            }
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }
      
        // error_reporting(E_ALL);
        // ini_set("display_errors", "1");
        ini_set('error_reporting', E_ERROR | E_PARSE);
    }
?>