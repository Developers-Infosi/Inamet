@extends('layouts.merge.site')
@section('titulo', 'Detalhes de Transportes')
@section('content')

 <section class="hero-page">
    <img class="image-banner" src="/assets/images/transporte.png" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/transporte.png 500w, /assets/images/transporte.png 800w, /assets/images/transporte.png 1080w, /assets/images/transporte.png 1600w, /assets/images/transporte.png 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong> {{ $laceCar->name }}</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>

    
        <section class=container>
            <div class="row my-5">
                <div class="col-md-12 col-12">

                    <h2 class="mt-5  mb-3"> {{ $laceCar->name }}</h2>

                    <p class="text-justify">
                        {!! html_entity_decode($laceCar->description) !!}

                    </p>

                </div>


            </div>
        </section>


@endsection
