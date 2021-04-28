@extends('layouts.page')
@section('title','-BLOG')
<style>

    .masthead {
        display: none !important;
    }

    .bg-slider{ display: none !important}

</style>
@section('contenido')


<header class="masthead-iso text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h2 class="mb-5"> ENTRADAS DE BLOG </h2>
            </div>
        </div>
    </div>
</header>

<!--ENTRADAS-->

    <section class="contenido my-5">
        <div class="container">
            <div class="row mt-5">
                @forelse($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ $post->get_imagen }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text text-justify">{{ $post->get_resumen }}</p>
                            <a href="{{ route('entrada', $post->id) }}">Leer más [...]</a>
                        </div>
                    </div>
                </div>
                @empty
                <p>No hay entradas publicadas</p>
                @endforelse
            </div>

             {{ $posts->links() }}

        </div>
    </section>

    @endsection
 
