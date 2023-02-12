<?php
    // bd
    include("./bd.php");

    if(isset($_POST['submit'])){
        // validar
        $user = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // sesion
        session_start();
        $_SESSION['user'] = $user;

        $query = "SELECT * FROM users WHERE name_user= '$user' and password_user='$password'";
        $result = mysqli_query($conex,$query);

        // si los datos ingesados son iguales a los de la bd
        $filas = mysqli_num_rows($result);
        if($filas){
            header("Location: ../views/index.php");
        }else{
            header("Location: ../error/not_session.html");
        }

        mysqli_free_result($result);
        mysqli_close($bd);
    }
?>