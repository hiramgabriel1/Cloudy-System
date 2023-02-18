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
          <svg
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </div>
        <div class="logo">CloudySystem</div>
        <style>
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
            <a href="#">
              <span class="material-symbols-outlined"> home </span>
              Conversor PDF
            </a>
            <a href="#">
              <span class="material-symbols-outlined"> description </span>
              Formato APA
            </a>
            <a href="#">
              <span class="material-symbols-outlined"> settings_panorama </span>
              Conversor de imagenes
            </a>
            <a href="#">
              <span class="material-symbols-outlined"> heart_plus </span>
              Eventos
            </a>
            <a href="#" class="plus-section" style="color: gold">
              <span class="material-symbols-outlined"> star </span>
              Plus
            </a>
          </div>
        </div>
        <div class="side-wrapper">
          <div class="side-title">ENTRETENIMIENTO</div>
          <div class="side-menu">
            <a href="#">
              <span class="material-symbols-outlined"> headphones </span>
              Música
            </a>
            <a href="#">
              <span class="material-symbols-outlined"> movie </span>
              Videos
            </a>
            <a href="#">
              <span class="material-symbols-outlined"> timer </span>
              Pomodoro
            </a>
            <a href="#">
              <span class="material-symbols-outlined">
                sentiment_very_satisfied
              </span>
              Memes
            </a>
            <a href="#">
              <span class="material-symbols-outlined"> sms </span>
              Chat Global
            </a>
          </div>
        </div>
      </div>

      <div class="main">
        <div class="search-bar" style="height: 130px">
          <input type="text" placeholder="Search" />
        </div>
        <div class="main-container">
          <div class="timeline">
            <!-- posts -->
            <div class="timeline-right">
              <!-- post -->

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
                  />
                  <textarea
                    class="status-textarea"
                    placeholder="Escribe algo..."
                    name="data-post-text"
                  >
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

              <!-- tipo de post 1 -->
              <!-- render data -->
              <?php   
                  include("../backend/bd.php");    
                  $query = "SELECT * FROM posts";
                  $result = mysqli_query($conex, $query);
                  while ($fila = mysqli_fetch_array($result)) {
               ?>
              <div class="card">
                <div class="card-header">
                  <img
                    src="https://via.placeholder.com/50"
                    alt="Profile Picture"
                  />
                  <div class="header-text">
                    <h3>Usuario</h3>
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
                    alt="Post Image"
                  />
                </div>
                <div class="card-footer">
                  <button>Me Gusta</button>
                  <button>Comentar</button>
                  <button>Compartir</button>
                </div>
              </div>
              <?php } ?>

              <style>
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
  </body>
</html>
