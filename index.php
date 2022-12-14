<!-- Enviar mail -->
<?php
    
    if(isset($_POST["btnEnviar"])){
        
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $telefono = $_POST["telefono"];

        //Comprobar correo 
        $email = str_replace(array("\r","\n","%0a","%0d"), "", $_POST["email"]); 
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $mensaje = $_POST["mensaje"]. "<br>". $nombre." ".$apellidos. "<br><br>". $email ."<br>".$telefono;

        $destinatario = "ecolaciosgarcia@gmail.com";
        $header = 'MIME-Version: 1.0' . "\r\n".'Content-type: text/html; charset=utf-8' . "\r\n".'From: ' . $email . "\r\n";  
        $asunto = "Solicitud de contacto desde Web";
        
        if (mail($destinatario, $asunto, $mensaje, $header)) {
            header("Location: gracias.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fustadecor</title>
    <link rel="icon" type="image/x-icon" href="imgs/logos/favicon.png">
    <link rel="stylesheet" href="estilos/styles.css">   <!-- CSS -->
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <script>
        AOS.init();
      </script>
    <section class="hero">
        <header>
            <a href="index.php"><img src="imgs/logos/new_logo_XL.png" alt="fustadecor_logo" class="logo"></a>     

            <input type="checkbox" id="menu-bar">
            <label for="menu-bar"><img src="burger_icon.png" width="40" style="fill: white" alt="Burger Icon"></label>
            <nav>
                    <ul>
                        <li><a href="#" id="active">Inicio</a></li>
                        <li><a href="exteriores.html">Exteriores</a>
                        <li><a href="interiores.html">Interiores +</a>
                            <ul>
                                <li><a href="interiores.html#parquets">Parquets</a></li>
                                <li><a href="interiores.html#mobiliario">Mobiliario</a></li>
                                <li><a href="interiores.html#cocinas">Cocinas</a></li>
                                <li><a href="interiores.html#revestimientos">Revestimientos</a></li>
                                <li><a href="interiores.html#escaleras">Escaleras</a></li>
                            </ul>
                        </li>
                        <li><a href="dise??os3D.html">Proyectos 3D</a></li>
			            <li><a href="luxury.html">Luxury +</a>
                            <ul>
                                <li><a href="luxury.html#mini-piscinas">Mini piscinas</a></li>
                                <li><a href="luxury.html#balinesas">Balinesas</a></li>
                            </ul>
                        </li>
                        <li><a href="#contacto">Contacto</a></li>
            </nav>
        </header>
        <script>
            const active = document.getElementById("active");
            active.style.color = "orange";
        </script>

        <div class="titulo">
            <img src="imgs/logos/new_logo_XL.png" alt="fustadecor_logo">
            <p>Proyectos de exteriores, interiores y decoraci??n a tu medida</p><br>
            <a href="#exteriores-interiores" class="btnLanding">EMPEZAR</a>
        </div>

    </section>

    <section class="presentacion">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col col-lg-3 col-md-4 col-sm-12 col-12 me-5">
                        <h1>Dise??amos tu espacio</h1>
                    </div>
                    <div class="col col-lg-6 col-md-7 col-sm-12 col-12">
                        <p>En <span style="color: orange;">Fustadecor</span> somos especialistas en transformar tu espacio en un lugar m??s acogedor y lujoso.  Desarrollamos y realizamos cualquier proyecto tanto de exterior como de interior con la mayor eficiencia y calidad</p>
                    </div>
                </div>
            </div>
    </section>


    <section class="imagenes">
        <div class="img1"></div>
        <div class="img2"></div>
    </section>


    <section class="escalas">
        <div class="container">
            <h2>Peque??a o gran escala</h2>
            <div class="row mb-5">
                <div class="col col-lg-6 col-md-5 col-sm-12 col-12 caption-text me-5" data-aos="fade-up">
                    <p>Con m??s de 30 a??os en el sector, en Fustadecor disponemos de los medios para realizar cualquier tipo de proyecto sin importar su tama??o ni su complejidad. Si deseas darle un nuevo look a tu jard??n o terraza podemos montar piscinas con suelo de tarima, p??rgolas, zonas chill out, balinesas y un largo etc??tera. En cambio, si deseas renovar un espacio interior podemos montar parquets, aplicar revestimientos o incluso restaurar tu cocina o tu ba??o</p>
                    <p style="color: orange; font-size: 22px;">El l??mite lo decides t??</p>
                </div>
                <div class="col col-lg-5 col-md-6 col-sm-12 col-12 mt-5" data-aos="fade-up">
                    <img src="imgs/exteriores/369.JPG" class="img-fluid" alt="Proyecto 1">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col col-lg-7 col-md-6 col-sm-12 col-12 me-5 mt-5 mb-5" data-aos="fade-up">
                    <img src="imgs/exteriores/verde.jpg" class="img-fluid" alt="Proyecto 2">
                </div>
                <div class="col col-lg-4 col-md-5 col-sm-12 col-12 caption-text" data-aos="fade-up">
                    <p>Adem??s de esto, tenemos un gran conocimiento sobre las obras sobre las que trabajamos, pues nosotros mismos nos encargamos de aportar ideas, desarrollarlas y finalmente aplicarlas para conseguir un acabado profesional, duradero y elegante.</p>
                </div> 
            </div>
        </div>
    </section>

    <section class="exteriores-interiores row" id="exteriores-interiores">
        <a href="exteriores.html" class="exteriores col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="imgExteriores">
                <h2>EXTERIORES</h2>
            </div>
        </a>
        <a href="interiores.html" class="interiores col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="imgInteriores">
                <h2>INTERIORES</h2>
            </div>
        </a>
    </section>

    <section class="renders">
        <video src="imgs/Renders/renders.mov" autoplay muted loop plays-inline class="backvideo"></video>
            <div class="container rendersTexto col-lg-7 col-md-8 col-sm-12" data-aos="fade-up">
                <h2>Pide tu proyecto en 3D</h2>
                <p>En Fustadecor tambi??n ofrecemos la posibilidad de crear un r??nder personalizado en 3D. Nosotros junto con FDisseny nos encargaremos de recrear el resultado final que tendr?? tu proyecto en tu terraza, jard??n, zona de ocio o piscina, siempre buscando el encanto, la simpleza y la sencillez</p><br>
                <a href="dise??os3D.html" class="btnLanding">SABER M??S</a>
            </div>
    </section>

    

    <section class="contacto" id="contacto">
        <div class="contacto-texto col-xl-8 col-lg-12 col-md-12 col-sm-12 mb-4">
            <h2>??Contacta con nosotros!</h2>
            <p>??A??n tienes dudas? ??Tienes una propuesta para un proyecto? Si es el caso, no dudes en enviarnos un mensaje a trav??s del siguiente formulario o desde nuestras redes sociales y Whatsapp. 
            ??Te contestaremos lo antes posible y pronto nos pondremos en marcha!</p>
        </div>
        <div class="contacto-form col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <form method="POST" action= "index.php#contacto" id="form" class="mb-4">
                <div class="grid">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre*" required>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos*" required>
                    <input type="tel" name="telefono" id="telefono" placeholder="Telefono*" required>
                    <input type="email" name="email" id="email" placeholder="Correo*" required>
                </div>
                <textarea placeholder="Mensaje*" name="mensaje"></textarea>
                <input type="submit" name="btnEnviar" value="ENVIAR" class="btnLanding">
            </form>

        </div>
    </section>
</body>
<footer>
    <div class="row">
        <div class="infoFustadecor container col">
            <img src="imgs/logos/new_logo_XL.png" alt="Fustadecor logo" class="mb-3">
            <p>Sabadell, 08201, Espa??a</p>
            <p>fustadecorparquetsytarimas@gmail.com</p>
            <p>607901949</p>
        </div>
        <div class="social container col">
            <ul>
                <li><a href="#" class="fa fa-facebook" target=???_blank???></a></li>
                <li><a href="https://twitter.com/fustadecor1" class="fa fa-twitter" target=???_blank???></a></li>
                <li><a href="https://www.instagram.com/fustadecor_exteriors" class="fa fa-instagram" target=???_blank???></a></li>
                <li><a href="https://www.pinterest.es/santirg1968" class="fa fa-pinterest" target=???_blank???></a></li>
                <li><a href="#" class="fa fa-whatsapp" target=???_blank???></a></li>
            </ul>
        </div>
        <div class="container volver col mt-3">
            <a href="#">Volver al principio</a>
        </div>
    </div>
</footer>
</html>