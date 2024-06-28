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
                        <figure><img src="img/cabana1.png" alt=""></figure>
                        <p>Cabañas para cualquier ocasión</p>
                    </div>
                    <div class="item">
                        <figure><img src="img/cabana2.png" alt=""></figure>
                        <p>Escoge el estilo que vaya
                            contigo</p>
                    </div>
                    <div class="item">
                        <figure><img src="img/cabana3.png" alt=""></figure>
                        <p>Capacidad para toda la
                            familia</p>
                    </div>
                    <div class="item">
                        <figure><img src="img/cabana4.png" alt=""></figure>
                        <p>Más espacio para cualquier tipo de
                            eventos</p>
                    </div>

                </div>
            </section>
            <section id="descripcion">
                <h2 style="border-bottom: 4px solid black; padding-bottom: 1rem; width: 60%; margin: var(--center); margin-bottom: 5rem;">Cabaña Sencilla</h2>
                <h3>Un lugar agradable para 
                Estar</h3>
                <p>La Cabaña Estándar es un lugar donde puedes sentirte como en casa, en contacto con las mejores amenidades que puedas tener dentro de tu cabaña. Disfruta esta cabaña en compañía de tus amigos, familiares y seres queridos, para que disfrutes una estancia de primer nivel.</p>
            </section>

            <section id="galeria">
                <h2>Galeria</h2>
                <div class="container">
                    <figure><img src="img/cabana5.png" alt=""></figure>
                    <figure><img src="img/cabana5-1.png" alt=""></figure>
                    <figure><img src="img/cabana5-2.png" alt=""></figure>
                    <figure><img src="img/cabana5-3.png" alt=""></figure>
                </div>
            </section>

            <section id="cabana-servicios">
                <h2>Servicios</h2>
                <div class="container">
                    <div class="sv-ca">
                        <img src="img/ac-black.png" alt="">
                        <p>Aire Acondicionado</p>
                    </div>
                    <div class="sv-ca">
                        <img src="img/wifi-black.png" alt="">
                        <p>Internet Wifi</p>
                    </div>
                    <div class="sv-ca">
                        <img src="img/terraza.png" alt="">
                        <p>Terraza</p>
                    </div>
                    <div class="sv-ca">
                        <img src="img/ducha.png" alt="">
                        <p>Ducha</p>
                    </div>
                </div>
                <a href="" class="button">Reservar</a>
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
</body>


</html>