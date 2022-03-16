<!DOCTYPE html>
<html lang="en">
    <head>
        <!--LOS METAS NO SON VISTOS EN LA WEB-->
        <!--utf-8 nos permite poner caracteres como "ñ" o "´" sin ningún problema-->
        <meta charset="utf-8">
        <!--Descripción de la web en content-->
        <meta name="description" content="Coca cola es la bebida más comprada a nivel mundial,
        y será por algo">
        <!--Palabras clave para que la web sea encontrada-->
        <meta name="keywords" content="bebida, gaseosa, coca cola, cola">
        <!--Para el diseño responsivo-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Inicio - Coca Cola
        </title>
        <!--Poner imagen en la pestaña de la página-->
        <link rel="shortcut icon" href="img/favicon.png">
        <!--Se agrega la funte Roboto-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Trocchi&display=swap" rel="stylesheet">
        <!--Poner archivo normalize.css-->
        <link rel="stylesheet" href="css/normalize.css">
        <!--Conectar la hoja de estilos con el doc HTML-->
        <link rel="stylesheet" href="style.css">      
        <script src="https://kit.fontawesome.com/4e57ef8063.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <!--Logotipo de coca cola-->
                <a href="index.html">
                    <img src="img/logo.svg" class="logo">
                </a>
                <!--Barra de navegación-->
                <nav>
                    <a href="#inicio">Inicio</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#galeria">Galería</a>
                    <a href="#contactenos">Contáctenos</a>
                </nav>
                <a href="#" class="hamb"><i class="fa-solid fa-bars"></i></a>
            </div>
        </header>
        <main>
            <!--Inicio de las secciones-->
            <section id="inicio">
                <img src="img/bannerprincipal.jpg">
                <div class="bloque-inicio">
                    <h1>Bienvenidos a Coca Cola</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. 
                    </p>
                    <a href="#nosotros" class="boton boton-rojo">Ver más</a>
                </div>
            </section>
            <section id="nosotros" class="seccion">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat.</p>
                </div>
            </section>
            <section id="servicios" class="seccion">
                <div class="container">
                    <div class="row">
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio1.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 1</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                                        ut aliquip ex ea commodo consequat.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio2.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 2</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                                        ut aliquip ex ea commodo consequat.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio3.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 3</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                                        ut aliquip ex ea commodo consequat.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="galeria">
                <!--Este container abarcará todo el ancho de la pantalla-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen 1</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio2.jpg">
                                <h4>Imagen 2</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio3.jpg">
                                <h4>Imagen 3</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen 4</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen 5</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen 6</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contactenos" class="seccion">
                <iframe width="600" height="500" 
                src="https://maps.google.com/maps?q=Garz%C3%B3n,%20Huila&t=&z=13&ie=UTF8&iwloc=&output=embed"
                ></iframe>
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna columna-41 columna-mobile-100 empujar-58
                        empujar-mobile-0 sinpadding-mobile">
                        <!--En action se pone el archivo al que se enviará la información 
                        del formulario, en este caso el mismo archivo-->
                            <form action="index.php" method="post">  
                                <div class="form-block">
                                    <input type="text" name="nombre" class="form-control"
                                    placeholder="Nombre">
                                </div>
                                <div class="form-block">
                                    <input type="email" name="email" class="form-control"
                                    placeholder="Email">
                                </div>
                                <div class="form-block">
                                    <textarea name="mensaje" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-block bloque-ultimo">
                                    <input type="submit" class="boton boton-negro" 
                                    value="Enviar">
                                </div>

                                <!--Código php-->
                                <?php
                                    //Se hace la comparación para validar si está llegando 
                                    //información
                                    if($_SERVER["REQUEST_METHOD"] == "POST")
                                    {
                                        //El post se utiliza dependiendo del método, 
                                        //y se pone dentro el name
                                        $nombre = $_POST["nombre"];
                                        $email = $_POST["email"];
                                        $mensaje = $_POST["mensaje"];

                                        //isset verifica si el campo tiene contenido
                                        if(isset($nombre))
                                        {
                                            if(isset($email))
                                            {
                                                if(isset($mensaje))
                                                {
                                                    $para = "juandiegomacias280503@gmail.com";
                                                    $asunto = "Esto es una prueba";
                                                    $cuerpo = $nombre."\n".$email."\n". $mensaje;
                                                    $adicional = "From: noreply@juanmacias.com";

                                                    mail($para, $asunto, $cuerpo, $adicional);

                                                ?>
                                                    <p>Envío exitoso</p>
                                                <?php
                                                }
                                            }
                                        }
                                    }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="seccion">
            <div class="container">
                <div class="row">
                    <div class="columna columna-25 columna-mobile-100">
                        <img src="img/logo-blanco.png" class="logo-footer">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                            ut aliquip ex ea commodo consequat.    
                        </p>
                    </div>
                    <div class="columna columna 25 columna-mobile-100">
                        <h3>
                            Temas relacionados
                        </h3>
                        <ul>
                            <li><a href="#">Tema 1</a></li>
                            <li><a href="#">Tema 2</a></li>
                            <li><a href="#">Tema 3</a></li>
                        </ul>
                    </div>
                    <div class="columna columna 25 columna-mobile-100">
                        <h3>
                            Datos de contacto
                        </h3>
                        <ul>
                            <li>juan@mail.com</li>
                            <li>123123214214</li>
                            <li>Av. Universitaria 12134 - Pueblo Libre<br>Lima - Perú</li>
                        </ul>
                    </div>
                    <div class="columna columna 25 columna-mobile-100">
                        <h3>
                            Redes sociales
                        </h3>
                        <ul class="redes">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="barra-footer">
                <!--&Copy es para que aparezca la c con un círculo alrededor-->
                &copy; Derechos reservados - 2022
            </div>
        </footer>
        <!--Se agrega librería de jQuery-->
        <script src="js/jquery.js"></script>
        <script src="js/funciones.js"></script> 
    </body>
</html>