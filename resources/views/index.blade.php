<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Planet</title>
    <link rel="icon" href="{{ asset('assets/img/icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fontdiner+Swanky&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <!-- Boxicons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark my-nav m-0 p-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo2.jpeg" class="fly" alt="logo" width="120" height="110">
            </a>
            <button class="navbar-toggler my-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-toggler"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#menu" role="button">
                            Carta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reserva">Reservar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <button class="btn my-btn-nav m-3" type="submit">Realizar pedido</button>
            </div>
        </div>
    </nav>

    <header>
        <div class="container" style="margin-top: 200px;">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 text-left">
                    <h1 class="mb-5">Pizza Planet</h1><br>
                    <h2 class="mb-5">Las mejores pizzas de la galaxia</h2>
                    <a class="btn mt-5 my-btn-header" href="#menu" role="button">Echa un vistazo</a>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <img src="./img/p2.png" class="rotate my-header-img" alt="pizza giratoria">
                </div>
            </div>
        </div>

    </header>

    <section class="menu-area section-gap" id="menu">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10" id="menu">Carta</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="filters-content">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/margherita.png" alt="Margherita">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Margarita</h4>
                            </div>
                            <div class="menu-price">
                                <h4>10.50€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, mozzarella y tomate.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/texas.png" alt="Texas">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Granjera</h4>
                            </div>
                            <div class="menu-price">
                                <h4>13.00€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, pollo, pimiento, maíz y cebolla.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/mista.png" alt="Mista">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Mixta</h4>
                            </div>
                            <div class="menu-price">
                                <h4>12.00€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, champiñones, jamón y salami.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/vegetarian.png" alt="Vegetarian">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Vegetariana</h4>
                            </div>
                            <div class="menu-price">
                                <h4>11.00€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, espinacas, cebolla, pimiento, tomates y champiñones.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/Funghi.png" alt="Funghi Con Pollo">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Funghi Con Pollo</h4>
                            </div>
                            <div class="menu-price">
                                <h4>13.00€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, champiñones y pollo.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/Speciale.png" alt="Especial">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Especial</h4>
                            </div>
                            <div class="menu-price">
                                <h4>12.00€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, pollo y cebolla.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/Salami.png" alt="Salami">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Salami</h4>
                            </div>
                            <div class="menu-price">
                                <h4>12.00€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda y salami.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="single-menu">
                            <div class="menu-image">
                                <img src="./img/Classico.png" alt="Classico">
                            </div>
                            <div class="menu-name title-wrap d-flex justify-content-between">
                                <h4>Clásica</h4>
                            </div>
                            <div class="menu-price">
                                <h4>11.50€</h4>
                            </div>
                            <p class="menu-info">
                                Queso gouda, salami, champiñones, pimiento y pepperoni.
                            </p>
                            <div class="menu-order">
                                <button type="button" class="btn btn-lg btn-block m-0 my-btn">Pedir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reserva" id="reserva">
        <div class="title text-center">
            <h2 class="mb-10">Reservar mesa</h2><br>
            <h3 class="mb-10">¡No te quedes sin sitio!</h3>
        </div>
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 text-left">
                    <h4 class="m-5">Selecciona la fecha y hora de tu visita y te mandaremos un correo con la
                        confirmación de tu reserva</h4>
                    <input type="date" class="form-label mx-5" style="width:48%" name="fecha de reserva" id="calendar"> 
                    <input type="time" class="" style="width:17%" name="hora de reserva" id="calendar">
                    <input type="number" class="form-label mx-5"style="width:75%" name="comensales" placeholder="Nº de personas" id="calendar"><br>
                    <input type="email" class="form-label mx-5"style="width:75%" name="correo" placeholder="correo@email.com" id="">
                    <button class="btn my-btn-nav mx-5 mt-5 d-flex" type="submit">Enviar</button>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <img src="./img/inside2.webp" class="my-5 my-header-img" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="contacto" id="contacto">
        <div class="title text-center">
            <h2 class="mb-10">Contacto</h2><br>
            <h3 class="mb-10">Descubre la mejor forma para llegar</h3>
        </div>
        <div class="contact-box container-fluid">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="contact__map mt-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194373.82850915194!2d-3.9798831939697425!3d40.42898227697662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225687fcede43%3A0xf044a99bb1787ea!2sPizza%20Planet!5e0!3m2!1ses!2ses!4v1664909154959!5m2!1ses!2ses"
                                width="100%" height="250px" style="border:0; border-radius: 0px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </section>
</body>

</html>