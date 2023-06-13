@extends('app')

@section('title', 'Astuces et conseils utiles pour vous améliorer en PHP, Laravel et bootstrap')

@section('content')

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

    <div class="container">
        <div class="row col-md-12">
            <h3 class="fw-bold my-3">Vient de paraître</h3>
            <hr class="mb-0">

            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-6">
                    <div class="my-3">
                        <img src="img/article.jpg" class="img-fluid rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Titre de l'article</h5>
                            <div class="my-2">
                                <span class="badge rounded-pill bg-purple">Secondary</span>
                                <span class="badge rounded-pill bg-purple">Secondary</span>
                                <span class="badge rounded-pill bg-purple">Secondary</span>
                            </div>

                            <p class="card-text text-right">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum
                                fugiat nesciunt eveniet dolore quibusdam quae dolorum.
                            </p>
                            <a href="{{ route('articles.show') }}" class="text-decoration-none text-dark fw-bold">
                                Lire l'article
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="row col-md-12">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-3">
                <a href="{{ route('articles.index') }}" class="btn btn-outline-purple btn-lg px-4">
                    En découvrir plus
                </a>
            </div>
        </div>
    </div>
@endsection
