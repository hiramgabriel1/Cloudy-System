<?php
    include("./bd.php");

    // validate data parameters
    if(isset($_GET['username']) && isset($_GET['user_email']) && isset($_GET['type']) && isset($_GET['mensaje'])){
        $name = $_GET['username'];
        $email = $_GET['user_email'];
        $type = $_GET['type'];
        $mensaje = $_GET['mensaje'];

        $add_data = "INSERT INTO reports (username, user_email, type, comment) VALUES ('$name', '$email', '$type', '$mensaje')";
        $result = mysqli_query($conex, $add_data);
        if($result){
            echo '<script>
                    alert("gracias por tu opinión!")
                  </script>';
            header("Location: ../views/index.php");
        }else{
            echo "Ha ocurrido un error, por favor intentalo más tarde!";
            echo "<a href='../views/index.php'>Volver</a>";
        }
    }
?>