@extends('layouts.merge.site')
@section('titulo', 'Hospitais')
@section('content')

    <section class="hero-page">
    <img class="image-banner" src="/assets/images/hospital.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/hospital.jpg 500w, /assets/images/hospital.jpg 800w, /assets/images/hospital.jpg 1080w, /assets/images/hospital.jpg 1600w, /assets/images/hospital.jpg 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>Hospitais</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>

      

        <section class=container>
            <div class="row ">
                <div class="col-md-12 col-12">
                    <p class="text-justify mt-5">
                        {!! html_entity_decode($hospitalDocument->body) !!}
                    </p>
                </div>
            </div>

            <div class="row">

                 @foreach ($Hospitais as $item)
                 <div  id="cardHotel" class="my-5 col-lg-4 col-sm-12 col-md-6">

                  <a href="{!! url('/Lista-de-hospitais/' . urlencode($item->hospitalName)) !!}">
                    <img src="/storage/{{ $item->attachment }}" class="img-fluid shadow rounded">
                  </a>
        

                    <div class="information-session  bg-white shadow rounded p-3 "> 
                      <a href="{!! url('/Lista-de-hospitais/' . urlencode($item->hospitalName)) !!}"><h6 class="">{{ $item->hospitalName }}</h6></a> 
                      
                    </div>

                  </div>
            @endforeach

                
            </div>

        </section>

    </main>
@endsection
