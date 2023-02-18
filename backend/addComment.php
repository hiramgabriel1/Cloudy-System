<?php
    include("./bd.php");

    if(isset($_POST['submit'])){
        $comment = $_POST['comentario'];
        $query_comment = "INSERT INTO comments (comment) VALUES ('$comment')";
        $result_comment = mysqli_query($conex,$query_comment);
        if($result_comment){
            header("../views/index.php");
        }
    }
?>