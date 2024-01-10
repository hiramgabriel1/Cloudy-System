<!-- validar sesión -->
<?php
    session_start();
    error_reporting(0);

    $varsession = $_SESSION['user'];
    if($varsession  == null || $varsession= ''){
        // error message
        echo "No tienes permisos para acceder, primero inicia sesión";
        // redireccionar
        echo "<br><br> <a href='./login.php'>Iniciar sesión</a>";

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
    <!-- styles -->
    <link rel="stylesheet" href="../public/styles/index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <title>CloudySystem</title>
  </head>
  <body>
    <div class="container" x-data="{ rightSide: false, leftSide: false }">
      <div class="left-side" :class="{'active' : leftSide}">
        <div class="left-side-button" @click="leftSide = !leftSide">
         <!-- <button class="menu"></button> -->
         <button class="menu">Menú</button>
        </div>
        <div class="logo">CloudySystem</div>
        <style>
          .menu{
            
          }
          @media screen and(max-width:930px) {
            .logo {
              visibility: hidden;
            }
          }
        </style>
        <div class="side-wrapper">
          <div class="side-title">Herramientas</div>
          <div class="side-menu">
            <a href="#"> Inicio </a>
            <a href="../error/404.html">
            <!-- <a href="../tools/creator_pdfhtml"> -->
              <span class="material-symbols-outlined"> home </span>
              Creador PDF
            </a>
            <a href="../tools/todo.html">
              <span class="material-symbols-outlined"> heart_plus </span>
              Pendientes
            </a>
            <a href="../error/404.html"
              class="plus-section"
              style="color: gold"
            >
            <!-- <a
              href="../tools/plus.html"
              class="plus-section"
              style="color: gold"
            > -->
              <span class="material-symbols-outlined"> star </span>
              Plus
            </a>
          </div>
        </div>
        <div class="side-wrapper">
          <div class="side-title">Más</div>
          <div class="side-menu">
            <a href="../error/404.html">
            <!-- <a href="../entertainment/music.html"> -->
              <span class="material-symbols-outlined"> headphones </span>
              Música
            </a>
            <a href="../entertainment/videos.html">
              <span class="material-symbols-outlined"> movie </span>
              Videos
            </a>
            <a href="../tools/pomodoro.html">
              <span class="material-symbols-outlined"> timer </span>
              Pomodoro
            </a>
            <a href="../entertainment/memes.php">
              <span class="material-symbols-outlined">
                sentiment_very_satisfied
              </span>
              Memes
            </a>
            <a href="../tools/report.php">
              <span class="material-symbols-outlined"> description </span>
              Reportar problemas
            </a>
            <a href="../other/info.html">
              <span class="material-symbols-outlined"> description </span>
              Saber más
            </a>
          </div>
        </div>
      </div>

      <div class="main">
        <!-- <div class="search-bar" style="height: 130px">
          <input type="text" placeholder="Search" />
        </div> -->
        <div class="main-container">
          <div class="timeline">

            <!-- posts -->
            <div class="timeline-right">
              <form
                class="status box"
                method="POST"
                action="../backend/add.post.php"
                enctype="multipart/form-data"
              >
                <div class="status-menu">
                  <div class="button-wrapper">
                    <span class="label"> Subir imagen</span>
                    <input
                      type="file"
                      name="imagen"
                      id="upload"
                      class="upload-box"
                      placeholder="Upload File"
                    />
                  </div>
                </div>
                <!-- save data post -->
                <div class="status-main">
                  <input
                    type="text"
                    placeholder="Titulo..."
                    class="title-post"
                    name="title-post"
                    required
                  />
                  <textarea
                    class="status-textarea"
                    placeholder="Escribe algo..."
                    name="data-post-text"
                    required>
                  </textarea>
                </div>
                <!-- close -->
                <div class="status-actions">
                  <input
                    class="status-share"
                    type="submit"
                    name="submit"
                    value="Compartir ahora"
                  />
                </div>
              </form>
              <!-- close form -->

              <style>
                .title-post {
                  border: 2px #fff;
                  outline: none;
                  padding: 4px;
                  background: transparent;
                  color: #fff;
                }
                .title-post::placeholder {
                  color: #fff;
                }

                .button-wrapper {
                  position: relative;
                  width: 150px;
                  text-align: center;
                }

                .button-wrapper span.label {
                  position: relative;
                  z-index: 0;
                  display: inline-block;
                  width: 100%;
                  background: #00bfff;
                  cursor: pointer;
                  color: #fff;
                  padding: 10px 0;
                  text-transform: uppercase;
                  font-size: 12px;
                }

                #upload {
                  display: inline-block;
                  position: absolute;
                  z-index: 1;
                  width: 100%;
                  height: 50px;
                  top: 0;
                  left: 0;
                  opacity: 0;
                  cursor: pointer;
                }
              </style>

              <!-- render data -->
              <?php   
                  include("../backend/bd.php");    
                  $query = "SELECT * FROM posts";
                  $result = mysqli_query($conex, $query);
                  while ($fila = mysqli_fetch_array($result)) {
               ?>
              <div class="card">
                <div class="card-header">
                
                  <div class="header-text">
                    <h3><?php echo $fila['title_post']; ?></h3>
                    <p><?php echo $fila['fecha']?></p>
                  </div>
                </div>
                <div class="card-body">
                  <p>
                    <?php echo $fila['description_post']; ?>
                  </p>
                  <!-- foto del post -->
                  <img
                    src="<?php echo $fila['ruta_file'];?>"
                  />
                  <!-- <button class="options-post-comment">Ayudar</button> -->
                </div>
              </div>
              <?php } ?>

              <style>
                .image-responsive{
                  width: 200px;
                  object-fit:cover;
                }
                .options-post-comment {
                  cursor: pointer;
                  padding: 10px;
                  position: relative;
                  border: none;
                  border-radius: 4px;
                }

                .form__group {
                  position: relative;
                  padding: 15px 0 0;
                  margin-top: 10px;
                  width: 50%;
                }

                .form__field {
                  font-family: inherit;
                  width: 100%;
                  border: 0;
                  border-bottom: 2px solid #9b9b9b;
                  outline: 0;
                  font-size: 1.3rem;
                  color: #fff;
                  padding: 7px 0;
                  background: transparent;
                  transition: border-color 0.2s;
                }
                .form__field::placeholder {
                  color: transparent;
                }
                .form__field:placeholder-shown ~ .form__label {
                  font-size: 10px;
                  cursor: text;
                  top: 20px;
                }

                .form__label {
                  position: absolute;
                  top: 0;
                  display: block;
                  transition: 0.2s;
                  color: #9b9b9b;
                }

                .form__field:focus {
                  padding-bottom: 6px;
                  font-weight: 700;
                  border-width: 3px;
                  border-image: linear-gradient(to right, #11998e, #38ef7d);
                  border-image-slice: 1;
                }
                .form__field:focus ~ .form__label {
                  position: absolute;
                  top: 0;
                  display: block;
                  transition: 0.2s;
                  font-size: 1rem;
                  color: #11998e;
                  font-weight: 700;
                }

                /* reset input */
                .form__field:required,
                .form__field:invalid {
                  box-shadow: none;
                }

                .card {
                  background-color: #151728;
                  border-radius: 10px;
                  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                  max-width: 600px;
                  margin: 20px auto;
                }

                @media (max-width: 600px) {
                  .card {
                    width: 100%;
                    border-radius: 0;
                  }
                }

                .card-header {
                  display: flex;
                  align-items: center;
                  padding: 20px;
                }

                .card-header img {
                  border-radius: 50%;
                  margin-right: 20px;
                }

                .card-header h3 {
                  font-size: 18px;
                  font-weight: bold;
                  margin: 0;
                }

                .card-header p {
                  font-size: 14px;
                  color: #aaa;
                  margin: 0;
                }

                .card-body {
                  padding: 20px;
                }

                .card-body p {
                  margin-bottom: 20px;
                }

                .card-body img {
                  max-width: 100%;
                  border-radius: 10px;
                }

                .card-footer {
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  padding: 20px;
                }

                .card-footer button {
                  background-color: #fff;
                  border: none;
                  color: #444;
                  font-size: 16px;
                  cursor: pointer;
                }

                .card-footer button:hover {
                  color: #4267b2;
                }

                @media (max-width: 600px) {
                  .card-footer {
                    flex-direction: column;
                    align-items: flex-start;
                    padding: 10px 20px;
                  }

                  .card-footer button {
                    margin-bottom: 10px;
                  }
                }
              </style>
            </div>
          </div>
        </div>
      </div>
      <div
        class="overlay"
        @click="rightSide = false; leftSide = false"
        :class="{ 'active': rightSide || leftSide }"
      ></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../scripts/functions_index.js"></script>
    <script src="../scripts/menu_index.js"></script>
  </body>
</html>