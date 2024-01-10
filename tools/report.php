<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MeettYou | Soporte</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./css/comments.css" />
    <link rel="stylesheet" type="text/css" href="../css/utils.comments.css" />

    <meta name="robots" content="noindex, follow" />
    <script nonce="0897d0e2-7341-43f0-a21b-9ba908a02822">
      (function (w, d) {
        !(function (f, g, h, i) {
          f[h] = f[h] || {};
          f[h].executed = [];
          f.zaraz = { deferred: [], listeners: [] };
          f.zaraz.q = [];
          f.zaraz._f = function (j) {
            return function () {
              var k = Array.prototype.slice.call(arguments);
              f.zaraz.q.push({ m: j, a: k });
            };
          };
          for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
          f.zaraz.init = () => {
            var m = g.getElementsByTagName(i)[0],
              n = g.createElement(i),
              o = g.getElementsByTagName("title")[0];
            o && (f[h].t = g.getElementsByTagName("title")[0].text);
            f[h].x = Math.random();
            f[h].w = f.screen.width;
            f[h].h = f.screen.height;
            f[h].j = f.innerHeight;
            f[h].e = f.innerWidth;
            f[h].l = f.location.href;
            f[h].r = g.referrer;
            f[h].k = f.screen.colorDepth;
            f[h].n = g.characterSet;
            f[h].o = new Date().getTimezoneOffset();
            if (f.dataLayer)
              for (const s of Object.entries(
                Object.entries(dataLayer).reduce((t, u) => ({
                  ...t[1],
                  ...u[1],
                }))
              ))
                zaraz.set(s[0], s[1], { scope: "page" });
            f[h].q = [];
            for (; f.zaraz.q.length; ) {
              const v = f.zaraz.q.shift();
              f[h].q.push(v);
            }
            n.defer = !0;
            for (const w of [localStorage, sessionStorage])
              Object.keys(w || {})
                .filter((y) => y.startsWith("_zaraz_"))
                .forEach((x) => {
                  try {
                    f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x));
                  } catch {
                    f[h]["z_" + x.slice(7)] = w.getItem(x);
                  }
                });
            n.referrerPolicy = "origin";
            n.src =
              "/cdn-cgi/zaraz/s.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(f[h])));
            m.parentNode.insertBefore(n, m);
          };
          ["complete", "interactive"].includes(g.readyState)
            ? zaraz.init()
            : f.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, "zarazData", "script");
      })(window, document);
    </script>
  </head>
  <body>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <!-- form -->
        <form
          class="contact100-form validate-form"
          method="get"
          action="../backend/reports.php"
        >
          <span class="contact100-form-title">Nos importa tu opinión!</span>
          <div
            class="wrap-input100 validate-input"
            data-validate="Name is required"
          >
            <span class="label-input100">Nombre:</span>
            <input
              class="input100"
              type="text"
              name="username"
              placeholder="Ingresa tu nombre por favor"
            />
            <span class="focus-input100"></span>
          </div>
          <div
            class="wrap-input100 validate-input"
            data-validate="Valid email is required: ex@abc.xyz"
          >
            <span class="label-input100">Correo</span>
            <input
              class="input100"
              type="text"
              name="user_email"
              placeholder="Ingresa tu correo"
            />
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 input100-select">
            <span class="label-input100">¿Qué tipo de mensaje es?</span>
            <div>
              <select class="selection-2" name="type" required>
                <option>Selecciona una opción</option>
                <option value="queja">Queja</option>
                <option value="comentario">Comentario</option>
                <option value="sugerencia">Sugerencia</option>
                <option value="contactar">Contactar con CloudySystem</option>
              </select>
            </div>
            <span class="focus-input100"></span>
          </div>
          <div
            class="wrap-input100 validate-input"
            data-validate="Message is required"
          >
            <span class="label-input100">Mensaje</span>
            <textarea
              class="input100"
              name="mensaje"
              placeholder="Escribe algo..."
            >
            </textarea>
            <span class="focus-input100"></span>
          </div>
          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
              <button class="contact100-form-btn">
                <span>
                  Enviar
                  <i
                    class="fa fa-long-arrow-right m-l-7"
                    aria-hidden="true"
                  ></i>
                </span>
              </button>
            </div>
          </div>
          <!-- close form -->
        </form>
      </div>
    </div>
    <div id="dropDownSelect1"></div>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
  </body>
</html>
