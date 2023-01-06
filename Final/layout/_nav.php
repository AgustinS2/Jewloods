<nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="container px-4 px-lg-5">
                <img src="img/logo.png" alt="" width="70">
                <a class="navbar-brand" href="index.php">Jewloods</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    </ul>
                    <form class="d-flex">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4 mx-4">
                    <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i></a>
                            <ul class="dropdown-menu p-5" aria-labelledby="navbarDropdown">
                                <label for="usuario">Ingresar usuario</label>
                                <input type="text" id="usuario">
                                <label for="contraseña">Ingrese su contraseña</label>
                                <input type="text" id="contraseña">
                                <p>Olvide mi contraseña</p>
                                <hr class="dropdown-divider" />
                                <button>Iniciar sesion</button>
                                <br>
                                <a href="registrarse.php" class="text-black">¿No tiene cuenta? Registrese.</a>
                            </ul>
                        </li>
                    </ul>
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>