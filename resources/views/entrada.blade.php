@extends('layouts.page')

@section('title', '- Blog | ' . $post->title)

    <style>
        .masthead {
            display: none !important;
        }

    </style>

@section('contenido')

    <!-- Masthead -->
    <header class="masthead-iso text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h2 class="mb-5"> BLOG </h2>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="card">
                    <img src="{{ $post->get_imagen }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="text-justify">{{ $post->description }}</p>
                    </div>

                    <div class="card-footer">
                        <p>Autor: {{  $post->user->name }} </p>
                        <p>Publicado el: {{ $post->created_at  }} </p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-3">
                @includeIf('partials.recientes', ['posts' => $posts ])
            </div>
        </div>
    </div>



@endsection
