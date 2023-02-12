
<?php
    session_start();
    error_reporting(0);

    $varsession = $_SESSION['user'];
    if($varsession  == null || $varsession= ''){
        // error message
        echo "No tienes permisos para acceder. Inicia sesión o registrate";
        header("Location: ./not_session.html");
        // redireccionar
        echo "<br><br> <a href='./login.php'>Iniciar sesión</a>";
        echo "<br><br> <a href='./register.php'>Registrarse</a>";

        // close sesion
        die();
    }
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- materialize.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <!-- bootstrap icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- css -->
    <link rel="stylesheet" href="../public/styles/index.css" />
    <!-- <link rel="stylesheet" href="../public/styles/sidebar.mobile.css"> -->
    <title>CloudySystem</title>
  </head>
  <body>

    <main>
    <!-- aside bar -->
    <aside
      class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left"
      id="show-side-navigation1"
    >
      <i
        class="uil-bars close-aside d-md-none d-lg-none"
        data-close="show-side-navigation1"
      ></i>
      <div
        class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4"
      >
        <h1>Cloudy</h1>
        <div class="ms-2">
          <h5 class="fs-6 mb-0">
            <a class="text-decoration-none" href="#"></a>
          </h5>
        </div>
      </div>

      <div class="search position-relative text-center px-4 py-3 mt-2">
        <input
          type="text"
          class="form-control w-100 border-0 bg-transparent"
          placeholder="Buscar aqui"
          style="color: #fff"
        />
        <i class="fa fa-search position-absolute d-block fs-6"></i>
      </div>

      <ul class="categories list-unstyled">
        <li class=""><i class="bi bi-house-door"></i><a href="./index.php">Inicio</a></li>
        <li class="">
          <i class="bi bi-camera-video"></i><a href="./posts.php">Publicaciones</a>
        </li>
        <br />
        <li class="">
          <i class="bi bi-chat-square-dots-fill"></i><a href="#">Contacto</a>
        </li><br>  
        <li class="">
          <i title="theme dark" class="bi bi-person-x-fill close-sesion"></i><a href="../backend/closeSesion.php">Salir</a>
      </li><br>
        
        <!-- theme config -->
        <li class="">
          <i title="theme dark" class="theme-dark bi bi-moon-fill"></i>
          <i title="theme white" class="theme-sun bi bi-sun"></i>
        </li>
      </ul>
    </aside>

    <!-- upload files here -->
    <h1 class="title">Upload your images</h1>
    <form action="../backend/addImage.php" method="post" class="form-group form" enctype="multipart/form-data">
      <div class="input-group mb-3">
        <input
          type="file"
          class="form-control"
          id="inputGroupFile02"
          name="imagen"
        />
        <!-- <input type="text" name="name-image" placeholder="Nombre de la imagen" autocomplete="off"> -->
        <button type="submit" class="btn btn-primary" name="btn-submit">Subir</button>
      </div>
    </form>

    <!-- preview image user -->
    <div class="preview-image">
      <img class="imagePreview" src="" alt="">
    </div>

    <!-- images users-->
  <h1 class="text-recent">Imagenes recientes</h1>
           <div class="container" style="position:relative; left: 100px;">
              <?php   
                  include("../backend/bd.php");    
                  $query = "SELECT * FROM assets";
                  $result = mysqli_query($conex, $query);

                  while ($fila = mysqli_fetch_array($result)) {
              ?>
              <div class="tech-box">
                <!-- dont touch please -->
                    <img src="<?php echo $fila['ruta'];?>" alt="" style="width: 300px; height:300px;">
                </div>
              <!-- close keys -->
              <?php
                  }
              ?>
              <style>
                .tech-box {
                  overflow: hidden;
                  margin: 10px 20px;
                  border-radius: 20px;
                  cursor: pointer;
                  display: flex;
                  /* justify-content: center; */
                }

                .tech-box img{
                  width: 100%;
                  object-fit: cover;
                }
              </style>
          </div>  
    </main>

    <!-- <materialize -- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="../model/scripts/app.js"></script> -->
  </body>
</html>