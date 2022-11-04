<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/styles/login.css">
    <title>Iniciar sesión</title>
</head>
<body>   
    <div class="container">
        <div class='col-md-9 card mx-auto d-flex flex-row px-0'>
        <div class="img-left d-md-flex d-none"></div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h4 class="title text-center mt-4 pb-3">Unirse a Cloudy</h4>
            
            <!-- form -->
        <form class='col-sm-10 col-12 mx-auto' action="../backend/login.php">
              <div class='form-group '>
                <input type="email" class="form-control " placeholder='example@gmail.com'>
              </div>
               <div class='form-group py-3 ' >
                <input type="password" class="form-control" placeholder='********'>
              </div>               <div class=''>
                <input type="submit" class="btn  btn-success d-block w-100 registerOpenBtn" value='Registrarse'><br>
                <input type="button" class="btn  btn-primary d-block w-100 loginOpenBtn " value='Iniciar sesión'>
            </div>
       </form>
            </div>
        </div>

        <!-- dont touch -->
        <script>
            const btnOpenWindowRegister = document.querySelector(".loginOpenBtn")
            btnOpenWindowRegister.addEventListener("click", () => {
                location.assign("./login.php")
            })
        </script>
      </div>
</body>
</html>
</body>
</html>