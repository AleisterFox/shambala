<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Molcajete" />
  <meta name="description" content="">

  <meta name="Keywords" content="">

  <meta name="robots" content="all" />
  <meta property="og:title" content="SHAMBALA" />
  <meta property="og:description" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="img/icono.png" />
  <meta property="og:image:width" content="300">
  <meta property="og:image:height" content="300">
  <meta property="og:site_name" content="SHAMBALA" />
  <meta name="msapplication-TileColor" content="rgb(16, 48, 55)">
  <meta name="theme-color" content="rgb(16, 48, 55)">
  <link rel="canonical" href="">

  <?php include 'elementos/estilos.php' ?>
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/calendario.css">

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CommunityHealth",
      "name": "SHAMBALA",
      "image": "https://audiologiaintegral.com.mx/img/logo.png",
      "@id": "",
      "url": "https://audiologiaintegral.com.mx/",
      "telephone": "7531394249",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Mariano Matamoros 158",
        "addressLocality": "Lázaro Cárdenas",
        "postalCode": "60950",
        "addressCountry": "MX"
      },
      "sameAs": [
        "https://www.facebook.com/apoyosauditivosintegrales",
        "https://www.instagram.com/audiologiaintegrallzc"
      ]
    }
  </script>
  <!-- calendario  -->
  <script type="module" src="https://unpkg.com/cally"></script>

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>SHAMBALA</title>
</head>

