<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/logo.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Gimnasio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELITE GYM</title>
</head>
<body>
    <header class="smm-header" id="hover">
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark pb-2 ">
            <div class="container ">
                <a class="navbar-brand" href="index.php">
                    <h1 class="fuente">ELITE GYM</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 m-auto mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Maquinas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="view/MaquinasPectorales.html">Pectoral</a></li>
                                <li><a class="dropdown-item" href="#">Espalda</a></li>
                                <li><a class="dropdown-item" href="#">Cuadriceps</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="view/con??cenos.html">Con??cenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="view/formulario.php">Registro</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Inicio Sesion <span class="visually-hidden">(current)</span></a></li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!--Ventana modal de Inicio de Sesion-->
    <div class="modal fade" id="modalLogin">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="m-auto" method="POST" action="controller/Login.php">
                        <div class="form-group">
                            <label for="inputUsuario">Usuario</label>
                            <input type="text" class="form-control" id="inputUsuario" name="usuariologin" placeholder="Escribe tu Usuario...">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contrase??a</label>
                            <input type="password" class="form-control" id="inputPassword" name="contrasenalogin" placeholder="Escribe tu contrase??a...">
                        </div>
                        <div class="btn-group col-12 mt-2">
                            <button type="submit" class="btn btn-success btn-block">Iniciar Sesion
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p><a href="view/formulario.php">Registrarse</a></p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/foto1.jpg" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/foto2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/foto3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="wrap pt-4 pb-4" id="instructor">
        <div class="container w-100">
            <div class="row ">
                <div class="col-sm-8 left-side">
                    <h1 class="fuente text-center">HORARIO DE ACTIVIDADES</h1>
                    <table cellpadding="22px" id="tabla_actividad">
                        <thead>
                            <tr>
                                <th>HORARIO</th>
                                <th>LUNES</th>
                                <th>MARTES</th>
                                <th>MIERCOLES</th>
                                <th>JUEVES</th>
                                <th>VIERNES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>9:00-10:30</td>
                                <td class="zumba">ZUMBA</td>
                                <td class="salsa">SALSA</td>
                                <td class="zumba">ZUMBA</td>
                                <td class="salsa">SALSA</td>
                                <td class="zumba">ZUMBA</td>
                            </tr>
                            <tr>
                                <td>11:30-13:00</td>
                                <td class="step">STEP</td>
                                <td class="gap">G.A.P</td>
                                <td class="step">STEP</td>
                                <td class="gap">G.A.P</td>
                                <td class="step">STEP</td>
                            </tr>
                            <tr>
                                <td>16:00-17:30</td>
                                <td class="zumba">ZUMBA</td>
                                <td class="boxeo">BOXEO</td>
                                <td class="bodypump">BODY PUMP</td>
                                <td class="salsa">SALSA</td>
                                <td class="spinning">SPINNING</td>
                            </tr>
                            <tr>
                                <td>18:00-19:30</td>
                                <td class="spinning">SPINNING</td>
                                <td class="spinning">SPINNING</td>
                                <td class="spinning">SPINNING</td>
                                <td class="spinning">SPINNING</td>
                                <td class="bodypump">BODY PUMP</td>
                            </tr>
                            <tr>
                                <td>20:00-21:30</td>
                                <td class="boxeo">BOXEO</td>
                                <td class="bodypump">BODY PUMP</td>
                                <td class="boxeo">BOXEO</td>
                                <td class="bodypump">BODY PUMP</td>
                                <td class="boxeo">BOXEO</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="w-60">
                        <div class="accordion mt-2" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" id="zumba" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ZUMBA
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Es un programa de ejercicios que combina m??sica latina e internacional con
                                            movimientos de baile. Las rutinas de Zumba incorporan el entrenamiento por
                                            intervalos en el que se alternan ritmos r??pidos y lentos para ayudar a
                                            mejorar
                                            el
                                            estado cardiovascular.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" id="salsa" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        SALSA
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>La m??sica salsa es una mezcla de los sonidos africanos y caribe??os. Estos son
                                            sonidos
                                            como el son, mambo, bomba y plena. Salsa es un t??rmino que describe varios
                                            estilos
                                            r??tmicos e instrumentales que se originaron no solo en Puerto Rico, pero
                                            tambi??n
                                            en
                                            Cuba, Republica Dominicana, y s??, Los Estados Unidos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" id="step" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        STEP
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <P>El step es una actividad f??sica variante del aer??bic que consiste en la
                                            realizaci??n
                                            de una secuencia de ejercicios sobre un escal??n, denominado step.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" id="spinning" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        SPINNING
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <P>Es un ejercicio aer??bico y cardiovascular que se realiza sobre una bicicleta
                                            est??tica
                                            en el que se trabaja el tren inferior: las piernas y los gl??teos. Su
                                            finalidad
                                            principal es perder peso y la tonificaci??n de los m??sculos, adem??s de
                                            mejorar la
                                            fuerza y la resistencia.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfive">
                                    <button class="accordion-button collapsed" id="boxeo" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        BOXEO
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <P>El boxeo es un deporte de contacto que consiste en golpear con los pu??os con
                                            guantes
                                            a un adversario de un pesaje similar, por encima de su cintura; todo ello
                                            dentro
                                            de
                                            un cuadril??tero</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingsix">
                                    <button class="accordion-button collapsed" id="bodypump" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        BODY PUMP
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <P>El Body Pump es un programa de entrenamiento f??sico intenso que combina
                                            actividad
                                            aer??bica y trabajo muscular mediante el levantamiento de pesas al ritmo de
                                            la
                                            m??sica.
                                            Son sesiones dirigidas, divertidas y motivadoras, en las que se fortalece el
                                            sistema
                                            cardiovascular y la gran mayor??a de los m??sculos del cuerpo</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingseven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        G.A.P
                                    </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <P>Es un ejercicio que consiste en trabajar tres zonas del cuerpo en concreto:
                                            gl??teos,
                                            abdominales y piernas. ... Combina ejercicios de pie y en el suelo, y
                                            permite
                                            que se
                                            usen objetos auxiliares como mancuernas, barras, picas o step. La clase de
                                            GAP
                                            se divide
                                            en: Calentamiento.</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="bottom bg-dark">
        <div class="container-fluid pb-2 d-flex" id="abajo">
            <p>Pagina web Elite Gym &copy; 2022 | by <a href="http://www.iescamas.com">Fco Javier
                    Gomez</a>&nbsp;</p>
            <p>
                <a href="https://www.twitter.com" target="_blank" class="badge social twitter">
                    <i class="bi bi-twitter fs-5"></i>
                </a>
                <a href="https://www.facebook.com/" target="_blank" class="badge social facebook">
                    <i class="bi bi-facebook fs-5"></i>
                </a>
                <a href="https://www.instagram.com/?hl=es" target="_blank" class="badge social instagram">
                    <i class="bi bi-instagram fs-5"></i>
                </a>
            </p>
        </div>
    </footer>
</body>

</html>