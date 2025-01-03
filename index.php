<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="frontend/assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="frontend/assets/css/styles.css">

    <title>PROTOTIPO PAGINA ECOMERCE</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="frontend/assets/img/imagenpag2.png" alt="logo"> *MARCA POR DEFINIR*
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link">Servicios</a>
                    </li>
                    <li class="nav__item">
                        <a href="#choose" class="nav__link">Eligenos</a>
                    </li>
                    <li class="nav__item">
                        <a href="#pricing" class="nav__link">Precios</a>
                    </li>

                    <div class="nav__link">
                        <a href="#footer" class="button nav__button">Registrate Ahora</a>
                    </div>
                    <li class="nav__item"> <!-- Nuevo elemento "Inicia Sesión" -->
                        <a href="frontend/pages/login.html" class="nav__link">Inicia Sesión</a>
                    </li>
                    <li class="nav__item"> <!-- Nuevo elemento "Inicia Sesión" -->
                        <a href="frontend/pages/index_admin.php" class="nav__link">Admin</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h2 class="home__subtitle" style="color: #003366;">RASTREA TU</h2>
                    <h1 class="home__title" style="color: #00509E;">VEHÍCULO CON <p></p> SEGURIDAD</h1>
                    <p class="home__description" style="color: #606060;">
                        Aquí, proporcionamos actualizaciones en tiempo real sobre la ubicación y el estado de tu
                        vehículo para asegurar su seguridad en todo momento.
                    </p>
                    </p>
                    <a href="#" class="button button__flex" style="background-color: #007ACC; color: #FFFFFF;">
                        Comienza Aquí<i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__images">
                    <img src="frontend/assets/img/logo4.png" alt="home image" class="home__img">

                    <div class="home__triangle home__triangle-3" style="background-color: #003366;"></div>
                    <div class="home__triangle home__triangle-2" style="background-color: #00509E;"></div>
                    <div class="home__triangle home__triangle-1" style="background-color: #007ACC;"></div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <img src="frontend/assets/img/logo1.png" alt="logo image" class="logos__img">
                <img src="frontend/assets/img/logo2.png" alt="logo image" class="logos__img">
                <img src="frontend/assets/img/logo3.png" alt="logo image" class="logos__img">
                <img src="frontend/assets/img/logo4.png" alt="logo image" class="logos__img">
            </div>
        </section>

        <!--==================== PROGRAMA ====================-->
        <section class="program section" id="program">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Nuestros Servicios</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">PROTEGE LA</h1>
                        <h1 class="section__title">SEGURIDAD DE TU VEHÍCULO</h1>
                    </div>
                </div>

                <div class="program__container grid">
                    <article class="program__card">
                        <div class="program__shape">
                            <img src="frontend/assets/img/location.png" alt="rastreo de ubicación" class="program__img">
                        </div>

                        <h3 class="program__title">Rastreo de Ubicación</h3>
                        <p class="program__description">
                            Seguimiento GPS en tiempo real para saber exactamente dónde está tu vehículo en todo
                            momento.
                        </p>
                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="frontend/assets/img/status.png" alt="monitoreo de estado" class="program__img">
                        </div>

                        <h3 class="program__title">Monitoreo de Estado</h3>
                        <p class="program__description">
                            Recibe actualizaciones en vivo sobre la batería y el estado general de tu vehículo.
                        </p>
                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="frontend/assets/img/alerts.png" alt="alertas de seguridad" class="program__img">
                        </div>

                        <h3 class="program__title">Alertas de Seguridad</h3>
                        <p class="program__description">
                            Notificaciones inmediatas en caso de actividad inusual o posible robo.
                        </p>
                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="frontend/assets/img/report.png" alt="informes mensuales" class="program__img">
                        </div>

                        <h3 class="program__title">Informes Mensuales</h3>
                        <p class="program__description">
                            Informes detallados sobre el uso y estado de tu vehículo a lo largo del tiempo.
                        </p>
                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== ELÍGENOS ====================-->
        <section class="choose section" id="choose">
            <div class="choose__overflow">
                <div class="choose__container container grid">
                    <div class="choose__content">
                        <div class="section__data">
                            <h2 class="section__subtitle">Nuestro Compromiso</h2>
                            <div class="section__titles">
                                <h1 class="section__title-border">POR QUÉ</h1>
                                <h1 class="section__title">ELEGIRNOS?</h1>
                            </div>
                        </div>

                        <p class="choose__description">
                            Asegura tu vehículo con nuestra tecnología de vanguardia. Garantizamos tu tranquilidad con
                            monitoreo en tiempo real y características de seguridad confiables.
                        </p>

                        <div class="choose__data">
                            <div class="choose__group">
                                <h3 class="choose__number">500+</h3>
                                <p class="choose__subtitle">Vehículos Protegidos</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">24/7</h3>
                                <p class="choose__subtitle">Monitoreo en Tiempo Real</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">30+</h3>
                                <p class="choose__subtitle">Clientes Corporativos</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">99.9%</h3>
                                <p class="choose__subtitle">Satisfacción del Cliente</p>
                            </div>
                        </div>
                    </div>

                    <div class="choose__images">
                        <img src="frontend/assets/img/vehicle_security.png" alt="imagen de elección"
                            class="choose__img">

                        <div class="choose__triangle choose__triangle-1" style="background-color: #00509E;"></div>
                        <div class="choose__triangle choose__triangle-2" style="background-color: #003366;"></div>
                        <div class="choose__triangle choose__triangle-3" style="background-color: #007ACC;"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRECIOS ====================-->
        <section class="pricing section" id="pricing">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Precios</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">NUESTROS</h1>
                        <h1 class="section__title">PLANES DE PROTECCIÓN</h1>
                    </div>
                </div>

                <div class="pricing__container grid">
                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="frontend/assets/img/basic.png" alt="paquete básico" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">PAQUETE BÁSICO</h1>
                            <h2 class="pricing__number">$120</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Rastreo GPS de Ubicación
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Monitoreo de Batería
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Alertas en Tiempo Real
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Informes Mensuales
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Soporte al Cliente 24/7
                            </li>
                        </ul>

                        <a href="#" class="button button__flex pricing__button">
                            Comprar Ahora <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card pricing__card-active">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="frontend/assets/img/premium.png" alt="paquete premium" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">PAQUETE PREMIUM</h1>
                            <h2 class="pricing__number">$240</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Rastreo GPS de Ubicación
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Monitoreo de Batería
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Alertas en Tiempo Real
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Informes Mensuales
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Soporte al Cliente 24/7
                            </li>
                        </ul>

                        <a href="#" class="button button__flex pricing__button">
                            Comprar Ahora <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="frontend/assets/img/diamond.png" alt="paquete diamante" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">PAQUETE DIAMANTE</h1>
                            <h2 class="pricing__number">$420</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Rastreo GPS de Ubicación
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Monitoreo de Batería
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Alertas en Tiempo Real
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Informes Mensuales
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Soporte al Cliente 24/7
                            </li>
                        </ul>

                        <a href="#" class="button button__flex pricing__button">
                            Comprar Ahora <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CALCULOS ====================-->
        <section class="calculate section" id="battery-status">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULA</h1>
                        <h1 class="section__title">ESTADO DE TU BATERÍA</h1>
                    </div>

                    <p class="calculate__description">
                        Estima el estado actual de la batería de tu vehículo en función de sus niveles de voltaje.
                    </p>

                    <form action="" class="calculate__form" id="battery-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Voltaje Actual" class="calculate__input"
                                id="calculate-voltage" step="0.1">
                            <label class="calculate__label">V</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Voltaje Máximo" class="calculate__input"
                                id="calculate-max-voltage" step="0.1">
                            <label class="calculate__label">V</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calcular Ahora <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="battery-message"></p>
                </div>
                <img src="frontend/assets/img/battery_status.png" alt="imagen de cálculo" class="calculate__img">
            </div>
        </section>

        <section class="calculate section" id="fuel-consumption">
            <div class="calculate__container container grid">

                <img src="frontend/assets/img/fuel_consumption.png" alt="imagen de consumo de combustible"
                    class="calculate__img">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULA</h1>
                        <h1 class="section__title">CONSUMO DE COMBUSTIBLE</h1>
                    </div>

                    <p class="calculate__description">
                        Calcula el consumo promedio de combustible de tu vehículo basado en la distancia recorrida y el
                        combustible utilizado.
                    </p>

                    <form action="" class="calculate__form" id="fuel-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Distancia Recorrida (km)" class="calculate__input"
                                id="calculate-distance" step="0.1">
                            <label class="calculate__label">km</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Combustible Usado (litros)" class="calculate__input"
                                id="calculate-fuel" step="0.1">
                            <label class="calculate__label">L</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calcular Ahora <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="fuel-message"></p>
                </div>
            </div>
        </section>

        <section class="calculate section" id="maintenance">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULA</h1>
                        <h1 class="section__title">PRÓXIMO MANTENIMIENTO</h1>
                    </div>

                    <p class="calculate__description">
                        Estima el tiempo o kilometraje restante para el próximo servicio de mantenimiento de tu
                        vehículo.
                    </p>

                    <form action="" class="calculate__form" id="maintenance-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Kilometraje Actual" class="calculate__input"
                                id="current-mileage" step="1">
                            <label class="calculate__label">km</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Último Mantenimiento (km)" class="calculate__input"
                                id="last-maintenance" step="1">
                            <label class="calculate__label">km</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Intervalo de Mantenimiento (km)" class="calculate__input"
                                id="maintenance-interval" step="1">
                            <label class="calculate__label">km</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calcular Ahora <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="maintenance-message"></p>
                </div>
                <img src="frontend/assets/img/maintenance.png" alt="imagen de mantenimiento" class="calculate__img">
            </div>
        </section>


        <!--==================== PIE DE PÁGINA ====================-->
        <footer class="footer section" id="footer">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        <img src="frontend/assets/img/imagenpag2.png" alt="logo"> *AUTO SECURE*
                    </a>
                    <p class="footer__description">
                        Suscríbete para recibir actualizaciones sobre seguridad vehicular y nuestras últimas funciones.
                    </p>

                    <form action="" class="footer__form" id="contact-form">
                        <input type="email" name="user_email" placeholder="Tu Correo" class="footer__input"
                            id="contact-user">
                        <button type="submit" class="button">
                            Suscribirse
                        </button>
                    </form>

                    <p class="footer__message" id="contact-message"></p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">
                            SERVICIOS
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Rastreo de Ubicación</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Monitoreo de Batería</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Alertas de Seguridad</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Soporte 24/7</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            PLANES
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Básico</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Premium</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Diamante</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            EMPRESA
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Sobre Nosotros</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Carreras</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Historias de Clientes</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Socios</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="footer__group">
                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </ul>

                    <span class="footer__copy">
                        &#169; 2024 Auto Secure. Todos los derechos reservados.
                    </span>
                </div>
            </div>
        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="frontend/assets/js/scrollreveal.min.js"></script>

        <!--=============== EMAIL JS ===============-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="frontend/assets/js/main.js"></script>


        <script>
            // Función para llamar a test_connection.php
            function checkDatabaseConnection() {
                fetch('backend/conexion/test_connection.php') // Ajusta la ruta si es necesario
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error al conectar con el servidor: ' + response.status);
                        }
                        return response.text(); // Obtener el contenido como texto
                    })
                    .then(data => {
                        // Mostrar el mensaje en un alert
                        alert(data); // O reemplazar alert con otra funcionalidad, como insertar en el DOM
                    })
                    .catch(error => {
                        // Manejar errores
                        alert('Hubo un problema al verificar la conexión: ' + error.message);
                    });
            }

            // Llama a la función al cargar la página o al hacer clic en un botón
            checkDatabaseConnection();

        </script>
</body>

</html>