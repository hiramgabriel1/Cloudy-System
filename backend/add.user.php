<?php
    // conex file
    include("./bd.php");

    if(isset($_POST['submit'])){
      
        // data user register
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

         // validar 
         $query = "SELECT * FROM users WHERE email_user= '$email' and password_user='$password'";
         $result_query_validate = mysqli_query($conex,$query);
          // si los datos ingesados son iguales a los de la bd
          $filas = mysqli_num_rows($result_query_validate);
          if($filas){
              header("Location: ../views/register.php");
          }else{        
            $sql = "INSERT INTO users (name_user, email_user, password_user) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($conex, $sql);
            if($result){
                header("Location: ../views/index.php");
            }else{
                echo "ERROR";
            }
          }
  
          mysqli_free_result($result);
          mysqli_close($bd);

    }
?>