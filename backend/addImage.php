<?php
    include("./bd.php");

    if(isset($_POST['btn-submit'])){
        $nameImage = $_FILES['imagen']['name'];
        $tmp = $_FILES['imagen']['tmp_name'];

        $file = "../public/images";
        // $fileName = $_POST['name-image'];
        $ruta = $file . '/' . $nameImage;

        move_uploaded_file($tmp, $ruta);

        $query = "INSERT INTO assets(ruta) VALUES ('$ruta')";
        $result = mysqli_query($conex, $query);
        
        if($result){
            // echo "funciona";
            header("Location: ../views/index.php");
        }else{
            echo "error"; 
        }
    }
?>