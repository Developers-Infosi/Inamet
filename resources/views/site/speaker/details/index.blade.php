@extends('layouts.merge.site')
@section('titulo', 'Orador')
@section('content')


 <section class="hero-page">
    <img class="image-banner" src="/assets/images/speakers-p-500.png" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/speakers-p-500.png 500w, /assets/images/speakers-p-500.png 800w, /assets/images/speakers-p-500.png 1080w, /assets/images/speakers-p-500.png 1600w, /assets/images/speakers-p-500.png 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>{{ $speaker->name }}</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-md-6 my-5">
                <img src="/storage/{{ $speaker->photo }}" class="img-fluid w-100" />
                <div class="information-position  shadow-lg p-5 w-100">
                   <h4> {{ $speaker->name  }}</h4>
                    <span>{{ $speaker->function }}</span>
                </div>
            </div>

            <div class="col-lg-7 col-sm-12 col-md-6 my-5">
                <div style="text-align:justify;">
                    {!! html_entity_decode($speaker->description) !!}
                </div>
            </div>
        </div>
    </section>



@endsection