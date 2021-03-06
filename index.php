

<!DOCTYPE html>
<html lang="es">
    <!--ENCABEZADO-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PORTAFOLIO WEB</title>
</head>
    <!--CUERPO-->
<body>
  <?php
    $var = 'Es una variable';
   ?>
    <header class="header">
        <div class="container">
            <nav class="header__menu">
                <h1>
                    Portafolio web
                </h1>
                <ul>
                    <li>
                        <a class="header__link" href="#portafolio">Servicios</a>
                    </li>
                    <li>
                        <a class="header__link" href="#proyectos">Proyectos</a>
                    </li>
                    <li>
                        <a class="header__link" href="#Contacto">Contacto</a>
                    </li>
                    <li>
                        <a class="header__link" href="formulario.html">Ingresar</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
    <!--SECTION BANNER-->
    <section class="banner">
        <div class="container">
            <div class="banner__hero">
            <div class="banner__img-hero">
               <img src="https://startupmotion.cl/wp-content/uploads/2018/02/iso-logo.png" alt="" width="200" height="auto">
            </div>
            <div class="banner__text-hero">
                <h2>Hola, Este sitio web se encuentra diseñado con el fin de mostrar nuestro portafolio de servicios</h2>
            </div>
            </div>
        </div>
    </section>
    <main>
        <div class="container">
            <h2 class="title">
                SERVICIOS
            </h2>
            <section id="portafolio" class="portafolio" >
                <article class="portafolio__box">
                    <div class="portafolio__card">
                        <img src="https://casandrasoft.com/wp-content/uploads/2017/12/desarrolloweb.png" alt="" width="250" height="250">
                        <h3>Diseño de páginas web</h3>
                        <button>Ver</button>
                    </div>
                </article>

                <article class="portafolio__box">
                    <div class="portafolio__card">
                        <img src="https://www.kindpng.com/picc/m/287-2876925_test-image-png-unit-testing-png-transparent-png.png" alt="" width="250" height="250">
                        <h3>Testing</h3>
                        <button>Ver</button>
                    </div>
                </article>

                <article class="portafolio__box">
                    <div class="portafolio__card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUYCtH3pchsZBWSRUmrsKEMwnpzF0NQszHtw&usqp=CAU.png" alt="" width="250" height="250">
                        <h3>Requerimientos</h3>
                        <button>Ver</button>
                    </div>
                </article>
            </section>

            <h2 class="title">PROYECTOS</h2>
            <section class="proyecto">
                <article class="proyecto__box">
                    <img src="https://blogs.uab.cat/actualidapp/files/2016/07/pokemon-go-2.png" alt="" width="250">
                    <div class="proyecto__body">
                        <h3>Ejemplo</h3>
                        <p></p>
                    </div>
                </article>
                <article class="proyecto__box">
                    <img src="" alt="" width="150">
                    <div class="proyecto__body">
                        <h3>Ejemplo</h3>
                        <p></p>
                    </div>
                </article>
            </section>
        </div>
    </main>
    <!--PIE DE PÁGINA-->
    <footer class="footer">
        <div class="container">
            <div class="footer__sections">
                <h2>Grupo Integracion Continua Politecnico Grancolombian</h2>
            </div>
            <div class="copyright">
                <p>Todos los derechos son reservados 2020</p>
            </div>
        </div>
    </footer>
</body>
</html>
________________________________________________________
