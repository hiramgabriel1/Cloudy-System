<?php
    $conex = mysqli_connect("localhost", "root", "", "cloudysystem");
    if($conex){
        echo "done!";
    }else{
        echo "error";
    }

?>