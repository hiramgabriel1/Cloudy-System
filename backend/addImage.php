<?php
    include("./bd.php");

    if(isset($_POST['btn-submit'])){
        // function validar(archivo){
        //      var aux = archivo.split(‘.’);  
            
        //      if(aux[aux .length-1] == ‘mp4’)       
        //         echo "video";
        //         header("Location: ../views/login.php");
            
        //         else{       
        //         alert(‘El archivo debe ser .txt’);       
        //         // return false;    
        //     } 
        // }

        // validar($tmp);
        $nameImage = $_FILES['imagen']['name'];
        $tmp = $_FILES['imagen']['tmp_name'];

        $file = "../public/images";
        $fileName = $_POST['name-image'];
        $ruta = $file . '/' . $nameImage;

        move_uploaded_file($tmp, $ruta);

        $query = "INSERT INTO imagenes (ruta, filename) VALUES ('$ruta', '$fileName')";
        $result = mysqli_query($conex, $query);
        
        if($result){
            // echo "funciona";
            header("Location: ../views/index.php");
        }else{
            echo "error"; 
        }
    }
?>