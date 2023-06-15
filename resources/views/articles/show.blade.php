@extends('app')

@section('title', $article->slug)

@section('content')
    <div class="container pt-2">
        <div class="row col-md-12">
            <img src="{{ asset($article->image) }}" class="img-fluid img-corner" alt="...">
            <div class="card-body">
                <h4 class="fw-bold">{{ $article->titre }}</h4>
                <div class="my-2">
                    <span class="badge rounded-pill bg-purple">purple</span>
                    <span class="badge rounded-pill bg-purple">purple</span>
                    <span class="badge rounded-pill bg-purple">purple</span>
                </div>
                <p>{!! $article->contenu !!}</p>
                <hr class="mb-0">
                
            </div>
        </div>
        <div class="row col-md-12">
            <p class="align-item-center">
                <span class="me-5">Partager</span>
                <a class="text-decoration-none text-purple me-1" href="#" target="_blank">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a class="text-decoration-none text-purple me-1" href="#" target="_blank">
                    <i class="fa-brands fa-whatsapp fa-2x"></i>
                </a>
                <a class="text-decoration-none text-purple me-1" href="#" target="_blank">
                    <i class="fa-brands fa-square-twitter fa-2x"></i></a>

                <a class="text-decoration-none text-purple" href="#" target="_blank">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </p>
        </div>
    </div>
@endsection
