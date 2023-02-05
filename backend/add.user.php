<?php
    include("./bd.php");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // add to bd 
        $sql = "INSERT INTO users (name_user, email_user, password_user) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conex, $sql);
        if($result){
            header("Location: ../views/login.php");
        }else{
            header("Location: ../views/register.php");
        }
    }else{
        echo "no  process";
    }
?>