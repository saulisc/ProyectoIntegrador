<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mandaditos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- añadimos el sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            
            <img src="https://previews.123rf.com/images/asmati/asmati1706/asmati170606464/80933568-elemento-de-plantilla-de-dise%C3%B1o-de-signo-de-letra-m-vector-icono-blanco-con-suave-sombra-sobre-fondo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Mandaditos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store">Tienda</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Hogar</a></li>
                            <li><a class="dropdown-item" href="#">Escuela</a></li>
                            <li><a class="dropdown-item" href="#">Niños</a></li>
                            <li><a class="dropdown-item" href="#">Dama</a></li>
                            <li><a class="dropdown-item" href="#">Caballero</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Ver todas las categorias</a></li>
                        </ul>
                    </li>
                -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cart">Ver carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inventario">Consultar inventario</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="producto/categoria" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('contenido')
    <div class="images">
        <h4 class="text-aling center"> Sponsored </h4>
        <img src="https://www.helios.mx/wp-content/uploads/2017/04/billboard-4-Telcel-Hola.jpeg" class="telcel"
            alt="..." width="250" height="150">
        <img src="https://img.redbull.com/images/c_fill,w_1200,h_630,g_auto,f_auto,q_auto/redbullcom/2022/3/23/hhvrcxem5ekprr81sctv/sergio-perez-rbr"
            class="telcel" alt="..." width="250" height="150">
        <img src="https://www.retailactual.com/media/uploads/noticias/Casado-premium-aguacates-retail-actual.jpg"
            class="telcel" alt="..." width="250" height="150">
        <img src="https://brandemia.org/contenido/subidas/2011/03/pepsi-a-traves-de-la-historia.jpg" class="telcel"
            alt="..." width="250" height="150">
        <img src="https://cdn.24.co.za/files/Cms/General/d/7731/be29177450c64a54a7c8a41927e4c999.jpg" class="telcel"
            alt="..." width="250" height="150">
    </div>

    <div class="alert alert-secondary text-center center mt-5" role="alert">
        <small class="text-muted">Mandaditos 2022 All rights reserved</small>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
