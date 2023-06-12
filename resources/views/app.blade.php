<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') - Rebecca Tshika's Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet">

    <!-- js -->
    <script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand align-right" href="{{ route('home') }}">Rebecca Tshika's Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a class="nav-link active  fw-bold" aria-current="page" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <a class="nav-link  fw-bold" href="{{ route('articles.index') }}">Articles</a>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle fw-bold" data-bs-toggle="dropdown" href="#"
                            role="button" aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#php">Php</a></li>
                            <li><a class="dropdown-item" href="#laravel">Laravel</a></li>
                            <li><a class="dropdown-item" href="#html">Html</a></li>
                            <li><a class="dropdown-item" href="#bootstrap">Bootstrap</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link  fw-bold" href="https://rebeccatshika.com/">Portfolio</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item me-2">
                        <a class="nav-link fw-bold" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer>
        <div class="row col-md-12 bg-purple text-white">
            <div class="row my-4">
                <div class="col-md-5 offset-md-1">
                    <h4 class="mb-2 fw-bold font-title">Me contacter</h4>
                    <hr class="mb-2">
                    <p class="font-content">
                        <a target="_blank" class="link-light text-decoration-none fs-5"
                            href="https://wa.me/243907331708?text=Salut%20%21%20%0AJe%20suis%20interesse%20par%20vos%20services%2C%20pouvons-nous%20en%20discuter%20%3F">
                            <i class="fa-brands fa-whatsapp"></i>
                            +243 90 72 31 708
                        </a>
                    </p>
                    <p class="font-content">
                        <a class="link-light text-decoration-none fs-5" target="_blank"
                            href="mailto:info@rebeccatshika.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            info@rebeccatshika.com
                        </a>
                    </p>
                    <p class="font-content">
                        <a class="text-decoration-none text-white me-1"
                            href="https://www.linkedin.com/in/rebecca-tshikadile/" target="_blank">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                        <a class="text-decoration-none text-white me-1" href="https://www.tiktok.com/@rebecca_tshika"
                            target="_blank">
                            <i class="fab fa-tiktok fa-2x"></i>
                        </a>
                        <a class="text-decoration-none text-white" href="https://www.instagram.com/rebeccatshikadile/"
                            target="_blank">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 offset-1">
                    <h4 class="mb-2 fw-bold font-title">Liens utiles</h4>
                    <hr class="mb-2">
                    <ul class="list-unstyled">
                        <li><a class="text-white mb-1 text-decoration-none fs-5" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li><a class="text-white mb-1 text-decoration-none fs-5"
                                href="{{ route('articles.index') }}">Articles</a></li>
                        <li><a class="text-white mb-1 text-decoration-none fs-5" href="">Categories</a></li>
                        <li><a class="text-white mb-1 text-decoration-none fs-5" href="https://rebeccatshika.com">Mon
                                portfolio</a> </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <p>Copyright &copy; 2023 <a class="text-decoration-none text-white"
                            href="https://rebeccatshika.com">Rebecca Tshika</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
