<!DOCTYPE html>
<html lang="{fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Astuces et conseils utiles pour vous améliorer en PHP, Laravel et bootstrap - Rebecca Tshika's Blog</title>

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
        <div class="container-fluid">
            <a class="navbar-brand align-right" href="#">Rebecca Tshika's Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a class="nav-link active  fw-bold" aria-current="page" href="#home">Accueil</a>
                    </li>
                    <a class="nav-link  fw-bold" href="#articles">Articles</a>
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
        <div class="row bg-purple d-flex justify-content-center p-5" id="home">
            <div class="text-white text-center">
                <h1 class="fw-bold">Au cœur du développement Web</h1>
                <p class="h3 mb-5">Astuces et conseils utiles pour vous améliorer en PHP, Laravel et bootstrap</p>
            </div>
            <form class="col-md-6" action="#">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recherche..." aria-label="Recherche..."
                        aria-describedby="button-addon2">
                    <button class="btn btn-primary ms-" type="submit" id="button-addon2">
                        Rechercher
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid">
        {{-- <div class="row col-md-12 mx-5">
            <h5 class="fw-bold my-4">Articles recents</h5>
            <div class="col-md-10">
                <div class="container-fluid">
                    <div class="col-md-6">
                <img src="img/article.jpg" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                    <a class="notunderline" href="#">
                        <h5 class="card-title fw-bold text-left">Titre de l'article</h5>
                    </a>
                    <p class="card-text text-right">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum
                        fugiat nesciunt eveniet dolore quibusdam quae dolorum.
                    </p>
                    <button type="button" class="btn btn-outline-secondary btn-sm">en savoir
                        plus</button>
                </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row col-md-12">
                    <img src="img/article.jpg" width="200px" height="200px" class="img-thumbnail rounded-start" alt="...">
                    <div class="card-body">
                        <a class="notunderline" href="#">
                            <h5 class="card-title fw-bold text-right">Titre de l'article</h5>
                        </a>
                        <p class="card-text text-right">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                        <button type="button" class="btn btn-outline-secondary btn-sm">en savoir
                            plus</button>
                    </div>
                </div>
                <div class="row col-md-12">
                    <img src="img/article.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <a class="notunderline" href="#">
                            <h5 class="card-title fw-bold text-right">Titre de l'article</h5>
                        </a>
                        <p class="card-text text-right">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                        <button type="button" class="btn btn-outline-secondary btn-sm">en savoir
                            plus</button>
                    </div>
                </div>
                <div class="row col-md-12">
                    <img src="img/article.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <a class="notunderline" href="#">
                            <h5 class="card-title fw-bold text-right">Titre de l'article</h5>
                        </a>
                        <p class="card-text text-right">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                        <button type="button" class="btn btn-outline-secondary btn-sm">en savoir
                            plus</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row col-md-10 offset-md-1">
            <h5 class="fw-bold my-3">Tout les articles</h5>
            @for ($i = 0; $i < 9; $i++)
                <div class="col-md-6">
                    <div class="my-3">
                        <img src="img/article.jpg" class="img-fluid rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Titre de l'article</h5>
                            <div class="my-2">
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                            </div>

                            <p class="card-text text-right">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum
                                fugiat nesciunt eveniet dolore quibusdam quae dolorum.
                            </p>
                            <a href="#" class="text-decoration-none text-dark fw-bold">
                                Lire l'article
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <footer>
        <div class="col-md-12 bg-purple text-white">
            <div class="col-md-6 p-5 d-flex align-items-center justify-content-center">
                <div>
                    <h5 class="mb-2 fw-bold" id="contact">Me contacter</h5>
                    <p>
                        Drop me a line or two if you want to
                        work together!
                    </p>
                    <p>123-456-7890</p>
                    <p>hello@reallygreatsite.com</p>

                </div>
            </div>
            <div>

            </div>
        </div>
    </footer>
</body>

</html>
