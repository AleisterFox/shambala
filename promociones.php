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
                <a href="" class="button">RESERVAR AHORA</a>
            </div>

            <section id="descripcion">
                <h1>Promociones increíbles solo en 
                Shambhala</h1>
                <p>¡En Hotel Shambhala, queremos que tu estadía sea aún más especial con nuestras increíbles promociones!</p>

                <p>Ya sea que estés planeando unas vacaciones en familia, una escapada romántica o una boda de ensueño, nuestras promociones están diseñadas para hacer que tu experiencia en Hotel Shambhala sea aún más especial. ¡Reserva ahora y aprovecha estas increíbles ofertas para crear recuerdos inolvidables con nosotros!</p>
            </section>

            <section id="amenidades-page">
                <div class="amenidad">
                    <div class="container">
                        <div class="left">
                            <figure>
                                <img src="img/cabana1.png" alt="">
                            </figure>
                        </div>
                        <div class="right">
                            <div class="nombre">
                                <h2>Reserva Anticipada</h2>
                            </div>
                            <p>¡Planifica tu escapada con anticipación y ahorra con nuestra promoción de reserva anticipada! Al reservar tu estadía con cierta anticipación, puedes disfrutar de descuentos exclusivos en nuestras tarifas. No solo aseguras tu lugar en nuestro paraíso alpino, sino que también ahorras dinero para disfrutar de otras experiencias durante tu estancia.</p>
                            <div class="button">Reservar</div>
                        </div>
                    </div>

                </div>

                <div class="amenidad">
                    <div class="container">
                        <div class="left">
                            <figure>
                                <img src="img/cabana1.png" alt="">
                            </figure>
                        </div>
                        <div class="right">
                            <div class="nombre">
                                <h2>Niños Gratis</h2>
                            </div>
                            <p>En Hotel Shambhala, creemos que toda la familia merece unas vacaciones inolvidables. Con nuestra promoción de "Niños Gratis", los más pequeños pueden hospedarse y disfrutar de nuestras instalaciones sin costo adicional. Esta promoción no solo hace que viajar en familia sea más asequible, sino que también garantiza que todos los miembros de la familia puedan disfrutar al máximo de su tiempo juntos.</p>
                            <div class="button">Reservar</div>
                        </div>
                    </div>
                </div>

                <div class="amenidad">
                    <div class="container">
                        <div class="left">
                            <figure>
                                <img src="img/cabana1.png" alt="">
                            </figure>
                        </div>
                        <div class="right">
                            <div class="nombre">
                                <h2>Reserva Anticipada</h2>
                            </div>
                            <p>¡Planifica tu escapada con anticipación y ahorra con nuestra promoción de reserva anticipada! Al reservar tu estadía con cierta anticipación, puedes disfrutar de descuentos exclusivos en nuestras tarifas. No solo aseguras tu lugar en nuestro paraíso alpino, sino que también ahorras dinero para disfrutar de otras experiencias durante tu estancia.</p>
                            <div class="button">Reservar</div>
                        </div>
                    </div>
                </div>
            </section>

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
    </script>

    <script src="js/calendario.js"></script>

</body>


</html>