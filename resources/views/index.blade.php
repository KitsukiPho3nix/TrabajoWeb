<!DOCTYPE html>
<html lang="es">
<head>
    <title>Este texto es el título del documento</title>
    <meta charset="utf-8">
    <meta name="description" content="Este es un documento HTML5">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" href="css/misestilos.css">
</head>
<body>
    <header id="cabeceralogo">
        <div>
            <h1>Este es el título</h1>
        </div>
    </header>
    <nav id="menuprincipal">
        <div>
            <ul>
                <li><a href="index.html">Principal</a></li>
                <li><a href="fotos.html">Fotos</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div>
            <section id="articulosprincipales">
                <article>
                    <h1>Título Primer Artículo</h1>
                    <time datetime="2024-05-14" pubdate>
                        <div class="numerodia">14</div>
                        <div class="nombredia">Viernes</div>
                    </time>
                    <p>Este es el texto de mi primer artículo</p>
                    <figure>
                        <img src="miimagen.jpg">
                    </figure>
                </article>
                <article>
                    <h1>Título Segundo Artículo</h1>
                    <time datetime="2016-12-7" pubdate>
                        <div class="numerodia">7</div>
                        <div class="nombredia">Miércoles</div>
                    </time>
                    <p>Este es el texto de mi segundo artículo</p>
                    <figure>
                        <img src="miimagen.jpg">
                    </figure>
                </article>
            </section>
            <aside id="infoadicional">
                <h1>Información Personal</h1>
                <p>Cita del artículo uno</p>
                <p>Cita del artículo dos</p>
            </aside>
        </div>
    </main>
    <footer id="pielogo">
        <div>
            <section class="seccionpie">
                <h1>Sitio Web</h1>
                <p><a href="index.html">Principal</a></p>
                <p><a href="fotos.html">Fotos</a></p>
                <p><a href="videos.html">Videos</a></p>
            </section>
            <section class="seccionpie">
                <h1>Ayuda</h1>
                <p><a href="gborbaprofe@gmail.com">Contacto</a></p>
            </section>
            <section class="seccionpie">
                <address>Montevideo, Uruguay</address>
                <small>&copy; Derechos Reservados 2024</small>
            </section>
        </div>
    </footer>
</body>
</html>