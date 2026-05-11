@extends('layouts.merge.site')
@section('titulo', 'Documentos')
@section('content')

<section class="hero-page">
    <img class="image-banner" src="/assets/images/docs.png" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/docs.png 500w, /assets/images/docs.png 800w, /assets/images/docs.png 1080w, /assets/images/docs.png 1600w, /assets/images/docs.png 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>Documentos</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>

        <section class="container">
            <div class="row my-5 p-5 justify-content-center text-center">

                @foreach ($docs as $item)
                   <div class="col-md-6 col-lg-3 col-sm-12  card shadow-sm m-2 p-5">
                        <a target="_blank" href="/storage/{{ $item->path }}">
                            <img src="/site/images/icons/pdf.png" >
                        </a>
                        <h3 class="my-3">{{ $item->title }}</h3>
                   </div>
                @endforeach

            </div>

             <nav class="justify-content-center d-flex mt-5">
            <b> {{ $docs->links() }}</b>
        </nav>

        </section>
 


@endsection
