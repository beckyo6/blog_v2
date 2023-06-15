@extends('app')

@section('title', 'Astuces et conseils utiles pour vous améliorer en PHP, Laravel et bootstrap')

@section('content')
    <div class="container">
        <div class="row col-md-12">
            <h3 class="fw-bold my-3">Tout les articles</h3>
            <hr class="mb-0">
            @foreach ($articles as $article)
                <div class="col-md-6">
                    <div class="my-3">
                        <img src="{{ asset($article->image) }}" class="img-fluid img-corner" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $article->titre }}</h4>
                            <div class="my-2">
                                <span class="badge rounded-pill bg-purple">purple</span>
                                <span class="badge rounded-pill bg-purple">purple</span>
                                <span class="badge rounded-pill bg-purple">purple</span>
                            </div>

                            <p class="card-text text-right text-muted">
                                {{ $article->resume }}
                            </p>
                            <a href="{{ route('articles.show', $article->slug) }}" class="text-decoration-none text-dark fw-bold">
                                Lire l'article
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row col-md-12">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-3">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-md">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
