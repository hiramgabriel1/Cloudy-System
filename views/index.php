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
          <svg
            stroke="currentColor"
            stroke-width="2"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            viewBox="0 0 24 24"
          >
            <path d="M19 12H5M12 19l-7-7 7-7" />
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
                    <span class="label"> Subir imagen </span>

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
              <div class="album box">
                <div class="status-main">
                  <div class="album-detail">
                    <div class="album-title">Ayuda <span>Calculo</span></div>
                    <div class="album-date">6 hours ago</div>
                  </div>
                  <button class="intro-menu"></button>
                </div>
                <div class="album-content">
                  ¿¿Algun tútor de matematicas??
                  <div class="album-photos"></div>
                </div>
                <div class="album-actions">
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                      />
                    </svg>
                    87
                  </a>
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="css-i6dzq1"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"
                      />
                    </svg>
                    20
                  </a>
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="css-i6dzq1"
                      viewBox="0 0 24 24"
                    >
                      <path d="M17 1l4 4-4 4" />
                      <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" />
                      <path d="M21 13v2a4 4 0 01-4 4H3" />
                    </svg>
                    13
                  </a>
                </div>
              </div>

              <!-- tipo de post 2-->
              <div class="album box">
                <div class="status-main">
                  <div class="album-detail">
                    <div class="album-title">
                      Imagenes por IA <span>Informática</span>
                    </div>
                    <div class="album-date">6 hours ago</div>
                  </div>
                  <button class="intro-menu"></button>
                </div>
                <div class="album-content">
                  Acabo de crear estas imagenes con inteligencia artificial
                  usando python
                  <div class="album-photos">
                    <img
                      src="https://images.unsplash.com/photo-1508179719682-dbc62681c355?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2378&q=80"
                      alt=""
                      class="album-photo"
                    />
                    <div class="album-right">
                      <img
                        src="https://images.unsplash.com/photo-1502872364588-894d7d6ddfab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                        alt=""
                        class="album-photo"
                      />
                      <img
                        src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
                        alt=""
                        class="album-photo"
                      />
                    </div>
                  </div>
                </div>
                <div class="album-actions">
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                      />
                    </svg>
                    87
                  </a>
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="css-i6dzq1"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"
                      />
                    </svg>
                    20
                  </a>
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="css-i6dzq1"
                      viewBox="0 0 24 24"
                    >
                      <path d="M17 1l4 4-4 4" />
                      <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" />
                      <path d="M21 13v2a4 4 0 01-4 4H3" />
                    </svg>
                    13
                  </a>
                </div>
              </div>

              <!-- tipo de post 3 -->
              <div class="album box">
                <div class="status-main">
                  <div class="almai-detail">
                    <div class="album-title">create new <span>album</span></div>
                    <div class="album-date">6 hours ago</div>
                  </div>
                  <button class="intro-menu"></button>
                </div>
                <div class="album-content">
                  When the bass drops, so do my problems.
                  <div class="album-photos">
                    <img
                      src="https://images.unsplash.com/photo-1508179719682-dbc62681c355?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2378&q=80"
                      alt=""
                      class="album-photo"
                    />
                  </div>
                </div>
                <div class="album-actions">
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                      />
                    </svg>
                    87
                  </a>
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="css-i6dzq1"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"
                      />
                    </svg>
                    20
                  </a>
                  <a href="#" class="album-action">
                    <svg
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="css-i6dzq1"
                      viewBox="0 0 24 24"
                    >
                      <path d="M17 1l4 4-4 4" />
                      <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" />
                      <path d="M21 13v2a4 4 0 01-4 4H3" />
                    </svg>
                    13
                  </a>
                </div>
              </div>
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
