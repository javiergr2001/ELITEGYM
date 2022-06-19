<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/logo.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/Gimnasio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELITE GYM</title>
</head>

<body>
    <header class="smm-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-2 ">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
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
                                <li><a class="dropdown-item" href="MaquinasPectorales.html
                                    ">Pectoral</a></li>
                                <li><a class="dropdown-item" href="#">Espalda</a></li>
                                <li><a class="dropdown-item" href="#">Cuadriceps</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="conócenos.html">Conócenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="formulario.php">Registro</a>
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
    <div class="container mt-4">
        <h1 class="fuente text-center">TODO LOGRO EMPIEZA CON LA DECISION DE INTENTARLO, REGÍSTRATE CON ELITE GYM</h1>
    </div>
    <section class="wrap d-flex mb-5" id="formulario">
        <div class="wrap m-auto mt-5 ">
            <div class="card  m-auto" style="width: 18rem;">
                <img src="../img/motivacion.jpg" card-img-top alt="...">
                <div class="card-body">
                    <p class="card-text">Tu gimnasio en Bormujos. Tú marcas tu objetivo, nosotros te ayudamos a
                        lograrlo.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5 mb-5" id="registro">
            <div class="row comentario m-auto">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="mt-2">Datos Usuario</h2>
                    <!-- <div id="fondo">
                       </div>-->
                    <form id="perfil" action="../controller/Registro.php" method="POST">
                </div>
                <div class="form-group pb-4 col-sm-6">
                    <label for="inputUsuario">Usuario</label>
                    <input type="text" class="form-control mt-2" id="inputUsuario" name="usuario" required>
                </div>
                <div class="form-group pb-4 col-sm-6">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control mt-2" id="inputNombre" name="nombre" required>
                </div>
                <div class="form-group pb-4 col-sm-6">
                    <label for="inputApellidos">Apellidos</label>
                    <input type="text" class="form-control mt-2" id="inputApellidos" name="apellidos" required>
                </div>
                <div class="form-group pb-4 col-sm-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control mt-2" id="inputEmail" name="email" required>
                </div>
                <div class="form-group pb-2 col-sm-6">
                    <label for="inputDni">Dni</label>
                    <input type="text" class="form-control mt-2" id="inputDni" name="dni" pattern="[0-9]{8}[A-Z]{1}" placeholder="11111111M">
                </div>
                <div class="form-group pb-2 col-sm-6">
                    <label for="inputTelefono">Telefono</label>
                    <input type="text" class="form-control mt-2" id="inputTelefono" name="telefono" placeholder="111-11-11-11" required>
                </div>
                <div class="form-group  col-sm-6">
                    <label for="inputContraseña">Contraseña</label>
                    <input type="password" class="form-control mt-2" id="inputContraseña" name="contrasena" required>
                </div>
                <label for="inputActividades" class="mb-3">Preferencias actividades</label>
                <div class="form-group col-sm-3">
                    <input type="checkbox" id="zumba">
                    <label for="zumba">Zumba</label>
                </div>
                <div class="form-group col-sm-3">
                    <input type="checkbox" class="" id="salsa">
                    <label for="salsa">Salsa</label>
                </div>
                <div class="form-group col-sm-3">

                    <input type="checkbox" id="spinning">
                    <label for="spinning">Spinning</label>
                </div>
                <div class="form-group col-sm-3">
                    <input type="checkbox" id="boxeo">
                    <label for="boxeo">Boxeo</label>
                </div>
                <div class="form-group col-sm-3">

                    <input type="checkbox" class="mt-2" id="body_pump">
                    <label for="body_pump">BodyPump</label>
                </div>
                <div class="form-group col-sm-3">
                    <input type="checkbox" class="mt-2" id="step">
                    <label for="step">Step</label>
                </div>
                <div class="form-group mb-4 col-sm-3">
                    <input type="checkbox" class="mt-2" id="gap">
                    <label for="gap">G.A.P</label>
                </div>
                <div class="btn-group mb-2 col-sm-4">
                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
                </div>
                <!--PONER CHEXBOX PARA ELEGIR QUE ACTIVIDADES LE GUSTA MAS-->
                </form>
                <?php
                ?>
            </div>
        </div>
        </div>
    </section>
    <!--Ventana modal de Inicio de Sesion-->
    <div class="modal fade" id="modalLogin">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="m-auto">
                        <div class="form-group">
                            <label for="inputUsuario">Usuario</label>
                            <input type="text" class="form-control" id="inputUsuario" placeholder="Escribe tu Usuario...">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Escribe tu contraseña...">
                        </div>
                        <div class="btn-group col-12 mt-2">
                            <button type="submit" class="btn btn-success btn-block"><a id="inicio">Iniciar Sesion</a>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p><a href="formulario.php">Registrarse</a></p>
                </div>
            </div>
        </div>
    </div>
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