<body>


  <?php include 'elementos/whats.php' ?>



  <?php include 'elementos/header.php' ?>
  <main>
    <div class="content-wrapper">
      <section id="hero">
        <div id="owl-hero" class="owl-carousel owl-theme">

          <div class="item">
            <figure>
              <img src="img/hero1.png" alt="">
            </figure>
          </div>
          <div class="item">
            <figure>
              <img src="img/hero2.png" alt="">
            </figure>
          </div>
          <div class="item">
            <figure>
              <img src="img/hero3.png" alt="">
            </figure>
          </div>
          <div class="item">
            <figure>
              <img src="img/hero4.png" alt="">
            </figure>
          </div>
          <div class="item">
            <figure>
              <img src="img/hero5.png" alt="">
            </figure>
          </div>

        </div>
      </section>
      <div class="reservacion-box">
        <div class="reservation-date">
          <div class="icono">
            <figure>
              <img src="img/calendar.png" alt="">
            </figure>
          </div>
          <div class="info">
            <p class="encabezado">Fechas de Estancia</p>
            <div class="fechas">
              <p class="initial">12 Abr 2024</p>
              <p><i class="fas fa-arrow-right"></i></p>
              <p class="final">19 Abr 2024</p>
            </div>
          </div>

          <!-- CALENDARIO  -->
          <div class="calendario">
            <calendar-range>
              <svg aria-label="Previous" slot="previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M15.75 19.5 8.25 12l7.5-7.5"></path>
              </svg>
              <svg aria-label="Next" slot="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
              </svg>
              <calendar-month></calendar-month>
            </calendar-range>
          </div>
          <!-- CALENDARIO  -->

        </div>
        <a href="reservacion.php" class="button">RESERVAR AHORA</a>
      </div>

      <section id="descripcion">
        <h1>Un lugar para descansar y relajarte como te mereces</h1>
        <p>Su arquitectura y concepto son únicos en Manzanillo, cuenta con 3 tipos de cabañas ideales para pasar un momento familiar, en pareja o con amigos, con una vista increíble en donde podrás capturar los atardeceres más hermosos de Manzanillo, nuestras cabañas están equipadas para garantizar el máximo confort de nuestros huéspedes, así mismo contamos con 2 albercas, área de bar, miradores para poder pasar un rato en compañía, y también contamos con área de spa y templo de yoga.</p>

        <figure>
          <img src="img/descripcion.png" alt="">
        </figure>
      </section>
      <div class="banner">
        <div class="bg">
          <figure>
            <img src="img/banner.png" alt="">
          </figure>
        </div>
        <div class="text">
          <h2>Vive la experiencia <span>Shambala</span></h2>
        </div>
      </div>
      <div class="banner banner2">
        <p>¡Embárcate en una experiencia única en nuestro exclusivo hotel alpino! Sumérgete en la belleza natural y disfruta de una amplia gama de actividades emocionantes:</p>
      </div>

      <section id="activities-cards">
        <div class="container">
          <div class="card">
            <figure><img src="img/casa.png" alt=""></figure>
            <p>Explora nuestras 11 cabañas alpinas y sumérgete en la comodidad y el encanto rústico.</p>
          </div>
          <div class="card">
            <figure><img src="img/nadar.png" alt=""></figure>
            <p>Refréscate en nuestras dos impresionantes albercas y relájate en nuestro jacuzzi con vistas panorámicas.</p>
          </div>
          <div class="card">
            <figure><img src="img/restaurant.png" alt=""></figure>
            <p>Deléitate con la cocina gourmet en nuestro restaurante y disfruta de una copa en nuestro acogedor bar.</p>
          </div>
        </div>
      </section>

      <div class="banner banner2">
        <p>El Hotel no solo está ubicado en una zona privilegiada, sino que también cuenta con todo lo necesario para vivir una experiencia mágica e inolvidable en un ambiente muy relajante y ameno. No te pierdas está maravillosa experiencia en compañía de los que más quieres.</p>
      </div>

      <section id="amenidades">
        <h2>amenidades</h2>
        <div id="owl-amenidades" class="owl-carousel owl-theme owl-sldr">

          <div class="item">
            <div class="bg">
              <figure><img src="img/spa.png" alt=""></figure>
            </div>
            <h3>SPA</h3>
            <a href="amenidades.php">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>

          <div class="item">
            <div class="bg">
              <figure><img src="img/restaurante-ojo.png" alt=""></figure>
            </div>
            <h3>Restaurant Ojo de Agua</h3>
            <a href="amenidades.php">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>

          <div class="item">
            <div class="bg">
              <figure><img src="img/yoga.png" alt=""></figure>
            </div>
            <h3>Templo de Yoga</h3>
            <a href="amenidades.php">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>

        </div>
      </section>

      <section id="actividades">
        <h2>ACTIVIDADES</h2>
        <div class="container">
          <div class="item">
            <div class="bg">
              <figure><img src="img/spa.png" alt=""></figure>
            </div>
            <h3>SPA</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="item">
            <div class="bg">
              <figure><img src="img/spa.png" alt=""></figure>
            </div>
            <h3>SPA</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="item">
            <div class="bg">
              <figure><img src="img/spa.png" alt=""></figure>
            </div>
            <h3>SPA</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="item">
            <div class="bg">
              <figure><img src="img/spa.png" alt=""></figure>
            </div>
            <h3>SPA</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </section>

      <section id="servicios__extra">
        <h2>SERVICIOS CON COSTO ADICIONAL</h2>
        <div id="owl-servicios-extra" class="owl-carousel owl-theme owl-sldr">

          <div class="item">
            <div class="bg">
              <figure><img src="img/taxis.png" alt=""></figure>
            </div>
            <h3>Taxis</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>

          <div class="item">
            <div class="bg">
              <figure><img src="img/bar.png" alt=""></figure>
            </div>
            <h3>bar para alberca y cabañas</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>

          <div class="item">
            <div class="bg">
              <figure><img src="img/tours.png" alt=""></figure>
            </div>
            <h3>Tours y viajes guiados</h3>
            <a href="">Descubre mas<i class="fas fa-arrow-right"></i></a>
          </div>

        </div>
      </section>

      <div class="banner">
        <div class="bg">
          <figure>
            <img src="img/banner2.png" alt="">
          </figure>
        </div>
        <div class="text">
          <h2>Encuentra el paraíso perfecto
            para ti</span></h2>
        </div>
      </div>

      <section id="ubicacion">
        <h2>Nos ubicamos en</h2>
        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7351963165506!2d-104.36525069999999!3d19.1192694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d6c7a365944d%3A0x6f8b32e322835b6c!2sBlvd.%20Miguel%20de%20la%20Madrid%201500B%2C%20Colinas%20de%20Santiago%2C%2028863%20Manzanillo%2C%20Col.!5e0!3m2!1ses-419!2smx!4v1719430112645!5m2!1ses-419!2smx" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="address">
            <i class="fas fa-location-dot"></i>
            <p>Bulevard, Blvd. Miguel de la Madrid 1500B, Colinas de Santiago, 28863 Manzanillo, Col.</p>
          </div>
        </div>
      </section>

      <div class="banner banner3">
        <div class="bg">
          <figure>
            <img src="img/banner3.png" alt="">
          </figure>
        </div>
        <div class="text">
          <h2>Aprovecha los descuentos de temporada y de reservación anticipada.</h2>
          <a href="" class="button">Ver Promociones</a>
        </div>
      </div>

      <section id="contacto">
        <h2>Contáctanos</h2>
        <form action="">
          <div class="left">
            <div class="input">
              <label for="name">Nombre Completo</label>
              <input type="text" name="name" id="name" placeholder="Nombre Completo" required>
            </div>

            <div class="input">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="input">
              <label for="phone">Teléfono</label>
              <input type="tel" name="phone" id="phone" placeholder="Teléfono" required>
            </div>

          </div>

          <div class="right">
            <div class="input">
              <label for="message">Mensaje</label>
              <textarea name="message" id="message" placeholder="Mensaje"></textarea>
            </div>

            <button type="submit" class="button">Enviar</button>
          </div>

        </form>

        <div class="bg">
          <figure>
            <img src="img/contacto-bg.png" alt="">
          </figure>
        </div>

        <div class="contact-info">
          <div class="mail">
            <span><i class="fas fa-envelope"></i></span>
            <a href="mailto:info@shambhala.com.mx">info@shambhala.com.mx</a>
          </div>
          <div class="phone">
            <span><i class="fas fa-phone"></i></span>
            <a href="tel:+52 555 5555">+52 555 5555</a>
          </div>
          <div class="addrs">
            <span><i class="fas fa-location-dot"></i></span>
            <p>Bulevard, Blvd. Miguel de la Madrid 1500B, Colinas de Santiago, 28863 Manzanillo, Col.</p>
          </div>
        </div>
      </section>

    </div>
  </main>
  <?php include 'elementos/footer.php' ?>


  <script src="js/loader.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script>
    var owlHero = $("#owl-hero");
    owlHero.owlCarousel({
      navigation: false,
      items: 1,
      loop: true,
      nav: false,
      autoplay: true,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      autoplayTimeout: 4000,
      touchDrag: false,
      mouseDrag: false
    });

    var owlAmenidades = $("#owl-amenidades");
    owlAmenidades.owlCarousel({
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        850: {
          items: 3
        }
      },
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      margin: 50,
      nav: true,
      navigation: true,
      navText: ['<i class="fas fa-chevron-left" aria-hidden="true"></i>', '<i class="fas fa-chevron-right" aria-hidden="true"></i>'],
      autoWidth: true,
    });


    var owlExtra = $("#owl-servicios-extra");
    owlExtra.owlCarousel({
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        850: {
          items: 3
        }
      },
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      margin: 50,
      nav: true,
      navigation: true,
      navText: ['<i class="fas fa-chevron-left" aria-hidden="true"></i>', '<i class="fas fa-chevron-right" aria-hidden="true"></i>'],
      autoWidth: true,
    });
  </script>

  <script src="js/calendario.js"></script>

</body>


</html>