<?php
    include("./bd.php");
    if(isset($_GET["data-post-text"])){
        // only text simple
        $data_post_text_simple = $_GET['data-post-text'];
        // only files
        $data_post_files = $_GET['data-post-files'];
        // title post
        $title_post = $_GET['title-post'];

        $QUERY = "INSERT INTO posts (title_post, description_post) VALUES ('$title_post','$data_post_text_simple')";
        $result_query = mysqli_query($conex, $QUERY);
        if($result_query){
            echo "funciona";
        }
    }
?>