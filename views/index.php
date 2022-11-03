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
    <title>UploadImages</title>
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
        <li class=""><i class="bi bi-house-door"></i><a href="#">Inicio</a></li>
        <br />
        <li class="">
          <i class="bi bi-mailbox"></i><a href="#">Buzón de sugerencias</a>
        </li>
        <br />
        <li class="">
          <i class="bi bi-music-note-beamed"></i><a href="#">Música</a>
        </li>
        <br />
        <li class="">
          <i class="bi bi-camera-video"></i><a href="#">Videos</a>
        </li>
        <br />
        <li class="">
          <i class="bi bi-chat-square-dots-fill"></i><a href="#">Contacto</a>
        </li><br>  
        <li class="">
          <i class="bi bi-person-x-fill"></i><a href="#">Salir</a>
        </li>
      </ul>
    </aside>

    <!-- sidebar mobile -->
    <aside class="aside-mobile">
      <button class="btn btn-primary showSidebarmobile"><i class="bi bi-list"></i>CLss</button>
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
        <input type="text" name="name-image" placeholder="nombre de la imagen" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="btn-submit">Upload image</button>
      </div>
    </form>

    <!-- preview image user -->
    <div class="preview-image">
      <img class="imagePreview" src="" alt="">
    </div>

    <!-- images users-->
  <h1 class="text-recent">Mas recientes</h1>
           <div class="container">
              <?php   
                  include("../backend/bd.php");    
                  $query = "SELECT * FROM imagenes";
                  $result = mysqli_query($conex, $query);

                  while ($fila = mysqli_fetch_array($result)) {
              ?>
              <div class="tech-box">
                  <img src="<?php echo $fila['ruta'];?>" alt="">
              </div>
              <!-- close keys -->
              <?php
                  }
              ?>
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
  </body>
</html>